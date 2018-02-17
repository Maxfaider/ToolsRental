<?php

class AdminDao extends Dao {

    /** Crea un nuevo elemento a la base de datos
     */
    public function create($data): string {
        $this->_connection->open();
        $stmt = $this->_connection->prepare("INSERT INTO employee 
            (document, name, lastname, address, email, code_employee) 
            VALUES (?, ?, ?, ?, ?, ?);");

        $array_employee = array($data->getDocument(),
            $data->getName(), $data->getLastName(), 
            $data->getAddress(), $data->getEmail(),
            $data->getCode());

        $result = $stmt->execute($array_employee);

        $stmt = null;
        $this->_connection->close();

        return $result ? 'success' : 'failure';
    }

    /** Confirma si un elemeto se encuentra
     * flag 0 -> document
     * flag 1 -> email
     * flag 2 -> codigo de empleado
     * flag 3 -> nombre, lastname
     */
    public function find($flag, ...$arguments): string {
        $option = array('document', 'email', 'code_employee', 
            'name', 'lastname');
        
        $sql = "SELECT * 
            FROM employee
            WHERE $option[$flag] = ?";
        if($flag === 3) 
            $sql .= " and $option[4] = ?;";
        
        $this->_connection->open();
        $stmt = $this->_connection->prepare($sql);
        $result = $stmt->execute($arguments);
        
        $response = 'failure';
        if($result) {
            $nRow = count($stmt->fetchAll(PDO::FETCH_NUM));
            $response = ($nRow === 1) 
                ? 'success' : 'no found';
        } 
         
        $stmt = null;
        $this->_connection->close();
        
        return $response;
    }

     /** Listar elementos 
     * arguments -> atributos a buscar
     * values    -> filtra elementos por valores correspodientes con la posicion de arguments
     *  Note: si arguments esta vacio, lista todos los elementos 
     */
    public function toList(array $attributes = [], array $values = []): array {
        $sql = "SELECT * FROM employee WHERE ";
        
        !empty($attributes) ?
            sqlConcat($sql, $attributes, 'AND') : $sql.='1';
        
        $sql .= ';';

        $this->_connection->open();
        $stmt = $this->_connection->prepare($sql);

        $result = $stmt->execute($values);
        if($result) {
            $employees = array();
            $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
            createEmployee($response, $employees);
        }

        $stmt = null;
        $this->_connection->close();
        return $employees;
    }

    /** Actualizar elementos de la base de datos
     * id -> referencia del elemento a actualizar
     * arguments -> atributos a actualizar
     * values    -> nuevos valores correspodientes con la posicion de arguments
     */
    public function update($id, array $attributes, array $values): string {
        $sql = "UPDATE employee SET ";
        
        sqlConcat($sql, $attributes, ',');
        $sql.=" Where document=?";
        
        $this->_connection->open();
        $stmt = $this->_connection->prepare($sql);
                
        $values[] = $id;
        $result = $stmt->execute($values);
        
        $stmt = null;
        $this->_connection->close();
        
        return $result ? 'success' : 'failure';
    }

    /**Eliminar elemento de la base de datos
     * id -> referencia del elemento a actualizar
     */
    public function delete($id): string {
        $this->_connection->open();
        $stmt = $this->_connection->prepare("DELETE FROM employee
            WHERE document=?;");
        
        $result = $stmt->execute(array($id));

        $stmt = null;
        $this->_connection->close();
        
        return $result ? 'success' : 'failure';
    }
    
}
