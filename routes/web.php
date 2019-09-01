<?php
Use App\Title;
Use App\Subheading;
use App\Causes;
Use App\Contact;
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

Route::get('/', 'TitleController@index');
Route::get('/about', 'SubheadingController@index');
Route::get('/causes', 'CausesController@index');
Route::get('/gallary', 'GallaryController@index');
Route::get('/contact','ContactController@index');
 
Route::get('/contact','ContactController@create');
 
Route::post('/contact','ContactController@store');

// Route::get('/contact', function () {
//     return view('contact');
// });




Route::resource('admin/title', 'AdminTitleController'
,['names'=>[
    'index'=>'admin.title.index',
    'create'=>'admin.title.create',
    'store'=>'admin.title.store',
    'edit'=>'admin.title.edit'
]]
);
////----------about------------////////
Route::resource('admin/aboutus', 'AdminAboutusController'
,['names'=>[
    'index'=>'admin.aboutus.index',
    'create'=>'admin.aboutus.create',
    'store'=>'admin.aboutus.store',
    'edit'=>'admin.aboutus.edit'
]]
);

Route::resource('admin/causes', 'AdminCausesController'
,['names'=>[
    'index'=>'admin.causes.index',
    'create'=>'admin.causes.create',
    'store'=>'admin.causes.store',
    'edit'=>'admin.causes.edit'
]]
);

Route::resource('admin/gallary', 'AdminGallaryController'
,['names'=>[
    'index'=>'admin.gallary.index',
    'create'=>'admin.gallary.create',
    'store'=>'admin.gallary.store',
    'edit'=>'admin.gallary.edit'
]]
);


Auth::routes();

// Route::resources('/contact', 'ContactController',['names'=>[
//     'index'=>'contact',
//     'create'=>'contact',
//     'store'=>'contact'
// ]]
// );



Route::resource('admin/users','AdminUsersController',['names'=>[
    'index'=>'admin.users.index',
    'create'=>'admin.users.create',
    'store'=>'admin.users.store',
    'edit'=>'admin.users.edit'
]]); 

Route::resource('admin/contact','AdminContactController',['names'=>[
    'index'=>'admin.contact.index',
    'create'=>'admin.contact.create',
    'store'=>'admin.contact.store',
    'edit'=>'admin.contact.edit'
]]); 

//Admin Routes-----------------------------------------------------------------------

Route::get('/admin',function(){
    return view('admin.index');
});