<?php

class RentalDao extends Dao {

    /** Crea un nuevo elemento a la base de datos
     */
    public function create($data): string {
        return "create";
    }

    /** Buscar por
     * flag 1 -> user, password
     * flag 2 -> user
     * flag 3 -> email
     * flag 4 -> codigo
     */
    public function find($flag, ...$arguments): string {

    }

     /** Listar elementos 
     * arguments -> atributos a buscar
     * values    -> filtra elementos por valores correspodientes con la posicion de arguments
     *  Note: si arguments esta vacio, lista todos los elementos 
     */
    public function toList(array $arguments = [], array $values = []): array {

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