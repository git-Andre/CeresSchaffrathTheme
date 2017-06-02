<?php
    /**
     * Created by PhpStorm.
     * User: Andre Oelschlaegel
     * Date: 17.05.2017
     * Time: 19:21
     */


    namespace CeresSchaffrath\Providers;


    use Plenty\Plugin\RouteServiceProvider;
    use Plenty\Plugin\Routing\Router;

    class CeresSchaffrathRouteServiceProvider extends RouteServiceProvider {

        public function map(Router $router)
        {
            $router -> get('/agb', 'CeresSchaffrath\Controllers\StaticPagesController@call');
        }
    }