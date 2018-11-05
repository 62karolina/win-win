<?php

Route::get('/', ['as' => 'index', 'uses' => 'PagesController@index']);
Route::get('/delivery', ['as' => 'delivery', 'uses' => 'PagesController@delivery']);
Route::get('/opinions', ['as' => 'opinions', 'uses' => 'PagesController@opinions']);
Route::get('/help', ['as' => 'help', 'uses' => 'PagesController@help']);
Route::get('/confidence', ['as' => 'confidence', 'uses' => 'PagesController@confidence']);
Route::get('/license', ['as' => 'license', 'uses' => 'PagesController@license']);
Route::get('/success', ['as' => 'success', 'uses' => 'PagesController@success']);
Route::get('/box/{id}', ['as' => 'box', 'uses' => 'PagesController@box']);
Route::get('/account/{id}', ['as' => 'account', 'uses' => 'PagesController@account']);
Route::get('/pay', ['as' => 'pay', 'uses' => 'PagesController@pay']);
Route::get('/contests', ['as' => 'contests', 'uses' => 'PagesController@contests']);
Route::get('/infocontests/{id}', ['as' => 'infocontests', 'uses' => 'PagesController@infocontests']);

Route::post('/updateDelivery', ['as' => 'updateDelivery', 'uses' => 'PagesController@updateDelivery']);
Route::post('/open', ['as' => 'open', 'uses' => 'PagesController@open']);
Route::post('/addTicket', ['as' => 'addTicket', 'uses' => 'PagesController@addTicket']);
Route::post('/api/stats', 'PagesController@getStats');
Route::post('/api/last', 'PagesController@last');
Route::post('/sale', 'PagesController@sell');
Route::post('/deliver', 'PagesController@deliver');
Route::post('/activate', 'PagesController@activate');
Route::post('/getPayment', 'PagesController@getPayment');
Route::post('/register', 'LoginController@registerPost');
Route::post('/login', 'LoginController@loginPost');

Route::group(['middleware' => 'notAuth'], function () {
    Route::get('/login', 'LoginController@login');
    Route::get('/changepass', 'LoginController@changepass');
    Route::post('/changepass', 'LoginController@changepassPost');
    Route::get('/register', 'LoginController@register');
    Route::get('/vklogin', 'LoginController@vklogin');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'LoginController@logout');
    Route::get('/profile', ['as' => 'profile', 'uses' => 'PagesController@profile']);
});
Route::group(['middleware' => 'admin', 'middleware' => 'access:admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/addCase', 'AdminController@addCase');
    Route::post('/addCase', 'AdminController@addCasePost');
    Route::get('/addItem', 'AdminController@addItem');
    Route::post('/addItem', 'AdminController@addItemPost');
    Route::get('/addContest', 'AdminController@addContest');
    Route::post('/addContest', 'AdminController@addContestPost');
    Route::get('/stock', 'AdminController@addStock');
    Route::post('/stock', 'AdminController@addStockPost');
    Route::get('/lastvvod', 'AdminController@lastvvod');
    Route::get('/lastvivod', 'AdminController@vivod');
    Route::get('/vivodgifts', 'AdminController@vivodgifts');
    Route::get('/users', 'AdminController@users');
    Route::get('/cases', 'AdminController@cases');
    Route::get('/items', 'AdminController@items');
    Route::get('/contests', 'AdminController@contests');
    Route::get('/tickets', 'AdminController@tickets');
    Route::get('/cases/{id}', ['as' => 'cases', 'uses' => 'AdminController@caseid']);
    Route::get('/items/{id}', ['as' => 'items', 'uses' => 'AdminController@itemid']);
    Route::get('/contests/{id}', ['as' => 'contest', 'uses' => 'AdminController@contestid']);
    Route::get('/ticket/{id}', ['as' => 'ticket', 'uses' => 'AdminController@ticket']);
    Route::post('/ticketsave', ['as' => 'ticket', 'uses' => 'AdminController@ticketsave']);
    Route::post('/casedit', ['as' => 'case', 'uses' => 'AdminController@casedit']);
    Route::post('/itemedit', ['as' => 'item', 'uses' => 'AdminController@itemedit']);
    Route::post('/contestedit', ['as' => 'contest', 'uses' => 'AdminController@contestedit']);
    Route::get('/searchusers', ['as' => 'search', 'uses' => 'AdminController@search2']);
    Route::get('/searchusersname', ['as' => 'search', 'uses' => 'AdminController@searchusersname']);
    Route::get('/user/{id}', ['as' => 'users', 'uses' => 'AdminController@userid']);
    Route::post('/userdit', ['as' => 'user', 'uses' => 'AdminController@userdit']);
    Route::match(['get', 'post'], '/givemoney/{id}', ['as' => 'givemoney', 'uses' => 'AdminController@givemoney']);
    Route::get('/vivod/{id}', 'AdminController@close');
    Route::post('/vivodsave', 'AdminController@vivodsave');
    Route::get('/vivodclosegift/{id}', 'AdminController@closegift');
});
