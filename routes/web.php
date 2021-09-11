<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\UsersRegister;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AddClassTitleController;
use App\Http\Controllers\AddClassTestsController;
use App\Http\Controllers\AddClassRoomController;
use App\Http\Controllers\AddBenefitsController;
use App\Http\Controllers\AddAboutPageController;
use App\Http\Controllers\AddAboutUsController;
use App\Http\Controllers\ApiRestaurantController;
use App\Http\Controllers\AddOurVisionController;
use App\Http\Controllers\AddGeneralInforController;
use App\Http\Controllers\AddClassRoomTitleController;
use App\Models\Classroom;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\QuestionController;
// use App\Http\Controllers\Controller


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
    return view('dashboardpage/index');
})->name('auth.index');

Route::prefix('admin')->group(function(){
  Route::get('/', [Admin\Auth\LoginController::class, 'loginForm']);
  Route::get('/login', [Admin\Auth\LoginController::class, 'loginForm'])->name('admin.login');
  Route::post('/login', [Admin\Auth\LoginController::class, 'login'])->name('admin.login');
  Route::get('/home', [Admin\HomeController::class, 'index'])->name('admin.home');
  Route::get('/logout',[Admin\Auth\LoginController::class, 'logout'])->name('admin.logout');
});


// Dashboard add banner
Route::get('/dashboardpage/dashboard', [DashboardController::class, 'index'])->name('dashboardpage.dashboard');
Route::get('/dashboardpage/index_banner', [DashboardController::class, 'indexbanner'])->name('dashboardpage.index_banner');
Route::get('/dashboardpage/create_banner', [DashboardController::class, 'create'])->name('dashboardpage.create_banner');
Route::post('/dashboardpage/store', [DashboardController::class, 'store'])->name('dashboardpage.store');
Route::get('/dashboardpage/delete/{id}', [DashboardController::class, 'destroy'])->name('dashboardpage.delete');
Route::get('/dashboardpage/edit/{id}', [DashboardController::class, 'edit'])->name('dashboardpage.edit');
Route::post('/dashboardpage/update/{id}', [DashboardController::class, 'update'])->name('dashboardpage.update');

// Group route
    // Route::resource('resource/{table}/resource', 'DashboardController')->names([
    //     'index'     => 'index',
    //     'create'    => 'dashboardpage.create',
    //     'store'     => 'dashboardpage.store',
    //     'show'      => 'dashboardpage.show',
    //     'edit'      => 'dashboardpage.edit',
    //     'update'    => 'dashboardpage.update',
    //     'destroy'   => 'dashboardpage.destroy'
    // ]);

// Dashboard add class title
Route::get('/dashclasstitle/index_classtitle', [AddClassTitleController::class, 'index'])->name('dashclasstitle.index_classtitle');
Route::get('/dashclasstitle/create_classtitle', [AddClassTitleController::class, 'create'])->name('dashclasstitle.create_classtitle');
Route::post('/dashclasstitle/store', [AddClassTitleController::class, 'store'])->name('dashclasstitle.store');
Route::get('/dashclasstitle/delete/{id}', [AddClassTitleController::class, 'destroy'])->name('dashclasstitle.delete');
Route::get('/dashclasstitle/edit/{id}', [AddClassTitleController::class, 'edit'])->name('dashclasstitle.edit');
Route::post('/dashclasstitle/update/{id}', [AddClassTitleController::class, 'update'])->name('dashclasstitle.update');


// Dashboard add class tests
Route::get('/dashclasstests/index_classtests', [AddClassTestsController::class, 'index'])->name('dashclasstests.index_classtests');
Route::get('/dashclasstests/create_classtests', [AddClassTestsController::class, 'create'])->name('dashclasstests.create_classtests');
Route::post('/dashclasstests/store', [AddClassTestsController::class, 'store'])->name('dashclasstests.store');
Route::get('/dashclasstests/delete/{id}', [AddClassTestsController::class, 'destroy'])->name('dashclasstests.delete');
Route::get('/dashclasstests/edit/{id}', [AddClassTestsController::class, 'edit'])->name('dashclasstests.edit');
Route::post('/dashclasstests/update/{id}', [AddClassTestsController::class, 'update'])->name('dashclasstests.update');

