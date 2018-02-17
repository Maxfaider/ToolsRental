<?php

class TypePerson {

    public static $EMPLOYEE = 1;
    public static $CLIENT = 2;

    public static function getType(Person $person): string {
        if($person instanceof Client) {
            return "Client";
        } else {
            return "Employee";
        }
    }

}