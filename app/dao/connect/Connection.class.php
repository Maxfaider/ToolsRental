<?php

interface Connection {

    public function open(): bool;
    public function prepare(string $sql): PDOStatement;
    public function close();
}

?>