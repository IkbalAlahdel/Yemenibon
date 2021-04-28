<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ConfigrationController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\client\ContactusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\CatatypeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutUsControllr;
use App\Http\Controllers\client\ContactController;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Project;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\InterviewController;
use Illuminate\Http\Request;

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
// Route::get('/', [UserHomeController::class, 'index']);




// Route::get('/load-more-project', function () {
//     return view('client.UserHome');
// });

//     // Route::view('/about', 'client.about');


//     Route::get('/client/UserHome/{id}',[UserHomeController::class,'filtering']);
//     Route::get('/client/UserHome',[UserHomeController::class,'filteringall']);


// // Route::get('/homepage', function () {
// //     return view('client.home');
// // });

// Route::get('/indexx',function(){
//     return view('client.home');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('Admin.home');
// })->name('dashboard');

// Route::group(['prefix' => LaravelLocalization::setLocale(),
// 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
// ], function()
// {
//     Route::get('/about', function () {
//         $abouts =\App\Models\AboutUs::all();
//         return view('client.about',['abouts' => $abouts]);  
// });
//     // Route::view('/about', 'client.about');
//     Route::get('/publication', [PublicationController::class, 'index']);
//     Route::get('/contact', [ContactController::class, 'index']);
//     Route::get('/send',[ContactController::class,"sendMail"]);
    


// // Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
// //     return view('Admin.home');
// // });
// // Route::get('/content', function () {
// //     return view('content');
// // });
// // Route::get('/contact', function () {
// //     return view('contact');
// // });

// Route::get('/', [UserHomeController::class, 'index']);
// Route::get('/details/{id}', [UserHomeController::class, 'details']);
// Route::get('/publication', [PublicationController::class, 'index']);

// Route::get('/project-details', [ProjectDetailsController::class, 'index']);
// // Route::get('/client/home/{$id}', [HomeController::class, 'filtering']);
// Route::get('/projects/all', [HomeController::class, 'filteringall']);
// Route::get('/projects/{id}', [HomeController::class, 'filtering']);
// // Route::middleware(['auth:sanctum', 'verified'])->get('/',[HomeController::class,'index']);

// // Route::get('/staticpage', function () {
// //     return view('staticpage');
// // });

// //Route::get('/posts', Posts::class);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[HomeController::class,'index'])->name('dashboard');
// });   
// // Route::middleware(['auth:sanctum', 'verified'])->get('home', function () {
//     //     return view('Admin.home');
//     // });
// //Route::resource('/categories', CategoryController::class);
// //Route::apiResource('/categories', CategoryController::class);
// Route::prefix('admin')->group( function () {
//     Route::post('/categories/store',[CategoryController::class,'store']);
//     Route::put('/categories/update/{id}',[CategoryController::class,'update']);
//     Route::post('/catatypes/store',[CatatypeController::class,'store']);
//     Route::put('/catatypes/update/{id}',[CatatypeController::class,'update']);
//     Route::post('/staticpages/store',[StaticPageController::class,'store']);
//     Route::put('/staticpages/update/{id}',[StaticPageController::class,'update']);
//     Route::post('/about/store',[AboutUsControllr::class,'store']);
//     Route::post('/projects/store',[ProjectController::class,'store']);
//     Route::put('/projects/update/{id}',[ProjectController::class,'update']);
//     Route::put('/abouts/update/{id}',[AboutUsControllr::class,'update']);
//     Route::post('/users/store',[UserController::class,'store']);
//     Route::post('/configrations/store',[ ConfigrationController::class,'store']);
//     Route::put('/configrations/update/{id}',[ConfigrationController::class,'update']);
//     Route::post('/banners/store',[ BannerController::class,'store']);
//     Route::put('/banners/update/{id}',[BannerController::class,'update']);
//     Route::post('/contents/store',[ContentController::class,'store']);
//     Route::put('/contents/update/{id}',[ContentController::class,'update']);
//     Route::delete('/banners/destroy/{id}',[BannerController::class,'destroy'])->name('banners.destroy');
//     Route::delete('/categories/destroy/{id}',[CategoryController::class,'destroy'])->name('categories.destroy');
//     Route::delete('/catatypes/destroy/{id}',[CatatypeController::class,'destroy'])->name('catatypes.destroy');
//     Route::delete('/staticpages/destroy/{id}',[StaticPageController::class,'destroy'])->name('staticpages.destroy');
//     Route::delete('/projects/destroy/{id}',[ProjectController::class,'destroy'])->name('projects.destroy');
//     Route::delete('/abouts/destroy/{id}',[AboutUsControllr::class,'destroy'])->name('projects.destroy');
//     Route::delete('/contents/destroy/{id}',[ContentController::class,'destroy'])->name('contents.destroy');
//     Route::delete('/configrations/destroy/{id}',[ConfigrationController::class,'destroy'])->name('configrations.destroy');

   

