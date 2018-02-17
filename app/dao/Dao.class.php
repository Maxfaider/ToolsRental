<?php

abstract class Dao {
   
    protected $_connection;
    
    public function setConnection(Connection $connection) {
        $this->_connection = $connection;
    }

    public function getConnection() {
        return $_connection;
    }

    /** Crea un nuevo elemento a la base de datos
     */
    abstract function create($data): string;

    /** Confirma si un elemento se encuentra
     * flag 1 -> user, password
     * flag 2 -> user
     * flag 3 -> email
     * flag 4 -> codigo
     */
    abstract function find($flag, ...$arguments): string;

    /** Listar elementos 
     * arguments -> atributos a buscar
     * values    -> filtra elementos por valores correspodientes con la posicion de arguments
     *  Note: si arguments esta vacio, lista todos los elementos 
     */
    abstract function toList(array $attributes = [], array $values = []): array;

    /** Actualizar elementos de la base de datos
     * id -> referencia del elemento a actualizar
     * arguments -> atributos a actualizar
     * values    -> nuevos valores correspodientes con la posicion de arguments
     */
    abstract function update($id, array $attributes, array $values): string;

    /**Eliminar elemento de la base de datos
     * id -> referencia del elemento a actualizar
     */
    abstract function delete($id): string;

}

?>