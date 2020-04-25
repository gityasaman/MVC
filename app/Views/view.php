<?php
namespace App\Views;

        class View{

            public static function render($viewName,$data){
                $viewName = VIEW . DS . strtolower($viewName);
                $loader=new \Twig\Loader\FilesystemLoader(VIEW);
                $twig = new \Twig\Environment($loader);
                echo $twig->render($viewName,$data);
            }
        }
?>