// });
// Route::get('/cat_active/{id}',[CategoryController::class,'is_active']);
// Route::get('/cat_no_active/{id}',[CategoryController::class,'is_not_active']);
// Route::group(['prefix' => LaravelLocalization::setLocale(),
// 'middleware' => [ 'localeViewPath','localeSessionRedirect', 'localizationRedirect'  ]
// ], function()
// {

//     Route::get('/homepage', [UserHomeController::class, 'index']);
//     Route::get('/details/{id}', [UserHomeController::class, 'details']);
//     // Route::get('/homepage/{id}', [UserHomeController::class, 'filter']);
//     Route::get('/client/UserHome/{id}',[UserHomeController::class,'filtering']);
//     Route::get('/client/UserHome',[UserHomeController::class,'filteringall']);
// Route::prefix('admin')->group( function () {
//  Route::get('/categories/create',[CategoryController::class,'create']);
//  Route::get('/categories/index',[CategoryController::class,'index']);
//  Route::get('/categories/show/{id}',[CategoryController::class,'show']);
//  Route::get('/categories/edit/{id}',[CategoryController::class,'edit']);

//  Route::get('/catatypes/create',[CatatypeController::class,'create']);
//  Route::get('/catatypes/index',[CatatypeController::class,'index']);
//  Route::get('/catatypes/show/{id}',[CatatypeController::class,'show']);
//  Route::get('/catatypes/edit/{id}',[CatatypeController::class,'edit']);
//  //Route::resource('/staticpage', StaticPageController::class);
//  Route::get('/staticpages/create',[StaticPageController::class,'create']);
//  Route::get('/staticpages/edit/{id}',[StaticPageController::class,'edit']);
//  Route::get('/staticpages/index',[StaticPageController::class,'index']);
//  Route::get('/staticpages/show/{id}',[StaticPageController::class,'show']);

//  Route::get('/projects/create',[ProjectController::class,'create']);
//  Route::get('/projects/index',[ProjectController::class,'index']);
//  Route::get('/projects/show/{id}',[ProjectController::class,'show']);
//  Route::get('/projects/edit/{id}',[ProjectController::class,'edit']);

//  Route::get('/about/create',[AboutUsControllr::class,'create']);
//  Route::get('/about/index',[AboutUsControllr::class,'index']);
//  Route::get('/about/show/{id}',[AboutUsControllr::class,'show']);
//  Route::get('/about/edit/{id}',[AboutUsControllr::class,'edit']);

//  Route::get('/contents/create',[ContentController::class,'create']);
//  Route::get('/contents/edit/{id}',[ContentController::class,'edit']);
//  Route::get('/contents/index',[ContentController::class,'index']);
//  Route::get('/contents/show/{id}',[ContentController::class,'show']);
//  Route::get('/cat_active/{id}',[ContentController::class,'is_active']);
//  Route::get('/cat_no_active/{id}',[ContentController::class,'is_not_active']);

//  Route::get('/users/create',[UserController::class,'create']);
//  Route::get('/users/edit/{id}',[UserController::class,'edit']);
//  Route::get('/users/index',[UserController::class,'index']);
//  Route::delete('/users/destroy/{id}',[UserController::class,'destroy'])->name('users.destroy');
//  Route::get('/users/show/{id}',[UserController::class,'show']);
//  Route::put('/users/update/{id}',[UserController::class,'update']);

