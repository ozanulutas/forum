<?php

class HomeController extends Controller {

    function defaultAction() {

        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();

        $data = array();

        /* $category = new Category($dbc);
        $category->getById(1);
        $data['category'] = $category;  */      

        $category = new Category($dbc);
        $categories = $category->getList();
        
        $forum = new Forum($dbc);
        $forums = $forum->getList();

        $data['categories'] = $categories;
        $data['forums'] = $forums;  
        

        $template = new Template('layout');
        $template->view('home-view', $data);
    }
}