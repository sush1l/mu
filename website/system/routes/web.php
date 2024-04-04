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


Route::get('/',function(){
    return redirect('/ne');
});
Route::prefix('{language}')->where(['language'  =>  '[a-zA-Z]{2}'])->group(function (){    
    Route::get('/', 'frontend\index@index');
Route::get('introduction', 'frontend\introduction@introduction')->name('frontend.introduction');
Route::get('institution', 'frontend\institution@institution')->name('institution');
Route::get('c_charter', 'frontend\c_charter@c_charter')->name('c_charter');
Route::get('team', 'frontend\team@team')->name('team');
Route::get('exteam', 'frontend\exteam@exteam')->name('exteam');
Route::get('sanchalak', 'frontend\sanchalak@sanchalak')->name('sanchalak');
Route::get('darbandi', 'frontend\darbandi@darbandi')->name('darbandi');
Route::get('wadapatra', 'frontend\wadapatra@wadapatra')->name('wadapatra');
Route::get('news', 'frontend\news@news')->name('news');
Route::get('bolpatra', 'frontend\bolpatra@bolpatra')->name('bolpatra');
Route::get('loi', 'frontend\loi@loi')->name('loi');
Route::get('loa', 'frontend\loa@loa')->name('loa');
Route::get('anya', 'frontend\anya@anya')->name('anya');
Route::get('procurement', 'frontend\procurement@procurement')->name('procurement');
Route::get('work', 'frontend\work@work')->name('work');
Route::get('expenditure', 'frontend\expenditure@expenditure')->name('expenditure');
Route::get('annual', 'frontend\annual@annual')->name('annual');
Route::get('contract', 'frontend\contract@contract')->name('contract');
Route::get('video', 'frontend\VideoController@video')->name('video');
Route::get('gallary', 'frontend\gallary@gallary')->name('photo_gal');
Route::get('yearly', 'frontend\yearly@yearly')->name('yearly');
Route::get('partibedan', 'frontend\partibedan@partibedan')->name('partibedan');
Route::get('chaumasik', 'frontend\chaumasik@chaumasik')->name('chaumasik');
Route::get('masik', 'frontend\masik@masik')->name('masik');
Route::get('saptahik', 'frontend\saptahik@saptahik')->name('saptahik');
Route::get('flow', 'frontend\flow@flow')->name('flow');
Route::get('bill', 'frontend\billcontroller@bill')->name('bill');
Route::get('faq', 'frontend\FaqController@faq')->name('faq');
Route::get('download', 'frontend\downloadcontroller@download')->name('download');
Route::get('link', 'frontend\linkcontroller@link')->name('link');
Route::get('contact', 'frontend\contact@contact')->name('contact');
Route::get('ranniti', 'frontend\ranniti@ranniti')->name('ranniti');
Route::get('karyabidhi', 'frontend\karyabidhi@karyabidhi')->name('karyabidhi');
Route::get('yen', 'frontend\yen@yen')->name('yen');
Route::get('niyamawali', 'frontend\niyamawali@niyamawali')->name('niyamawali');
Route::get('search','search\SearchController@index')->name('search.search');
Route::get('contact-us', 'ContactController@getContact');
Route::post('contact-us', 'ContactController@saveContact');
});
Route::get('activities', 'frontend\activities@activities')->name('activities');
Route::get('photo/{id}', 'frontend\photos@photos')->name('photo_pic');
Route::get('/export', 'Covid19ExportController@export')->name('export');
Route::get('/exportPcr', 'PcrExportController@export')->name('exportPcr');

// Authentication Routes...
Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

// Password Reset Routes...
Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
    'as' => 'password.update',
    'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

