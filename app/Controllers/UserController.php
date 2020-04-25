<?php
namespace app\controllers;

class UserController extends Controller{

    public function render($viewName,$data=['User'=>"emad"]){
        parent::render('User'.DS.$viewName,$data);
    }
}
?