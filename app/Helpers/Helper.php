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
                'route_name'=>'course',
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

function sendOTP($receptor,$otpCode){
    try
    {
        $template = "OtpCode";
        $api = new \Ghasedak\GhasedakApi('08a5595b0e4c23c980ccecafbe7a43e03ee1ebabf6a43ee6e63ac85a33902d85');
        $api->Verify( $receptor, $template, $otpCode);
    }
    catch(\Ghasedak\Exceptions\ApiException $e){
        echo $e->errorMessage();
    }
    catch(\Ghasedak\Exceptions\HttpException $e){
        echo $e->errorMessage();
    }
}
?>
