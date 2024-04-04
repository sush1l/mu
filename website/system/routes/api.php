<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::namespace('api')->name('api.')->group(function (){
    Route::apiResource('header','HeaderController')->only(['index']);
    Route::apiResource('infrastructure','InfrastructureController')->only(['index']);
    Route::apiResource('slider','SliderController')->only(['index']);
    Route::apiResource('employee','EmployeeController')->only(['index']);
    Route::apiResource('office','OfficeDetailController')->only(['index']);
    Route::apiResource('setting_employee','SettingEmployeeController')->only(['index']);
    Route::apiResource('dastabej_category','DastabejCategoryController')->only(['index','show']);
    Route::apiResource('dastabej','DastabejController')->only(['index','show']);
    Route::apiResource('social_region_category','SocialRegionCategoryController')->only(['index','show']);
    Route::apiResource('social_region','SocialRegionController')->only(['index','show']);
    Route::apiResource('download_category','DownloadCategoryController')->only(['index','show']);
    Route::apiResource('download','DownloadController')->only(['index','show']);
    Route::apiResource('photo_album','PhotoAlbumController')->only(['index','show']);
    Route::apiResource('photo','PhotoController')->only(['index','show']);
   // Route::apiResource('video','VideoController')->only(['index','show'])->only(['index','show']);
    //Route::apiResource('audio','AudioController')->only(['index','show'])->only(['index','show']);
    Route::apiResource('notice_category','NoticeCategoryController')->only(['index','show']);
    Route::Resource('notice','NoticeController')->only(['index','show']);
    Route::apiResource('publication_category','PublicationCategoryController')->only(['index','show']);
    Route::Resource('publication','PublicationController')->only(['index','show','active']);
    Route::Resource('faq','FaqController')->only(['index']);
    Route::Resource('link','LinkController')->only(['index']);
    Route::resource('bill','BillController')->only(['index']);
    Route::resource('heading_detail','HeadingDetailController')->only(['index']);
    Route::resource('directorate','DirectorateController')->only(['index','show']);
    Route::resource('sub_ordinates','SubOrdinateOfficeController')->only(['index','show']);
    Route::resource('covid19','covid19Controller')->only(['index']);
    Route::resource('pcr','PcrController')->only(['index']);
});

