<?php
    declare(strict_types = 1);

    session_start();

    define('APP_NAME', 'ZSE Elektronik');

    function minify_code($code): string {
        $search = [
            '/\>[^\S ]+/s',
  
            '/[^\S ]+\</s',

            '/(\s)+/s'
        ];

        $replace = ['>', '<', '\\1'];
        $code = preg_replace($search, $replace, $code);
        $code = str_replace('> ', '>', $code);

        return $code; 
    }

    ob_start('minify_code');
