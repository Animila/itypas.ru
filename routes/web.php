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

Route::get('/', 'IndexController')->name('home');
Route::get('/about/', 'AboutController')->name('about');
Route::get('/site/', 'SiteController')->name('site');
Route::get('/structure/', 'StructureController')->name('structure');
Route::get('/contact/', 'ContactController')->name('contact');
Route::get('/expedition/', 'ExpeditionController')->name('expedition');
Route::get('/pad/', 'PADController')->name('pad');
Route::get('/news/', 'NewsController')->name('news');
Route::get('/military/', 'MilitaryController')->name('military');
Route::get('/jurisdiction/', 'JurisdictionController')->name('jurisdiction');
Route::get('/personal_list/{id}', 'PersonalController')->name('personal');
Route::get('/personal_list/', 'PersonalListController')->name('personal_list');
