<?php

class AccountDao extends Dao {

     /** Crea un nuevo elemento a la base de datos
     */
    public function create($data): string {

        $type = $data->getType();
        $dao = ($type === 'Client') ? 
            new ClientDao() : new AdminDao();
        
        $dao->setConnection($this->_connection);

        $response = $dao->create($data->getPerson());

        if($response) {
            $this->_connection->open();
            $stmt = $this->_connection->prepare("INSERT INTO account 
                (user, password, state, type, document_person) 
                VALUES (?, ?, ?, ?, ?);");

            $state = 2;
            $type_id = 3;
            if($type !== 'Client') {
                $state = 1;
                $type_id = 1;
            }
    
            $array_account = array($data->getUser(),
                $data->getPassword(), $state, 
                $type_id, $data->getPerson()->getDocument());
    
            $result = $stmt->execute($array_account);
    
            $stmt = null;
            $this->_connection->close();
    
            return $result ? 'success' : 'failure';
        } 

        return $response;
    }

    /** Confirmar por
     * flag 0 -> user, password
     * flag 1 -> user
     */
    public function find($flag, ...$arguments): string {
        $option = array('user', 'password');

        $sql = "SELECT * 
            FROM account
            WHERE $option[0] = ?";
        if($flag === 0) 
            $sql .= " and $option[1] = ?;";

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
        $sql = "SELECT * FROM account WHERE ";
        
        !empty($attributes) ?
            sqlConcat($sql, $attributes, 'AND') : $sql.='1';
        
        $sql .= ';';

        $this->_connection->open();
        $stmt = $this->_connection->prepare($sql);

        $result = $stmt->execute($values);
        
        if($result) {
            $accounts = array();
            $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
            createAccount($response, $accounts);
        }

        $stmt = null;
        $this->_connection->close();

        return $accounts;
    }

    /** Actualizar elementos de la base de datos
     * id -> referencia del elemento a actualizar
     * arguments -> atributos a actualizar
     * values    -> nuevos valores correspodientes con la posicion de arguments
     */
    public function update($id='all', array $arguments, array $values): string {

    }

    /**Eliminar elemento de la base de datos
     * id -> referencia del elemento a actualizar
     */
    public function delete($id): string {
        
    }

}


