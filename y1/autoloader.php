<?php
// For solving loading issue of PHPUNIT classs from pear folder
 spl_autoload_register(function($class)
 {   
         $file = str_replace('_','/',$class.'.php');

                 //Suppress errors in case it can't find the file.
                         @include_once $file;
                         });
