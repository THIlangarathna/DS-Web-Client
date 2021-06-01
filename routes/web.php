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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'RoutesController@home');

Route::get('/index', 'RoutesController@homelogged');

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/Allblogs', 'RoutesController@allblogs');

Route::get('/Allquestions', 'RoutesController@allquestions');

Route::get('/ShowBlogGuest{id}', 'RoutesController@blogshowguest');

Route::get('/ShowQuestionGuest{id}', 'RoutesController@questionshowguest');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/apilogin', function () {
    return view('auth.apilogin');
});

Route::get('/apiregister', function () {
    return view('auth.apiregister');
});

Route::post('/apilogin', 'RoutesController@login');

Route::post('/apiregister', 'RoutesController@register');

// Route::get('/Blog11', function () {
//     return view('Blog.BlogFeed _new');
// });

Route::get('/CreateBlog', function () {
    return view('Blog.CreateBlog');
});

Route::get('/EditBlog', function () {
    return view('Blog.EditBlog');
});

Route::get('/Myfeed', function () {
    return view('Question.QAFeed');
});

Route::get('/CreateQuestion', function () {
    return view('Question.CreateQA');
});

Route::get('/ViewQuestion', function () {
    return view('Question.ViewQA');
});

Route::post('/CreateBlog', 'RoutesController@blogstore');

Route::post('/img', 'RoutesController@img');

Route::get('/Blog', 'RoutesController@blog');

Route::get('/Blog{id}', 'RoutesController@blogedit');

Route::post('/UpdateBlog', 'RoutesController@blogupdate');

Route::get('/ShowBlog{id}', 'RoutesController@blogshow');

Route::get('/DeleteBlog{id}', 'RoutesController@blogdelete');

Route::get('/Question', 'RoutesController@question');

Route::post('/CreateQuestion', 'RoutesController@questionstore');

Route::post('/Qimg', 'RoutesController@Qimg');

Route::get('/Question{id}', 'RoutesController@questionedit');

Route::get('/DeleteQuestion{id}', 'RoutesController@questiondelete');

Route::post('/UpdateQuestion', 'RoutesController@questionupdate');

Route::get('/ShowQuestion{id}', 'RoutesController@questionshow');

Route::post('/AddComment', 'RoutesController@commentstore');

Route::get('/Comment{id}', 'RoutesController@commentedit');

Route::get('/DeleteComment{id}', 'RoutesController@commentdelete');

// Route::get('/Index', function () {
//     return view('index');
// });

Route::post('/AddAnswer', 'RoutesController@answerstore');

Route::get('/Answer{id}', 'RoutesController@answeredit');

Route::get('/DeleteAnswer{id}', 'RoutesController@answerdelete');

Route::get('/MyDashboard', 'RoutesController@mydashboard');

Route::get('/EditUser', 'RoutesController@edituser');

Route::post('/UpdateUser', 'RoutesController@userupdate');