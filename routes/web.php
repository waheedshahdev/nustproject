<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ResearchController;
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

//////////////////// FrontEnd Routes ////////////////////////////////////

Route::get('/', [FrontendController::class, 'index']);
Route::get('about', [FrontendController::class, 'aboutus']);
Route::get('contact', [FrontendController::class, 'contact']);
Route::get('gallery', [FrontendController::class, 'gallery']);
Route::get('research', [FrontendController::class, 'research']);
Route::get('research-detail/{id}', [FrontendController::class, 'researchDetail']);
Route::get('research-area/{id}', [FrontendController::class, 'researchArea']);
Route::get('research-groups', [FrontendController::class, 'researchGroup']);
Route::get('downloads', [FrontendController::class, 'downloads']);
Route::get('events', [FrontendController::class, 'seminar']);
Route::get('event-detail/{id}', [FrontendController::class, 'seminarDetail']);
Route::get('event-group/{id}', [FrontendController::class, 'seminarGroup']);



//////////////////// END FrontEnd Routes ////////////////////////////////////




Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/dashboard', function () {
      // return view('admin.dashboard');
      return view('admin.index');
   });

    //  //// Categories Routes 
    // Route::get('/categories',[CategoryController::class, 'index'])->name('categories');
    // Route::get('/add-category',[CategoryController::class, 'addCategory'])->name('add-category');
    // Route::post('/add-Cat', [CategoryController::class, 'addCat'])->name('add-Cat');
    // Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory']);
    // Route::put('update-category/{id}', [CategoryController::class, 'updateCategory']);
    // Route::get('delete-category/{id}', [CategoryController::class, 'deleteCategory']);
    // //// End Categories Route

    // //// Sub Category Routes
    // Route::get('/subcategories',[SubCategoryController::class, 'index']);
    // Route::get('/add-subcategory',[SubCategoryController::class, 'addSubCategory']);
    // Route::post('/add-subCat', [SubCategoryController::class, 'addSubCat']);
    // Route::get('/edit-subcategory/{id}', [SubCategoryController::class, 'editSubCategory']);
    // Route::put('update-subcategory/{id}', [SubCategoryController::class, 'updateSubCategory']);
    // Route::get('delete-subcategory/{id}', [SubCategoryController::class, 'deleteSubCategory']);

    // //// End Sub Category Routes



    // ////Product Routes
    Route::get('gallery', [AdminController::class, 'gallery']);
    Route::get('add-picture', [AdminController::class, 'addPicture']);
    Route::post('/insert-picture', [AdminController::class, 'insertPicture']);
    Route::get('/delete-picture/{id}', [AdminController::class, 'deletePicture']);
    Route::get('aboutus', [AdminController::class, 'aboutus']);
    Route::get('add-about', [AdminController::class, 'addAbout']);
    Route::post('/insert-about', [AdminController::class, 'insertAbout']);
    Route::get('/edit-about/{id}', [AdminController::class, 'editAbout']);
    Route::put('/update-about/{id}', [AdminController::class, 'updateAbout']);

    ////////////// Research Section //////////////////////////
    Route::get('research-categories', [ResearchController::class, 'researchCategories']);
    Route::get('add-category', [ResearchController::class, 'addCategory']);
    Route::post('insert-Cat', [ResearchController::class, 'addCat'])->name('add-Cat');
    Route::get('edit-category/{id}', [ResearchController::class, 'editCategory']);
    Route::put('update-category/{id}', [ResearchController::class, 'updateCategory']);
    Route::get('delete-category/{id}', [ResearchController::class, 'deleteCategory']);

    Route::get('research', [ResearchController::class, 'research']);
    Route::get('add-research', [ResearchController::class, 'addResearch']);
    Route::post('insert-research', [ResearchController::class, 'insertResearch']);
    Route::get('delete-research/{id}', [ResearchController::class, 'deleteResearch']);
    Route::get('research-detail/{id}', [ResearchController::class, 'researchDetail']); 
    Route::get('/edit-research/{id}', [ResearchController::class, 'editResearch']);
    Route::put('update-research/{id}', [ResearchController::class, 'updateResearch']);
    ////////////// END Research Section //////////////////////////

    ///////////// Downloads Section /////////////////////////////

    Route::get('downloads', [AdminController::class, 'downloads']);
    Route::get('download-group', [AdminController::class, 'addGroup']);
    Route::post('insert-group', [AdminController::class, 'insertGroup']);
    Route::get('edit-group/{id}', [AdminController::class, 'editGroup']);
    Route::put('update-group/{id}', [AdminController::class, 'updateGroup']);
    Route::get('delete-group/{id}', [AdminController::class, 'deleteGroup']);
    Route::get('view-document/{id}', [AdminController::class, 'viewDocument']);
    Route::post('upload-document/{id}', [AdminController::class, 'uploadDocument']);
    Route::get('delete-document/{id}/{uri_id}', [AdminController::class, 'deleteDocument']);
    ///////////// END Downloads Section /////////////////////////////
    //////////// Seminar Section ///////////////////////////////////
    Route::get('seminar', [AdminController::class, 'seminar']);
    Route::post('add-seminar', [AdminController::class, 'addSeminar']);
    Route::get('delete-seminar/{id}', [AdminController::class, 'deleteSeminar']);
    Route::get('edit-seminar/{id}', [AdminController::class, 'editSeminar']);
    Route::put('update-seminar/{id}', [AdminController::class, 'updateSeminar']);
    
    //////////// END Seminar Section ////////////////////////////
    //////////// Team Section ////////////////////////////
    
    Route::get('team', [AdminController::class, 'team']);
    Route::post('add-team', [AdminController::class, 'addTeam']);
    Route::get('edit-team/{id}', [AdminController::class, 'editTeam']);
    Route::put('update-team/{id}', [AdminController::class, 'updateTeam']);
    //////////// END Team Section ////////////////////////////
    // Route::get('add-product', [ProductController::class, 'addProduct']);
    // Route::get('edit-product/{id}', [ProductController::class, 'editProduct']);
    // Route::put('update-product/{id}', [ProductController::class, 'updateProduct']);
    // Route::get('fetch-sub-category', [ProductController::class, 'fetchSubCategory']);
    // Route::get('view-product/{id}', [ProductController::class, 'viewProduct']);
    //// END Product Routes


 });



