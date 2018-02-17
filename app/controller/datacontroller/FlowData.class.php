<?php

require 'app/model/tools_rental/Tool.class.php';

class FlowData {
    
    public function getTools() {
        return new Tool();
    }
}