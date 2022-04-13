<?php


if(!function_exists('hasPageArea')) {
    function hasPageArea($routeName):bool{
        $pagesWithOutPageArea = ['home'];
        return !in_array($routeName, $pagesWithOutPageArea);
    }
}

if(!function_exists('getRouteName')){
    function getRouteName(){
        return Request::route()->getName();
    }
}

?>
