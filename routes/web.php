<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([ // Languages

    'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]

], function()
{     /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');

    Route::group(['middleware'=>'auth','prefix'=>'admin'],function (){

        Route::resource('users', 'UserController');

        Route::resource('heeders', 'HeederController');

        Route::resource('inFoAboutCompanies', 'InFoAboutCompanyController');

        Route::resource('ourServices', 'OurServicesController');

        Route::resource('prants', 'PrantController');

        Route::resource('orders', 'OrderController');

        Route::resource('settings', 'SettingsController');

    });

}); // End languages

Route::group([
//    'prefix' => LaravelLocalization::setLocale(),
//    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{
    // End of localization middleware

    Route::group(['auth'=>'guest'],function(){
        // index route
        Route::get('/','HomeController@front')->name('front.index');
        Route::post('message', 'OrderController@store')->name('message');
    });

});

Auth::routes(['verify' => true]);

// Infyom Routes
//Route::group(['middleware'=>'auth'],function (){
//
//    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');
//
//    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');
//
//    Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');
//
//    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');
//
//    Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');
//
//    Route::post(
//        'generator_builder/generate-from-file',
//        '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
//    )->name('io_generator_builder_generate_from_file');
//
//}); // End of Infyom Routes
