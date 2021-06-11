<?php
class HomeController extends Controller{
    public function index(){
//        echo "<pre>";
//        print_r($_SESSION);
//        echo "</pre>";
        $this->content=$this->render("Mvc/frontend/views/home/home.php");
       require_once 'Mvc/Frontend/views/layouts/main.php';
    }
}