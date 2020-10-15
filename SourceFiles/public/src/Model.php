<?php

class Model {

    protected static $dbc;
    protected static $tableName;


    public function __construct($dbc = null) {
        //$this->dbc = $dbc;
        self::$dbc = $dbc;
        self::$tableName = strtolower(get_class($this));
    }


    /*
    *   Reutrns the non-static property names
    */
    private function getProperties() {
        return array_keys(get_object_vars($this));
        //return array_keys(get_class_vars(get_class($this)));
    }

    
    /*
    *   Gets the property names form child class and store given data in child properties
    */
    public function storeValues($data = array()) {

        foreach($this->getProperties() as $propertyName) {
            $this->$propertyName = $data[$propertyName];
            //echo $this->$propertyName;
        }
    }


    public function getById($id) {

        $table = self::$tableName;

        $sql = "SELECT * FROM $table WHERE id = :id";
        $stmt = self::$dbc->prepare($sql);
        $stmt->execute(['id' => $id]);
        
        $row = $stmt->fetch();
        $this->storeValues($row);
    }

    
    public function getList() {

        $table = self::$tableName;

        $sql = "SELECT * FROM $table";
        $stmt = self::$dbc->prepare($sql);
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            $model = new $this;
            $model->storeValues($row);
            $list[] = $model;
        }

        return $list;
    }


}