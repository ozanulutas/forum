<?php

class Forum extends Model {

    public $id;
    public $category_id;
    public $name;
    public $description;
    public $sort;

    /* private $dbc;


    public function __construct($dbc = null) {
        $this->dbc = $dbc;
    }

    public function storeValues($data = array()) {

        $this->id = $data['id'];
        $this->category_id = $data['category_id'];
        $this->name = $data['name'];
        $this->description = $data['description'];
        $this->sort = $data['sort'];
    }

    public function getById($id) {

        $sql = "SELECT * FROM forums WHERE id = :id";
        $stmt = $this->dbc->prepare($sql);
        $stmt->execute(['id' => $id]);
        $row = fetch($stmt); 
        
        $this->storeValues($row);
    }

    public function getList() {

    } */
}