<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubcategoryController;
use App\Http\Controllers\admin\DistrictController;
use App\Http\Controllers\admin\SubdistrictController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\VideoGalleryController;
use App\Http\Controllers\admin\AdsController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\WebsitesettingController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ExtraController;




//website all route
// multilanguege route
Route::get('/', [HomeController::class, 'HomeEtc']);
Route::get('view/post/{id}', [ExtraController::class, 'SinglePost'])->name('SinglePost');
Route::get('language/english', [ExtraController::class, 'English'])->name('lang.english');
Route::get('language/hindi', [ExtraController::class, 'Hindi'])->name('lang.hindi');

//Post Category and subcategory
Route::get('category/post/{id}/{category_en}', [ExtraController::class, 'CategoryPost'])->name('CategoryPost');
Route::get('subcategory/post/{id}/{subcategory_en}', [ExtraController::class, 'SubcategoryPost'])->name('SubcategoryPost');

//search by district in home page
Route::get('/get/subdistrict/fronted/{district_id}', [ExtraController::class, 'GetSubDistrict']);
Route::get('/search/district', [ExtraController::class, 'SearchDistrict'])->name('search.district');


View::composer('website.home_master',function($view){
	$seo = DB::table('seos')->first();
	$view->with('seo',$seo);
});






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');



//admin logout route
Route::get('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

//admin account setting
Route::get('user/account', [AdminController::class, 'accountSetting'])->name('user.account');
Route::get('user/account/edit', [AdminController::class, 'userAccountEdit'])->name('user.account.edit');
Route::post('user/account/update', [AdminController::class, 'userProfileUpdate'])->name('user.profile.store');

//admin change password
Route::get('user/account/password', [AdminController::class, 'showPassword'])->name('show.password');
Route::post('/user/password/update', [AdminController::class, 'passwordUpdate'])->name('password.update');


//admin category route
Route::get('admin/category', [CategoryController::class, 'index'])->name('categories');
Route::get('category/add', [CategoryController::class, 'addCategory'])->name('add.category');
Route::post('category/store', [CategoryController::class, 'StoreCategory'])->name('store.category');
Route::get('category/edit/{id}', [CategoryController::class, 'EditCategory'])->name('edit.category');
Route::post('category/update/{id}', [CategoryController::class, 'UpdateCategory'])->name('update.category');
Route::get('category/delete/{id}', [CategoryController::class, 'DeleteCategory'])->name('delete.category');


//
Route::get('admin/ads', [AdsController::class, 'Listads'])->name('list.ads');
Route::get('admin/ads/add', [AdsController::class, 'addList'])->name('add.ads');
Route::post('ads/store', [AdsController::class, 'StoreAds'])->name('store.ads');
Route::get('ads/edit/{id}', [AdsController::class, 'EditAds'])->name('edit.ads');
Route::post('ads/update/{id}', [AdsController::class, 'UpdateAds'])->name('update.ads');
Route::get('ads/delete/{id}', [AdsController::class, 'DeleteAds'])->name('delete.ads');


//User Role route
Route::get('admin/user/insert', [RoleController::class, 'insertUser'])->name('add.user');
Route::get('admin/user/index', [RoleController::class, 'AllUser'])->name('user.index');
Route::post('admin/user/index', [RoleController::class, 'storeUser'])->name('store.user');
Route::get('admin/user/edit/{id}', [RoleController::class, 'EditUser'])->name('user.edit');
Route::post('admin/user/update/{id}', [RoleController::class, 'UpdateUser'])->name('update.user');


//admin subcategories route
Route::resource('subcategories', SubcategoryController::class)->middleware('auth');

//admin district route
Route::resource('distracts', DistrictController::class)->middleware('auth');

//admin district route
Route::resource('subdistracts', SubdistrictController::class)->middleware('auth');

//admin all Post route
Route::resource('posts', PostController::class)->middleware('auth');

//json data route subcategory
Route::get('/get/subcategory/{category_id}', [PostController::class, 'GetSubcategory']);

//json data route subcategory
Route::get('/get/subdistrict/{district_id}', [PostController::class, 'GetSubDistrict']);

//Social setting route
Route::get('/setting/social', [SettingController::class, 'socialSetting'])->name('social');
Route::post('/setting/social/update/{id}', [SettingController::class, 'socialUpdate'])->name('update.social');

//Seo setting route
Route::get('/setting/seo', [SettingController::class, 'SeoSetting'])->name('seo.setting');
Route::post('/setting/seo/update/{id}', [SettingController::class, 'SeoUpdate'])->name('update.seo');

//prayer setting route
Route::get('/setting/prayer', [SettingController::class, 'PrayerSetting'])->name('prayer.setting');
Route::post('/setting/prayer/update/{id}', [SettingController::class, 'PrayerUpdate'])->name('update.prayer');

//Live Tv route
Route::get('/setting/livetv', [SettingController::class, 'liveTvSetting'])->name('livetv.setting');
Route::post('/setting/livetv/update/{id}', [SettingController::class, 'liveTvUpdate'])->name('update.livetv');
Route::get('/livetv/active/{id}', [SettingController::class, 'ActiveSetting'])->name('livetv.active');
Route::get('/livetv/deactive/{id}', [SettingController::class, 'DeactiveSetting'])->name('livetv.deactive');

//Live Tv route
Route::get('/setting/notice', [SettingController::class, 'noticeSetting'])->name('notice.setting');
Route::post('/setting/notice/update/{id}', [SettingController::class, 'noticeUpdate'])->name('update.notice');
Route::get('/notice/active/{id}', [SettingController::class, 'ActiveNotice'])->name('notice.active');
Route::get('/notice/deactive/{id}', [SettingController::class, 'DeactiveNotice'])->name('notice.deactive');


//Website link route
Route::get('/setting/website', [SettingController::class, 'WebsiteSetting'])->name('all.website');
Route::get('/add/website', [SettingController::class, 'CreateWebsite'])->name('add.website');
Route::post('/store/website', [SettingController::class, 'websiteStore'])->name('store.website');
Route::get('website/edit/{id}', [SettingController::class, 'EditWebsite'])->name('edit.website');
Route::post('website/update/{id}', [SettingController::class, 'UpdateWebsite'])->name('update.website');
Route::get('website/delete/{id}', [SettingController::class, 'DeleteWebsite'])->name('delete.website');

//Gallery all route
Route::get('/photo/gallery', [GalleryController::class, 'PhotoGallery'])->name('all.photo');
Route::get('/add/gallery', [GalleryController::class, 'CreateGallery'])->name('add.photo')->middleware('auth');
Route::post('/store/photo', [GalleryController::class, 'PhotoStore'])->name('store.photo');
Route::get('photo/edit/{id}', [GalleryController::class, 'PhotoEdit'])->name('edit.photo');
Route::post('photo/update/{id}', [GalleryController::class, 'UpdatePhoto'])->name('update.photo');
Route::get('photo/delete/{id}', [GalleryController::class, 'DeletePhoto'])->name('delete.photo');

//Video Gallery route
Route::resource('videos', VideoGalleryController::class)->middleware('auth');

//website setting route
Route::get('/main/', [WebsitesettingController::class, 'MainWebsiteSetting'])->name('mainwebsite.setting');
Route::post('/main/update/{id}', [WebsitesettingController::class, 'UpdateWebsite'])->name('update.website');