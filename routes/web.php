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
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CoursecatController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\SiteconfigController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\WhychooseusController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('index');
});
Route::post('/auth/save', 'App\Http\Controllers\LoginController@save')->name('auth.save');
Route::post('/auth/check', 'App\Http\Controllers\LoginController@check')->name('auth.check');

Route::get('/auth/logout', 'App\Http\Controllers\LoginController@logout')->name('auth.logout');


    Route::get('/login', [LoginController::class, 'login'])->name('auth.login');
Route::get('/register', 'App\Http\Controllers\LoginController@register')->name('admin.register');


Route::get('/admin/dashboard', 'App\Http\Controllers\LoginController@dashboard')->middleware('AuthCheck');
Route::post('/message', 'App\Http\Controllers\MessageController@index')->middleware('Authcheck'
);
Route::post('/admission', 'App\Http\Controllers\AdmissionController@index')->middleware('AuthCheck');

Route::get('/register/index', 'App\Http\Controllers\LoginController@index');
Route::delete('/register/destroy/{admin}', 'App\Http\Controllers\LoginController@destroy');
Route::get('/notice/search', 'App\Http\Controllers\NoticeController@search')->name('noticeSearch');
Route::get('/result/search', 'App\Http\Controllers\resultController@search')->name('resultSearch');
Route::get('/event/search', 'App\Http\Controllers\EventController@search')->name('eventSearch');
Route::get('/blog/search', 'App\Http\Controllers\BlogController@search')->name('blogSearch');
Route::get('/news/search', 'App\Http\Controllers\NewsController@search')->name('newsSearch');



Route::resource('galleryCategory', GalleryCategoryController::class)->middleware('AuthCheck');
Route::resource('gallery', GalleryController::class)->middleware('AuthCheck');
Route::resource('message', MessageController::class);
Route::resource('news', NewsController::class)->middleware('AuthCheck');
Route::resource('result', resultController::class)->middleware('AuthCheck');
Route::resource('teacher', TeacherController::class)->middleware('AuthCheck');
Route::resource('blog', BlogController::class)->middleware('AuthCheck');
Route::resource('event', EventController::class)->middleware('AuthCheck');
Route::resource('notice', NoticeController::class)->middleware('AuthCheck');
Route::resource('slider', SliderController::class)->middleware('AuthCheck');
Route::resource('siteconfig', SiteconfigController::class)->middleware('AuthCheck');
Route::resource('whychooseus', WhychooseusController::class)->middleware('AuthCheck');
Route::resource('files', FilesController::class)->middleware('AuthCheck');
Route::resource('course', CourseController::class)->middleware('AuthCheck');
Route::resource('coursecat', CoursecatController::class)->middleware('AuthCheck');
Route::resource('admission', AdmissionController::class);



Route::get('/index','App\Http\Controllers\IndexController@index');
Route::get('/','App\Http\Controllers\IndexController@index');
Route::get('/aboutus','App\Http\Controllers\IndexController@about_us');
Route::get('/messages','App\Http\Controllers\IndexController@messages');
Route::get('/plannings','App\Http\Controllers\IndexController@planning');


Route::get('/results','App\Http\Controllers\IndexController@results');
Route::get('/notices','App\Http\Controllers\IndexController@notice');
Route::get('/courses/{id}','App\Http\Controllers\IndexController@course');
Route::get('/teachers','App\Http\Controllers\IndexController@teacher');
Route::get('/newses','App\Http\Controllers\IndexController@news');
Route::get('/galleries','App\Http\Controllers\IndexController@gallery');
Route::get('/events','App\Http\Controllers\IndexController@event');
Route::get('/blogs','App\Http\Controllers\IndexController@blog');
Route::get('/notice_details/{id}','App\Http\Controllers\IndexController@notice_details');
Route::get('/news_details/{id}','App\Http\Controllers\IndexController@news_details');

Route::get('/blog_details/{id}','App\Http\Controllers\IndexController@blog_details');
Route::get('/event_details/{id}','App\Http\Controllers\IndexController@event_details');
Route::get('/course_details/{id}','App\Http\Controllers\IndexController@course_details');
Route::get('/teacher_details/{id}','App\Http\Controllers\IndexController@teacher_details');
Route::get('/contacts','App\Http\Controllers\IndexController@contacts');

Route::get('/admissions','App\Http\Controllers\IndexController@admission');