// Dashboard add Class room
Route::get('/dashclassroom/index_classroom', [AddClassRoomController::class, 'index'])->name('dashclassroom.index_classroom');
Route::get('/dashclassroom/create_classroom', [AddClassRoomController::class, 'create'])->name('dashclassroom.create_classroom');
Route::post('/dashclassroom/store', [AddClassRoomController::class, 'store'])->name('dashclassroom.store');
Route::get('/dashclassroom/delete/{id}', [AddClassRoomController::class, 'destroy'])->name('dashclassroom.delete');
Route::get('/dashclassroom/edit/{id}', [AddClassRoomController::class, 'edit'])->name('dashclassroom.edit');
Route::post('/dashclassroom/update/{id}', [AddClassRoomController::class, 'update'])->name('dashclassroom.update');

// Dashboard add Class Benefits
Route::get('/dashbenefits/index_benefits', [AddBenefitsController::class, 'index'])->name('dashbenefits.index_benefits');
Route::get('/dashbenefits/create_benefits', [AddBenefitsController::class, 'create'])->name('dashbenefits.create_benefits');
Route::post('/dashbenefits/store', [AddBenefitsController::class, 'store'])->name('dashbenefits.store');
Route::get('/dashbenefits/delete/{id}', [AddBenefitsController::class, 'destroy'])->name('dashbenefits.delete');
Route::get('/dashbenefits/edit/{id}', [AddBenefitsController::class, 'edit'])->name('dashbenefits.edit');
Route::post('/dashbenefits/update/{id}', [AddBenefitsController::class, 'update'])->name('dashbenefits.update');

// Dashboard add about banners
Route::get('/dashaboutbanner/index_about_banner', [AddAboutPageController::class, 'index'])->name('dashaboutbanner.index_about_banner');
Route::get('/dashaboutbanner/create_about_banner', [AddAboutPageController::class, 'create'])->name('dashaboutbanner.create_about_banner');
Route::post('/dashaboutbanner/store', [AddAboutPageController::class, 'store'])->name('dashaboutbanner.store');
Route::get('/dashaboutbanner/delete/{id}', [AddAboutPageController::class, 'destroy'])->name('dashaboutbanner.delete');
Route::get('/dashaboutbanner/edit/{id}', [AddAboutPageController::class, 'edit'])->name('dashaboutbanner.edit');
Route::post('/dashaboutbanner/update/{id}', [AddAboutPageController::class, 'update'])->name('dashaboutbanner.update');


// Dashboard add about us
Route::get('/dashaboutus/index_about_us', [AddAboutUsController::class, 'index'])->name('dashaboutus.index_about_us');
Route::get('/dashaboutus/create_about_us', [AddAboutUsController::class, 'create'])->name('dashaboutus.create_about_us');
Route::post('/dashaboutus/store', [AddAboutUsController::class, 'store'])->name('dashaboutus.store');
Route::get('/dashaboutus/delete/{id}', [AddAboutUsController::class, 'destroy'])->name('dashaboutus.delete');
Route::get('/dashaboutus/edit/{id}', [AddAboutUsController::class, 'edit'])->name('dashaboutus.edit');
Route::post('/dashaboutus/update/{id}', [AddAboutUsController::class, 'update'])->name('dashaboutus.update');
// Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

//  Dashboard add vision
Route::get('/dashvision/index_vision', [AddOurVisionController::class, 'index'])->name('dashvision.index_vision');
Route::get('/dashvision/create_vision', [AddOurVisionController::class, 'create'])->name('dashvision.create_vision');
Route::post('/dashvision/store', [AddOurVisionController::class, 'store'])->name('dashvision.store');
Route::get('/dashvision/delete/{id}', [AddOurVisionController::class, 'destroy'])->name('dashvision.delete');
Route::get('/dashvision/edit/{id}', [AddOurVisionController::class, 'edit'])->name('dashvision.edit');
Route::post('/dashvision/update/{id}', [AddOurVisionController::class, 'update'])->name('dashvision.update');

// Dashboard room title
Route::get('/dashclassroomtitle/index_classroomtitle', [AddClassRoomTitleController::class, 'index'])->name('dashclassroomtitle.index_classroomtitle');
Route::get('/dashclassroomtitle/create_classroomtitle', [AddClassRoomTitleController::class, 'create'])->name('dashclassroomtitle.create_classroomtitle');
Route::post('/dashclassroomtitle/store', [AddClassRoomTitleController::class, 'store'])->name('dashclassroomtitle.store');
Route::get('/dashclassroomtitle/delete/{id}', [AddClassRoomTitleController::class, 'destroy'])->name('dashclassroomtitle.delete');
Route::get('/dashclassroomtitle/edit/{id}', [AddClassRoomTitleController::class, 'edit'])->name('dashclassroomtitle.edit');
Route::post('/dashclassroomtitle/update/{id}', [AddClassRoomTitleController::class, 'update'])->name('dashclassroomtitle.update');

