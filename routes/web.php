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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/add-admin','add-admin');
Route::view('/404','404');
Route::view('/about','about');
Route::view('/add-instructor','add-instructor');
Route::view('/add-new-course','add-new-course');
Route::view('/add-students','add-students');
Route::view('/add-to-cart','add-to-cart');
Route::view('/addon-manager','addon-manager');
Route::view('/admin-revenue','admin-revenue');
Route::view('/blog-detail','blog-detail');
Route::view('/blogs','blogs');
Route::view('/checkout','checkout');
Route::view('/component','component');
Route::view('/contact','contact');
Route::view('/coupons','coupons');
Route::view('/course-category','course-category');
Route::view('/course-detail-2','course-detail-2');
Route::view('/course-detail-3','course-detail-3');
Route::view('/course-detail-4','course-detail-4');
Route::view('/course-detail','course-detail');
Route::view('/dash-about','dash-about');
Route::view('/dashboard','dashboard');
Route::view('/element','element');
Route::view('/enroll-history','enroll-history');
Route::view('/enroll-student','enroll-student');
Route::view('/explore-category','explore-category');
Route::view('/faq','faq');
Route::view('/find-instructor','find-instructor');
Route::view('/forgot','forgot');
Route::view('/grid-layout-full-2','grid-layout-full-2');
Route::view('/grid-layout-full-3','grid-layout-full-3');
Route::view('/grid-layout-full','grid-layout-full');
Route::view('/grid-layout-with-sidebar-2','grid-layout-with-sidebar-2');
Route::view('/grid-layout-with-sidebar-3','grid-layout-with-sidebar-3');
Route::view('/grid-layout-with-sidebar-3','grid-layout-with-sidebar-4');
Route::view('/grid-layout-with-sidebar-4','grid-layout-with-sidebar-4');
Route::view('/grid-layout-with-sidebar-5','grid-layout-with-sidebar-5');
Route::view('/grid-layout-with-sidebar','grid-layout-with-sidebar');
Route::view('/home-4','home-4');
Route::view('/index','index');
Route::view('/instructor-detail','instructor-detail');
Route::view('/instructor-payout','instructor-payout');
Route::view('/instructor-revenue','instructor-revenue');
Route::view('/list-layout-with-full','list-layout-with-full');
Route::view('/list-layout-with-sidebar','list-layout-with-sidebar');
Route::view('/list-shop-with-sidebar','list-shop-with-sidebar');
Route::view('/login','login');
Route::view('/manage-admins','manage-admins');
Route::view('/manage-course','manage-course');
Route::view('/manage-instructor','manage-instructor');
Route::view('/manage-students','manage-students');
Route::view('/messages','messages');
Route::view('/my-profile','my-profile');
Route::view('/payment_settings','payment_settings');
Route::view('/pricing','pricing');
Route::view('/product-detail','product-detail');
Route::view('/shop-with-right-sidebar','shop-with-right-sidebar');
Route::view('/shop-with-sidebar','shop-with-sidebar');
Route::view('/signup','signup');
Route::view('/smtp-setting','smtp-setting');
Route::view('/social-login','social-login');
Route::view('/system-settings','system-settings');
Route::view('/themes','themes');
Route::view('/website-settings','website-settings');
Route::view('/wishlist','wishlist');


