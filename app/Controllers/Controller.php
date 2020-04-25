<?php
namespace app\controllers;
use \app\views\View;

    class Controller {
        
        public function __construct($action_name="home", $params=[]) {
            if (!method_exists($this, $action_name)) {
                $action_name = "../404";
                $params = [];
            }
            $this->render($action_name, $params);
        }
        
        public function render($viewName, $data=[]) {
            View::render($viewName, $data);
        }

        private function home() {

        }
    }
?>