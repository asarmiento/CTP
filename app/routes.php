<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::resource('catalogs', 'CatalogsController');
Route::resource('budgetstypes', 'TipoPresupuestosController');
Route::resource('checks', 'ChecksController');
Route::resource('spreadsheets', 'SpreadsheetsController');
Route::resource('budgets', 'BudgetsController');
Route::resource('suppliers', 'SuppliersController');
Route::resource('groups', 'GroupsController');
Route::resource('transfers', 'TransfersController');
Route::resource('balancebudgets', 'BalanceBudgetsController');
Route::resource('setup', 'SetupController');