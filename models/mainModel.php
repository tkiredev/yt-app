<?php
//modelo principal.
class mainModel{
    static function getViewsModel($views){
    $listWhite = ["/","watch","results"];

      if (in_array($views,$listWhite)) {
        if (is_file("./views/view-main.html")) {
          $content = "./views/view-main.html";
        } else $content = "./views/404-view.html";
      } else $content = "./views/404-view.html";
      
      return $content;
    }
}
?>