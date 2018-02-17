<?php

class ToolDao extends Dao {

     /** Crea un nuevo elemento a la base de datos
     */
    public function create($data): string {
        $this->_connection->open();

        $stmt = $this->_connection->prepare("INSERT INTO tool 
            (id, name, price, imagepath, idCategory) 
            VALUES (?, ?, ?, ?, ?);");

        $array_tool = array($data->geId(),
            $data->getName(), $data->getImagePath(), 
            $data->getPrice(), $data->getCategory());

        $result = $stmt->execute($array_tool);

        $stmt = null;
        $this->_connection->close();

        return $result ? 'success' : 'failure';
    }

    
    public function find($flag, ...$arguments): string {

    }

     /** Listar elementos 
     * arguments -> atributos a buscar
     * values    -> filtra elementos por valores correspodientes con la posicion de arguments
     *  Note: si arguments esta vacio, lista todos los elementos 
     */
    public function toList(array $attributes = [], array $values = []): array {
        $sql = "SELECT * FROM tool WHERE ";
        
        !empty($attributes) ?
            sqlConcat($sql, $attributes, 'AND') : $sql.='1';
        
        $sql .= ';';
        $this->_connection->open();
        $stmt = $this->_connection->prepare($sql);

        $result = $stmt->execute($values);
        if($result) {
            $tools = array();
            $response = $stmt->fetchAll(PDO::FETCH_ASSOC);
            createTool($response, $tools);
        }

        $stmt = null;
        $this->_connection->close();
        return $tools;
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