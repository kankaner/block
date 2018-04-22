<?php

Route::get('/boolean',function(){
    return 'boolean';
});

Route::get('/api/test', 'TestController@index');

Route::get('/test', function () {
    return view('welcome')->with(['key'=>' its aaa beautiful','path'=>base_path()]);
});