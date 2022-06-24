<?php


if(!function_exists('hasPageArea')) {
    function hasPageArea($routeName):bool
    {
        $pagesWithOutPageArea = ['home'];
        return !in_array($routeName, $pagesWithOutPageArea);
    }
}

if(!function_exists('getRouteName')){
    function getRouteName()
    {
        return Request::route()->getName();
    }
}

if(!function_exists('getRouteAction')){
    function getRouteAction()
    {
        $route=explode('.',Request::route()->getName());
        return $route[count($route)-1];
    }
}

if(!function_exists('getHeader')){
    function getHeader(): array
    {
        return [
            [
              'title'=>'Home',
              'route_name'=>'home',
              'view'=>'all',
              'child'=>[]
            ],
            [
                'title'=>'Blog',
                'route_name'=>'blog',
                'view'=>'all',
                'child'=>[]
            ],
            [
                'title'=>'Contact Us',
                'route_name'=>'contact_us',
                'view'=>'all',
                'child'=>[
                    [
                        'title'=>'Our Team',
                        'route_name'=>'our_team',
                        'view'=>'all',
                        'child'=>[]
                    ],
                    [
                        'title'=>'About Us',
                        'route_name'=>'about_us',
                        'view'=>'all',
                        'child'=>[]
                    ]
                ]
            ],
            [
                'title'=>'Panel',
                'route_name'=>'',
                'view'=>'all',
                'child'=>[
                    [
                        'title'=>'Login',
                        'route_name'=>'login',
                        'view'=>'guest',
                        'child'=>[]
                    ],
                    [
                        'title'=>'Signup',
                        'route_name'=>'signup',
                        'view'=>'guest',
                        'child'=>[]
                    ],
                    [
                        'title'=>'Dashboard',
                        'route_name'=>'dashboard',
                        'view'=>'auth',
                        'child'=>[]
                    ],
                    [
                    'title'=>'logout',
                    'route_name'=>'logout',
                    'view'=>'auth',
                    'child'=>[]
                ]
                ]
            ]
        ];
    }
}

if(!function_exists('isNavItemActive')){
    function isNavItemActive(string $routeName,array $relatedRoute=[],string $className)
    {
        array_push($relatedRoute,$routeName);
        return in_array(getRouteName(),$relatedRoute)?$className:'';
    }
}
?>
