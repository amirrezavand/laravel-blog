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
              'title'=>'خانه',
              'route_name'=>'home',
              'view'=>'all',
              'child'=>[]
            ],
            [
                'title'=>'دوره ها',
                'route_name'=>'product',
                'view'=>'all',
                'child'=>[]
            ],
            [
                'title'=>'بلاگ',
                'route_name'=>'blog',
                'view'=>'all',
                'child'=>[]
            ],
            [
                'title'=>'تماس با ما',
                'route_name'=>'contact_us',
                'view'=>'all',
                'child'=>[],
//                'child'=>[
//                    [
//                        'title'=>'تیم ما',
//                        'route_name'=>'our_team',
//                        'view'=>'all',
//                        'child'=>[]
//                    ],
//                    [
//                        'title'=>'درباره ما',
//                        'route_name'=>'about_us',
//                        'view'=>'all',
//                        'child'=>[]
//                    ]
//                ]
            ],
            [
                'title'=>'درباره ما',
                'route_name'=>'about_us',
                'view'=>'all',
                'child'=>[] ,
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
