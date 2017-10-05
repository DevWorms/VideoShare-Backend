<?php

Route::post("login","UserController@login");
Route::post("profile","UserController@profile");
Route::post("video", "VideoController@video");
Route::post("users", "UserController@users");
Route::post("videos", "VideoController@allvideos");
Route::post("videos/{video_id}", "VideoController@videos5Metros");

if (app()->environment('local') || app()->environment('stagging')) {
    Route::post('/videos/reset', 'VideoController@resetVideos');
}