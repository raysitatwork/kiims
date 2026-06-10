<?php

use App\Http\Controllers\Admin\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CenterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/captcha', [AdminController::class, 'generateCaptcha']);

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {

        Route::get('/login', [AdminController::class, 'login'])->name('admin.login');

        Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'], function () {

        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/enquiry', [AdminController::class, 'enquiry'])->name('admin.enquiry');
        Route::get('/frenchise', [AdminController::class, 'frenchise'])->name('admin.frenchise');
        Route::get('/assosication', [AdminController::class, 'assosication'])->name('admin.assosication');
        Route::get('/student_list', [AdminController::class, 'user_list'])->name('admin.userList');
        Route::post('/admin/update-status', [AdminController::class, 'updateStatus'])->name('admin.status.update');
        Route::get('/student_list_delete/{id}', [AdminController::class, 'registerUserdlt'])->name('admin.UserDlt');

        Route::get('/delete/{table}/{id}', [AdminController::class, 'delete'])->name('admin.delete');

        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

        Route::get('/student/create', [StudentController::class, 'studentcreate'])->name('admin.student.create');
        Route::post('/student/store', [StudentController::class, 'studentstore'])->name('admin.student.store');
        Route::get('/student/edit/{id}', [StudentController::class, 'studentedit'])->name('admin.student.edit');
        Route::post('/student/update/{id}', [StudentController::class, 'studentupdate'])->name('admin.student.update');


        // Center Route
        Route::get('/center', [CenterController::class, 'index'])->name('center.index');
        Route::get('/center/create', [CenterController::class, 'create'])->name('center.create');
        Route::post('/center/store', [CenterController::class, 'store'])->name('center.store');

        Route::get('/center/edit/{id}', [CenterController::class, 'edit'])->name('center.edit');
        Route::post('/center/update/{id}', [CenterController::class, 'update'])->name('center.update');

        Route::get('/center/delete/{id}', [CenterController::class, 'destroy'])->name('center.delete');
        // Center Route

    });
});




Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/center', [HomeController::class, 'center']);


Route::get('/payment', [HomeController::class, 'payment']);
Route::get('/enquiry', [HomeController::class, 'enquiry']);
Route::get('/frechicy', [HomeController::class, 'frechicy']);
Route::get('/advisory-board', [HomeController::class, 'board']);
Route::get('/associate', [HomeController::class, 'associate']);
Route::post('/associate', [HomeController::class, 'saveAssociate'])->name('associate');

Route::get('/register', [HomeController::class, 'register']);
Route::get('/allCourse', [HomeController::class, 'allCourse']);
Route::get('/ot', [HomeController::class, 'ot']);
Route::get('/opthemic', [HomeController::class, 'opthemic']);
Route::get('/dmit', [HomeController::class, 'dmit']);
Route::get('/emt', [HomeController::class, 'emt']);
Route::get('/ctMR', [HomeController::class, 'ctmr']);
Route::get('/cms', [HomeController::class, 'Cms']);
Route::get('/dmlt', [HomeController::class, 'Dmlt']);
Route::get('/bmlt', [HomeController::class, 'BMLT']);
Route::get('/ecg', [HomeController::class, 'ecg']);




Route::get('/nursing', [HomeController::class, 'nursing']);
Route::get('/anm', [HomeController::class, 'anm']);
Route::get('/gnm', [HomeController::class, 'gnm']);
Route::get('/pharmacy', [HomeController::class, 'pharmacy']);
Route::get('/dpharma', [HomeController::class, 'dpharma']);
Route::get('/bpharma', [HomeController::class, 'bpharma']);

Route::get('/others-bsc-courses', [HomeController::class, 'other_bsc_courses']);
Route::get('/others-certificate-courses', [HomeController::class, 'other_certificate_courses']);
Route::get('/others-diploma-courses', [HomeController::class, 'other_diploma_courses']);



Route::get('/dresser', [HomeController::class, 'dresser']);
Route::post('/register-user', [HomeController::class, 'registerStore'])->name('register.user');
Route::post('/enquiry', [HomeController::class, 'enquiry'])->name('enquiry.user');
Route::post('/frenchise', [HomeController::class, 'frenchise'])->name('frenchise.user');
Route::get('/admin/search-by-enrollment', [HomeController::class, 'searchByEnrollment'])->name('admin.searchByEnrollment');
Route::get('/verify', [HomeController::class, 'verify'])->name('verify.user');
