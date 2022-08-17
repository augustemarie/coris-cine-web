<?php

if (!function_exists('dd')) {
    function dd($var) {
        print_r($var);
        die();
    }
}

if (!function_exists('sanitize')) {
    function sanitize($var, $type = "string") {
        # First cleaner
        $var = strip_tags(
            htmlspecialchars(
                htmlentities($var, ENT_QUOTES)
            )
        );

        if ($type == "email")
            if (!filter_var($var, FILTER_VALIDATE_EMAIL))
                throw new \Exception("Mail is not valid");

        if ($type == "int")
            if (!filter_var($var, FILTER_VALIDATE_INT))
                throw new \Exception("Int is not valid");

        if ($type == "string")
            if (!filter_var($var, FILTER_SANITIZE_STRING))
                throw new \Exception("String is not valid");

        return $var;
    }
}

if (!function_exists('go')) {
    function go($to) {
        return header("Location: $to");
    }
}


