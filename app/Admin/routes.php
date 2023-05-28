<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('venues', VenueController::class);
    $router->resource('applicants', ApplicantController::class);
    $router->resource('disciplines', DisciplineController::class);
    $router->resource('user-tests', UserTestController::class);
    $router->resource('tournment', TournmentController::class);
    $router->resource('teams', TeamController::class);

});
