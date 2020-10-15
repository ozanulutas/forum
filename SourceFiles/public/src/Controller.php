<?php 

class Controller {

    function runAction($actionName) {

        /*if(method_exists($this, 'runBeforeAction')) {
            
        }*/

        $actionName .= 'Action';
        if(method_exists($this, $actionName)) {
            $this->$actionName();
        }
        else {
            include 'view/status-pages/404.html';
        }
    }
}