//  Route::get('/configrations/create',[ ConfigrationController::class,'create']);
//  Route::get('/configrations/edit/{id}',[ConfigrationController::class,'edit']);
//  Route::get('/configrations/index',[ConfigrationController::class,'index']);
//  Route::get('/configrations/show/{id}',[ConfigrationController::class,'show']);

//  Route::get('/banners/create',[ BannerController::class,'create']);
//  Route::get('/banners/edit/{id}',[BannerController::class,'edit']);
//  Route::get('/banners/index',[BannerController::class,'index']);
//  Route::get('/banners/show/{id}',[BannerController::class,'show']);
// //  Route::get('/contactus/index',[ContactusController::class,'index']);
// // Route::get('users/create',[RegisterController::class ,'create']);
 
//     //route to publication type
//     Route::post('/pdfs/store',[PdfController::class,'store']);
//     Route::put('/pdfs/update/{id}',[PdfController::class,'update']);
//     Route::delete('/pdfs/destroy/{id}',[PdfController::class,'destroy'])->name('pdf.destroy');
//     Route::post('/articles/store',[ArticleController::class,'store']);
//     Route::put('/articles/update/{id}',[ArticleController::class,'update']);
//     Route::delete('/articles/destroy/{id}',[ArticleController::class,'destroy'])->name('articles.destroy');
//     Route::post('/interviews/store',[InterviewController::class,'store']);
//     Route::put('/interviews/update/{id}',[InterviewController::class,'update']);
//     Route::delete('/interviews/destroy/{id}',[InterviewController::class,'destroy'])->name('interviews.destroy');


//     Route::get('/pdfs/create',[ PdfController::class,'create']);
// Route::get('/pdfs/edit/{id}',[PdfController::class,'edit']);
// Route::get('/pdfs/index',[PdfController::class,'index']);
// Route::get('/pdfs/show/{id}',[PdfController::class,'show']);
// Route::get('/articles/create',[ ArticleController::class,'create']);
// Route::get('/articles/edit/{id}',[ArticleController::class,'edit']);
// Route::get('/articles/index',[ArticleController::class,'index']);
// Route::get('/articles/show/{id}',[ArticleController::class,'show']);
// Route::get('/interviews/create',[ InterviewController::class,'create']);
// Route::get('/interviews/edit/{id}',[InterviewController::class,'edit']);
// Route::get('/interviews/index',[InterviewController::class,'index']);
// Route::get('/interviews/show/{id}',[InterviewController::class,'show']);


// });

// });

// Route::prefix('activ')->group( function () {

//     Route::get('/cat_active/{id}',[StaticPageController::class,'is_active']);
//     Route::get('/cat_no_active/{id}',[StaticPageController::class,'is_not_active']);
//     });
    
    
//     Route::prefix('activUser')->group( function () {
    
//     Route::get('/cat_active/{id}',[UserController::class,'is_active']);
//     Route::get('/cat_no_active/{id}',[UserController::class,'is_not_active']);
//     });


// //  Route::apiResource('/category', 'CategoryController' ,
// //  ['names' => [
// //      'index' => 'categories.index',
// //      'show' => 'categories.edite',
// //      'store' => 'categories.store',
// //      'create' => 'categories.create',

// //  ]]); 
// // Route::group(['namespace' => 'category', 'prefix' => 'admin' ],function()
// //  {
// //     Route::apiResource('/categories', 'CategoryController' ,
// //     ['names' => [
// //      'index' => 'admin.categories.index',
// //      'show' => 'admin.categories.edite',
// //      'store' => 'admin.categories.store',
// //      'create' => 'admin.categories.create',
// //     ]]); 
// // });

// // Route::view('/users-home','livewire.users');
// Route::view('/users','livewire.users');

Route::get('/about', function () {
            $abouts =\App\Models\AboutUs::all();
            return view('client.about',['abouts' => $abouts]);  
    });
        // Route::view('/about', 'client.about');
        Route::get('/publication', [PublicationController::class, 'index']);
        Route::get('/contact', [ContactController::class, 'index']);
        Route::get('/send',[ContactController::class,"sendMail"]);
        
Route::get('/', [UserHomeController::class, 'index']);
Route::get('/details/{id}', [UserHomeController::class, 'details']);