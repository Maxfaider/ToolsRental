<?php

interface Pipe {

    public function filtered(ContentValues $content): ContentValues;

}

?>


