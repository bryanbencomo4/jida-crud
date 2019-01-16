<?php
    function view($view, $data=array()) {
        @extract($data);
        require 'views/layout.php';
    }
?>