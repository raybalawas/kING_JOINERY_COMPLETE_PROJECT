<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Error400Controller;
use App\Http\Controllers\ForgottPasswordManager;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('front.pages.index');
// });

Route::get('services', function () {
    return view('front.pages.services');
});

// Route::get('projects', function () {
//     return view('front.pages.projects');
// });

Route::get('about_Us', function () {
    return view('front.pages.about');
})->name("about.us");

Route::get('contact', function () {
    return view('front.pages.contact');
})->name('contact.us');

Route::get('entertainment', function () {
    return view('front.pages.entertainment');
})->name('entertain.ment');

Route::get('kitchen', function () {
    return view('front.pages.kitchens');
})->name('kit.chen');

Route::get('laundries', function () {
    return view('front.pages.laundries');
})->name('lau.ndries');

Route::get('offices', function () {
    return view('front.pages.offices');
})->name('offi.ces');

Route::get('outdoorKitche', function () {
    return view('front.pages.outdoorKitchen');
})->name('outdoor.kitchens');

Route::get('privacy', function () {
    return view('front.pages.privacy');
});

Route::get('vanities', function () {
    return view('front.pages.vanities');
})->name('vani.ties');

Route::get('wardrobes', function () {
    return view('front.pages.wardrobes');
})->name('ward.robes');

Route::get('/user/show/blogs', [BlogController::class, 'blog'])->name('blog');
Route::get('/user/blogs/category/{id}', [BlogController::class, 'blogsByCategory'])->name('blogs.by.category');
Route::get('/single-blog/{id}', [BlogController::class, 'singleBlog'])->name('single.blog');


// AUTH
Route::get('/admin', [AuthController::class, 'AdminLogin'])->name('login')->middleware('guest');
Route::post('/admin/login', [AuthController::class, 'AdminLoginPost'])->name('admin.login.post');
Route::post('/admin/logout', [AuthController::class, 'AdminLogout'])->name('admin.logout');
Route::get('/Register', [AuthController::class, 'RegisterForm'])->name('Register.show');
Route::post('/Register-post', [AuthController::class, 'RegisterPost'])->name('Register.post');


Route::get('/admin/forgot/password', [ForgottPasswordManager::class, 'forgotPassword'])->name('admin.forgott.password');
Route::post('/admin/forgot/password', [ForgottPasswordManager::class, 'forgotPasswordPost'])->name('admin.forgott.password.post');
Route::get('/admin/password/reset/{token}', [ForgottPasswordManager::class, 'showResetForm'])->name('admin.password.reset');
Route::post('/admin/password/reset', [ForgottPasswordManager::class, 'resetPassword'])->name('admin.password.update');


// ADMIN
Route::middleware('auth')->group(function () {


    Route::get('/dashboard', [BlogController::class, 'showAdminDashboard'])->name('adminn');

    Route::get('/admin/add_blogs', function () {
        return view('admin.pages.AddBlog');
    });

    Route::get('/admin/add_blogs', [BlogController::class, 'showBlogForm']);
    Route::post('/admin/post_blogs', [BlogController::class, 'postBlog'])->name('post.blog');
    Route::get('/admin/blog/list', [BlogController::class, 'blogList'])->name('Blog.List');
    Route::delete('/admin/blog/list/destroy/{id}', [BlogController::class, 'destroy'])->name('Blog.destroy');
    Route::get('/admin/blog/editPage/{id}', [BlogController::class, 'showEditPage'])->name('BlogEditPage');
    Route::post('/admin/blog/updatePage/{id}', [BlogController::class, 'postEditPage'])->name('blogs.update');

    Route::get('/error400', [Error400Controller::class, 'index'])->name('index.show');

    Route::get('/category', [CategoryController::class, 'show_Category_Form'])->name('show.category.form');
    Route::post('/category-post', [CategoryController::class, 'post_Category_Form'])->name('post.category.form');
    Route::get('/category-list', [CategoryController::class, 'show_Category_List'])->name('show.category.list');
    Route::delete('/category-delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('show.edit.pagee');
    // Route::post('/category-update/{id}', [CategoryController::class, 'update'])->name('update.edit.page');
    Route::post('/category-update-category/{id}', [CategoryController::class, 'Update'])->name('UpdateCategory');


    Route::get('/product', [ProductController::class, 'show_Product_form'])->name('show.add.product.form');
    Route::post('/product-post', [ProductController::class, 'post_Product_form'])->name('post.product');
    Route::get('/product-list', [ProductController::class, 'show_product_List'])->name('show.product.list');
    Route::delete('/product-delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/product-edit/{id}', [ProductController::class, 'edit'])->name('show.edit.page');
    Route::put('/product-update/{id}', [ProductController::class, 'update'])->name('update.edit.page');



});

// Route::get('/project', [ProductController::class, 'index'])->name('index');
// use App\Http\Controllers\ProductController;

Route::get('/projects', [ProductController::class, 'index'])->name('projects.index');
// Route::get('/projects/category/{id}', [ProductController::class, 'categoryProjects'])->name('projects.category');

Route::get('/projects/{id}/images', [ProductController::class, 'showProductImages'])->name('projects.images');

Route::get('/', [ProductController::class, 'indexx'])->name('projects.indexx');
