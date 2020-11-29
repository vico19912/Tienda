<?php 

function controllersAutoLoad($className){
    include 'controllers/'.$className.'.php';
}

spl_autoload_register('controllersAutoLoad');