<?php

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
//USER INFO//linking with different pages

Route::get('/','PageLinkingController@index')->name('/');

Route::get('/about', function () {
    return view('user-panel.view-pages.about');
});
Route::get('/packages','PageLinkingController@packages')->name('packages');
Route::get('/hotels','PageLinkingController@hotels');
Route::get('/blogs','PageLinkingController@blogs');
Route::get('/contact','PageLinkingController@contact');
Route::get('/gallery','PageLinkingController@gallery');
Route::post('/search_destination','PageLinkingController@searchDestination')->name('search_destination');

Route::get('/user-dashboard',[
    'uses'           =>      'UserController@userDashboard',
    'as'             =>      'user-dashboard'
]);


//ADMIN INFO
Route::group(['middleware' => 'superAdmin'],function (){
    Route::get('/admin-dashboard',[
        'uses'          =>      'AdminController@adminDashboard',
        'as'            =>      'dashboard'
    ]);

//category info

    Route::get('/admin-dashboard/create-category',[
        'uses'             => 'CategoryInfoController@createCategory',
        'as'               => 'create-category'
    ]);

    Route::post('/admin-dashboard/save-category',[
        'uses'             => 'CategoryInfoController@saveCategory',
        'as'               => 'save-category'
    ]);

    Route::get('/admin-dashboard/manage-category',[
        'uses'             => 'CategoryInfoController@manageCategory',
        'as'               => 'manage-category'
    ]);

    Route::get('/admin-dashboard/edit-category/{id}',[
        'uses'             => 'CategoryInfoController@editCategory',
        'as'               => 'edit-category'
    ]);

    Route::post('/admin-dashboard/update-category',[
        'uses'          =>'CategoryInfoController@updateCategory',
        'as'            =>'update-category'
    ]);

    Route::post('/admin-dashboard/delete-category',[
        'uses'          =>'CategoryInfoController@deleteCategory',
        'as'            =>'delete-category'
    ]);


//Package-info//

    Route::get('/admin-dashboard/create-package',[
        'uses'             => 'PackageInfoController@createPackage',
        'as'               => 'create-package'
    ]);

    Route::post('/admin-dashboard/save-package',[
        'uses'             => 'PackageInfoController@savePackage',
        'as'               => 'save-package'
    ]);

    Route::get('/admin-dashboard/manage-package',[
        'uses'             => 'PackageInfoController@managePackage',
        'as'               => 'manage-package'
    ]);

    Route::get('/admin-dashboard/edit-package/{id}',[
        'uses'             => 'PackageInfoController@editPackage',
        'as'               => 'edit-package'
    ]);

    Route::post('/admin-dashboard/update-package',[
        'uses'          =>'PackageInfoController@updatePackage',
        'as'            =>'update-package'
    ]);

    Route::post('/admin-dashboard/delete-package',[
        'uses'          =>'PackageInfoController@deletePackage',
        'as'            =>'delete-package'
    ]);



//details with id category
    Route::get('/admin-dashboard/category-details/{id}',[
        'uses'             => 'CategoryInfoController@detailsCategory',
        'as'               => 'category-details'
    ]);

//click category status changed
    Route::get('/admin-dashboard/category-status-change/{id}',[
        'uses'             => 'CategoryInfoController@changeCategoryStatus',
        'as'               => 'category-status-change'
    ]);
//id with package
    Route::get('/admin-dashboard/package-details/{id}',[
        'uses'             => 'PackageInfoController@detailsPackage',
        'as'               => 'package-details'
    ]);

//click package status changed

    Route::get('/admin-dashboard/package-status-change/{id}',[
        'uses'             => 'PackageInfoController@changePackageStatus',
        'as'               => 'package-status-change'
    ]);

});





//VISITOR DETAILS
Route::get('/visitor-signup',[
    'uses'             =>'VisitorInfoController@visitorSignup',
    'as'              =>'visitor-signup'
]);

Route::post('/visitor-save',[
    'uses'              =>'VisitorInfoController@visitorSave',
    'as'                =>'visitor-save'
]);

Route::get('/visitor-login',[
    'uses'     =>'VisitorInfoController@visitorLogin',
    'as'      =>'visitor-login'
]);

Route::post('/visitor-remember',[
    'uses'      =>'VisitorInfoController@visitorRemember',
    'as'       =>'visitor-remember'
]);

Route::post('/visitor-signout',[
    'uses'     =>'VisitorInfoController@visitorSignout',
    'as'       =>'visitor-signout'
]);

Route::get('/visitor-view',[
    'uses'      =>'VisitorInfoController@visitorView',
    'as'        =>'visitor-view'
]);

Route::get('/visitor-edit/{id}',[
    'uses'         =>'VisitorInfoController@visitorEdit',
    'as'          =>'visitor-edit'
]);

Route::post('/visitor-update',[
    'uses'          =>'VisitorInfoController@visitorUpdate',
    'as'           =>'visitor-update'
]);

Route::post('/visitor-delete',[
    'uses'       =>'VisitorInfoController@visitorDelete',
    'as'        =>'visitor-delete'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//user modification package
Route::group(['middleware'=> 'visitor'],function (){
    Route::get('/visitor-package/',[
        'uses'         =>'UserPackageModification@visitorPackageModi',
        'as'          =>'visitor-package'
    ]);


    Route::post('/visitor-package/save-comment',[
        'uses'         =>'UserPackageModification@visitorSaveComment',
        'as'          =>'save-comment'
    ]);
});


Route::post('/visitor-packagep',[
    'uses'          =>'UserPackageModification@visitorPackageModiPost',
    'as'           =>'visitor-packagep'
]);

//
Route::get('/new-contact',[
'uses'           =>'PageLinkingController@newContact',
    'as'         =>'new-contact'
]);


//MULTIPLE IMAGE UPLOAD

Route::get('image-view','imageController@index');
Route::post('image-submit','imageController@store');

//Route::get('view-image', 'ImageController@index');
////    return view('multipleimage');
//
//Route::post('multiplefileupload', 'ImageController@multiplefileupload');

//Route::get('image', 'ImageController@index');
//Route::get('save', 'ImageController@save');



Route::get('multipleimage', function () {
    return view('multipleimage');
});
Route::post('multiplefileupload', 'imageController@multiplefileupload');




//SENDING EMAIL

Route::get('/mail/basic','MailController@basic');
Route::get('/mail/html','MailController@htmlMail');
Route::get('/mail/attachment','MailController@mailAttachment');





//Route::get('add-images', [
//    'uses'          =>  'manyImageController@addImages',
//    'as'            =>  'add-images'
//]);
//
//
//Route::post('save-images', [
//    'uses'          =>  'manyImageController@newImages',
//    'as'            =>  'save-images'
//]);


Route::get('imageUpload', ['as'=>'imageUpload', 'uses'=>'ImageController@index']);
Route::put('imageUpload', ['as'=>'imageUploadFile', 'uses'=>'ImageController@uploadFiles']);

//
Route::get('image-view','ImageController@index');

Route::post('image-view','ImageController@store');
//

Route::get('add-images', [
    'uses'          =>  'ImageConfigController@addImages',
    'as'            =>  'add-images'
]);

Route::post('new-images', [
    'uses'          =>  'ImageConfigController@newImages',
    'as'            =>  'new-images'
]);


Route::get('multipleimage', function () {
    return view('multipleimage');
});
Route::post('multiplefileupload', 'imageController@multiplefileupload');


Route::get('send', 'EmailController@send');
