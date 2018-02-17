<?php

function loadFile(string $file) {
    $content = file_get_contents($file);
    if ($content)
        return json_decode($content, true);
    return false;
}

function sqlConcat(string &$sql = '', array $attributes, string $character) {
    $nroAttributes = count($attributes);
    $index = 1;
    foreach ($attributes as $attribute) {
        $sql .= $attribute . '= ?';
        if($nroAttributes > $index) 
            $sql .= " $character ";
        $index++;
    }
    
    return $sql;
}

function createClient(array $results, &$clients) {
    foreach($results as $index) {
        $client = new Client();
        $client->setDocument($index['document']);
        $client->setName($index['name']);
        $client->setLastName($index['lastname']);
        $client->setAddress($index['address']);
        $client->setEmail($index['email']);
        $client->setCompany($index['company']);
        $client->setPatrimony($index['patrimony']);
        
        $clients[] = $client;
    }
}

function createEmployee(array $results, &$employees) {
    foreach($results as $index) {
        $employee = new Employee();
        $employee->setDocument($index['document']);
        $employee->setName($index['name']);
        $employee->setLastName($index['lastname']);
        $employee->setAddress($index['address']);
        $employee->setEmail($index['email']);
        $employee->setCode($index['code_employee']);
        
        $employees[] = $employee;
    }
}

function createTool(array $results, &$tools) {
    foreach($results as $index) {
        $tool = new Tool();
        $tool->setId($index['id']);
        $tool->setName($index['name']);
        $tool->setPrice($index['price']);
        $tool->setImagePath($index['imagepath']);
        $tool->setCategory($index['idCategory']);

        $tools[] = $tool;
    }
}

function createAccount(array $results, &$accounts) {
    foreach($results as $index) {
        $account = new Account();
        $account->setId($index['id']);
        $account->setUser($index['user']);
        $account->setState($index['state']);
        $account->setType($index['document_person']);
        $accounts[] = $account;
    }
}
