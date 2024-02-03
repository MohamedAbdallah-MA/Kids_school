<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\authController;
use App\Http\Controllers\Admin\adminFaqController;
use App\Http\Controllers\Admin\adminHomeController;
use App\Http\Controllers\Admin\adminCourseController;
use App\Http\Controllers\Admin\adminSliderController;
use App\Http\Controllers\Admin\adminContactController;

use App\Http\Controllers\Admin\adminTeacherController;
use App\Http\Controllers\Admin\adminActivityController;
use App\Http\Controllers\EndUser\EndUserController;

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

Route::get('/', [EndUserController::class , 'home'])->name('EndUser.home');

// Route::post('/admin/login' , [authController::class , 'login'])->name('admin.login');

Route::get('/admin/login' , [authController::class , 'viewLogin'])->name('admin.loginPage');
Route::post('/admin/login' , [authController::class , 'login'])->name('admin.login');
Route::post('/admin/logout' , [authController::class , 'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin' , 'as' => 'admin.' , 'middleware' => 'auth'] , function () {

    Route::get('/', [adminHomeController::class , 'index'])->name('index');

    Route::get('/logout' , [authController::class , 'logout'])->name('logout');
// FAQ ROUTES

Route::group(['prefix' => 'faq' , 'as' => 'faq.'] , function ()  {
    Route::get('/create' , [adminFaqController::class , 'createFaq'])->name('create');
    Route::post('/store' , [adminFaqController::class , 'storeFaq'])->name('store');
    Route::get('/view' , [adminFaqController::class , 'viewFaqs'])->name('view');
    Route::delete('/delete' , [adminFaqController::class , 'deleteFaq'])->name('delete');
    Route::get('/edit/{faqId}' , [adminFaqController::class , 'editFaq'])->name('edit');
    Route::put('/update' , [adminFaqController::class , 'updateFaq'] )->name('update');
});


// SLIDER ROUTES
Route::group(['prefix' => 'slider' , 'as' => 'slider.'] , function () {
    Route::get('/create' , [adminSliderController::class , 'createSlider'])->name('create');
    Route::Post('/store' , [adminSliderController::class , 'storeSlider'])->name('store');
    Route::get('/view' , [adminSliderController::class , 'viewSliders'])->name('view');
    Route::delete('/delete' , [adminSliderController::class , 'deleteSlider'])->name('delete');
    Route::get('/edit/{imageId}', [adminSliderController::class , 'editSlider'])->name('edit');
    Route::put('/update' , [adminSliderController::class , 'updateSlider'])->name('update');
});

Route::group(['prefix' => 'activity' , 'as' => 'activity.'] , function () {
    Route::get('/create' , [adminActivityController::class , 'createActivity'])->name('create');
    Route::post('/store' , [adminActivityController::class , 'storeActivity'])->name('store');
    Route::get('/view' , [adminActivityController::class , 'viewActivities'])->name('view');
    Route::delete('/delete' , [adminActivityController::class , 'deleteActivity'])->name('delete');
    Route::get('/edit/{activityId}' , [adminActivityController::class , 'editActivity'])->name('edit');
    Route::put('/update' , [adminActivityController::class , 'updateActivity'])->name('update');
});

Route::group(['prefix' => 'course' , 'as' => 'course.'] , function () {
    Route::get('/create' , [adminCourseController::class , 'createCourse'])->name('create');
    Route::post('/store' , [adminCourseController::class , 'storeCourse'])->name('store');
    Route::get('/view' , [adminCourseController::class , 'viewCourses'])->name('view');
    Route::delete('/delete' , [adminCourseController::class , 'deleteCourse'])->name('delete');
    Route::get('/edit/{courseId}' , [adminCourseController::class , 'editCourse'])->name('edit');
    Route::put('/update' , [adminCourseController::class , 'updateCourse'])->name('update');
});

Route::group(['prefix' => 'teacher' , 'as' => 'teacher.'] , function () {
    Route::get('/create' , [adminTeacherController::class , 'createTeacher'])->name('create');
    Route::post('/store' , [adminTeacherController::class , 'storeTeacher'])->name('store');
    Route::get('/view' , [adminTeacherController::class , 'viewTeachers'])->name('view');
    Route::delete('/delete' , [adminTeacherController::class , 'deleteTeacher'])->name('delete');
    Route::get('/edit/{teacherId}' , [adminTeacherController::class , 'editTeacher'])->name('edit');
    Route::put('/update' , [adminTeacherController::class , 'updateTeacher'])->name('update');
});

Route::group(['prefix' => 'contact' , 'as' => 'contact.'] , function() {
    Route::get('/create' , [adminContactController::class , 'createContact'])->name('create');
    Route::post('/store' , [adminContactController::class , 'storeContact'])->name('store');
    Route::get('/view' , [adminContactController::class , 'viewContacts'])->name('view');
    Route::delete('/delete' , [adminContactController::class , 'deleteContact'])->name('delete');
});

});

