<?php 

abstract class Filter {

    private $_next;

    public function setNext(Filter $filter) {
        $this->filter;
    }

    abstract function filtered(ContentValues $content);
}

?>