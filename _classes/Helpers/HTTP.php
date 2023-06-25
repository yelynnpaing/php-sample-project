<?php

namespace Helpers;

class HTTP 
{
    static $base = "http://localhost/project";

    static function redirect($path, $q="")
    {
        // echo "HTTP Redirect <br>";
        $url = static::$base . $path;
        if($q) $url .= "?$q";

        header("location: $url");
        exit();
    }
}