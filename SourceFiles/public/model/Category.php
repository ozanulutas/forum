<?php

class Category extends Model {

    public $id;
    public $name;
    public $sort;

    /*private $dbc;


    public function __construct($dbc = null) {
        $this->dbc = $dbc;
    }

    public function storeValues($data = array()) {

        $this->id = $data['id'] ;
        $this->name = $data['name'] ;
        $this->sort = $data['sort'] ;
    }

    public function getById($id) {

        $sql = "SELECT * FROM category WHERE id = :id";
        $stmt = $this->dbc->prepare($sql);
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch();

        $this->storeValues($row);
    }

    public function getList() {

        $sql = "SELECT * FROM category";
        $stmt = $this->dbc->prepare($sql);
        $stmt->execute();

        $list = array();
        while($row = $stmt->fetch()) {
            $category = new Category();
            $category->storeValues($row);
            $list[] = $category;
        }

        return $list;
    }*/
}