<?php

namespace App\Helper;

    class Template{

        public static function showStatus($status){
            $class = $status == "active" ? "btn-success" : "btn-default";
            $html = "<a href='#' class='btn btn-md " . $class . "'><i class='fas fa-check'></i></a>";
            return $html;
        }
    }

?>