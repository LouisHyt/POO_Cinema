<?php

    spl_autoload_register(function($class_name){
        require_once('Classes/' .$class_name. '.php');
    })

    



?>