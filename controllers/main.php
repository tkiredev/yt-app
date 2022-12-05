<?php
//controllers
 require_once './models/mainModel.php';
 class controllers extends mainModel{
    public function getViewsController(){
      if (empty($_GET["url"])) return mainModel::getViewsModel("/");
      
      $router = (explode("/",$_GET['url']));
      return mainModel::getViewsModel($router[0]);    
    }
  }