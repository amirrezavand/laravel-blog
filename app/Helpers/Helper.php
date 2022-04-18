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

if(!function_exists('getHeader')){
    function getHeader(): array
    {
        return [
            [
              'title'=>'Home',
              'route_name'=>'home',
              'child'=>null
            ],
            [
                'title'=>'Blog',
                'route_name'=>'blog',
                'child'=>null
            ],
            [
                'title'=>'Contact Us',
                'route_name'=>'contact_us',
                'child'=>[
                    [
                        'title'=>'Our Team',
                        'route_name'=>'our_team',
                        'child'=>null
                    ],
                    [
                        'title'=>'About Us',
                        'route_name'=>'about_us',
                        'child'=>null
                    ]
                ]
            ],
            [
                'title'=>'Panel',
                'route_name'=>null,
                'child'=>[
                    [
                        'title'=>'Login',
                        'route_name'=>'login',
                        'child'=>null
                    ],
                    [
                        'title'=>'Signup',
                        'route_name'=>'signup',
                        'child'=>null
                    ]
                ]
            ]
        ];
    }
}
?>