// Add General Information
Route::get('/generalInfor/index_general_infor', [AddGeneralInforController::class, 'index'])->name('generalInfor.index_general_infor');
Route::get('/generalInfor/create_general_infor', [AddGeneralInforController::class, 'create'])->name('generalInfor.create_general_infor');
Route::post('/generalInfor/store', [AddGeneralInforController::class, 'store'])->name('generalInfor.store');
Route::get('/generalInfor/delete/{id}', [AddGeneralInforController::class, 'destroy'])->name('generalInfor.delete');
Route::get('/generalInfor/edit/{id}', [AddGeneralInforController::class, 'edit'])->name('generalInfor.edit');
Route::post('/generalInfor/update/{id}', [AddGeneralInforController::class, 'update'])->name('generalInfor.update');


// All Pages
Route::get('/', [MainController::class, 'index'])->name('auth.index');
Route::get('/auth/aboutPage', [MainController::class, 'about_Page'])->name('auth.aboutPage');

Route::get('/auth/createClass', [MainController::class, 'createClass'])->name('auth.createClass');

Route::post('/auth/save', [MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [MainController::class, 'logout'])->name('auth.logout');

Route::get('/auth/user_lists', [MainController::class, 'user_lists'])->name('auth.user_lists');
Route::get('/auth/created_users', [MainController::class, 'created_users'])->name('auth.created_users');
Route::post('/auth/store', [MainController::class, 'users_store'])->name('auth.store');
Route::get('/auth/delete/{id}', [MainController::class, 'users_delete'])->name('auth.delete');
Route::get('/auth/edit/{id}', [MainController::class, 'users_edit'])->name('auth.edit');
Route::post('/auth/update/{id}', [MainController::class, 'users_update'])->name('auth.update');
Route::get('auth/show/{id}', [MainController::class, 'users_show'])->name('auth.show');

// Route::get('/auth/edit/{id}', [MainController::class, ''])->name('auth.edit');
Route::get('/auth/edit/{id}', [MainController::class, 'user_profile'])->name('auth.edit');
Route::post('/auth/update/{id}', [MainController::class, 'users_profile_update'])->name('auth.update');

// Group middleware home page
Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/admin/dashboard', [MainController::class, 'dashboard']);

    // Route::get('/admin/dashboard', [MainController::class, 'dashboard']);

    Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');
});


    // Rotha route
    Route::view("login", 'login')->name('login');
    Route::post("login", [UserAuth::class, 'userLogin']);

    Route::get('classroom', [ClassroomController::class, 'classroom']);
    Route::get('classroom/{id}', [ClassroomController::class, 'show'])->name('classroom.show');

    Route::post('createclass', [ClassroomController::class, 'createClass'])->name('createClass');
    Route::view('createclass', 'classroom.createClass')->name('createClassPage');

    Route::get('classroom/{id}/classwork', [ClassroomController::class, 'classwork'])->name('classroom.classwork');

    Route::get('classroom/classwork/question', [QuestionController::class, 'question'])->name('classroom.classwork.question');
    Route::post('classroom/classwork/qestion', [QuestionController::class, 'createQuestions'])->name('question.store');


    Route::view("joinclassroom", 'classroom.joinClassroom')->name('joinClassPage');
    Route::post('joinclassroom', [ClassroomController::class, 'joinClass'])->name('joinClassroom');

    Route::get('classwork/{id}', [ClassroomController::class , 'classworkDetail'])->name('classwork.detail');
    Route::post('classwork/detail', [ClassroomController::class , 'storeClassworkDetail'])->name('classwork.store');

    Route::get('people', [ClassroomController::class , 'people'])->name('people');
    Route::get('grade', [ClassroomController::class, 'grade'])->name('grade');

    Route::get('studentwork/{cid}/{sid?}' , [ClassroomController::class, 'studentWork'])->name('studentwork');

    Route::post('scoreinput/{cid?}/{sid?}' , [ClassroomController::class, 'storeScore'])->name('scoreinput');




Route::get('locale/{locale}', function($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});


// Route::get('/api/map-marker', 'Api\ApiRestaurantController@mapMarker');
// Route::get('/auth/index', [MainController::class, 'mapMarker']);