// Registration Routes...
Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
])->middleware('auth');
Route::post('register', [
    'as' => '',
    'uses' => 'Auth\RegisterController@register'
])->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('password')->name('password.reset.')->group(function(){
    Route::post('/reset/otp','OtpController@check')->name('otp');
    Route::post('/reset/otp/verify/{user}','OtpController@verify')->name('otp.verify');
    Route::get('/reset/otp/{user}','OtpController@valid')->name('otp.form');
    Route::get('/reset/changes/{user}','OtpController@change')->name('changes');
    Route::post('reset/changess/{user}','OtpController@reset')->name('changesss');
});
Route::namespace('admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UserController')->middleware('can:manage-user');
    Route::get('change/password/{user}','PasswordController@index')->name('password.change');
    Route::put('change/password/{user}','PasswordController@store')->name('password.add');
    Route::get('change/profile/{user}','ProfileController@index')->name('profile.change');
    Route::put('change/profile/{user}','ProfileController@update')->name('profile.update');
});



Route::prefix('admin')->middleware('auth')->group(function (){
    Route::resource('/setting','HeaderController')->except(['edit','store','destroy','create','show']);
    Route::resource('infrastructure','InfrastructureController')->only(['index','store']);
    Route::resource('slider','SliderController')->except(['show','create']);
    Route::resource('department','DepartmentController')->except(['show','create']);
    Route::resource('designation','DesignationController')->except(['show','create']);
    Route::resource('employee','EmployeeController')->except(['show']);
    Route::resource('office_detail','OfficeDetailController')->only(['index','update']);
    Route::resource('setting_employee','SettingEmployeeController')->only(['index','update']);
    Route::resource('dastabej_category','DastabejCategoryController')->except(['create','show']);
    Route::resource('dastabej','DastabejController');
    Route::resource('social_region_category','SocialRegionCategoryController')->except(['create','show']);
    Route::resource('social_region','SocialRegionController');
    Route::resource('download_category','DownloadCategoryController')->except(['create','show']);
    Route::resource('download','DownloadController');
    Route::resource('photo_album','PhotoAlbumController');
    Route::resource('photo','PhotoController');
    // Route::resource('audio','AudioController');
    Route::resource('video','VideoController');
    Route::resource('ex_employee','ExEmployeeController');
    Route::resource('samiti','SamitiController');
    Route::resource('notice_category','NoticeCategoryController');
    Route::resource('notice','NoticeController');
    Route::resource('publication_category','PublicationCategoryController');
    Route::resource('publication','PublicationController');
    Route::resource('faq','FaqController');
    Route::resource('link','LinkController');
    Route::resource('contactadds','ContactController');
    Route::resource('bill','BillController');
    Route::resource('heading_detail','HeadingDetailController');
    Route::resource('directorate','DirectorateController');
    Route::resource('sub_ordinates','SubOrdinateOfficeController');
     Route::resource('notice', NoticeController::class);

    Route::resource('contact', ContactController::class);

    Route::resource('Group', ContactGroupController::class);
    Route::get('notice/{notice_id}/sms', [\App\Http\Controllers\SmsController::class,'SendSms'])->name('SMS');
    //covid 19
    Route::middleware('can:post-Covid19')->group(function (){
        Route::resource('covid19','Covid19Controller');
        Route::resource('pcr','PcrController');
    //bulk Data
        Route::get('/import', 'bulkImport@bulkimport')->name('import');
        Route::post('/import_parse', 'bulkImport@import')->name('import_parse');
        Route::post('/import_process', 'bulkImport@processImport')->name('import_process');
        //PCR
        Route::get('/importPcr', 'PcrImportController@bulkimport')->name('importPcr');
        Route::post('/import_parsePcr', 'PcrImportController@import')->name('import_parsePcr');
        Route::post('/import_processPcr', 'PcrImportController@processImport')->name('import_processPcr');
    });
    
    Route::get('appointments', function(){
        return view('user.backend.appointments.appointments');
    })->name('appointments');
    
    
});
//Route::get('install', function () {
  //Artisan::call('migrate:fresh');
   //Artisan::call('db:seed');
   //return dd('installed');   
//});

