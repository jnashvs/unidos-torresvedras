<?php




//Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Backoffice'], function()
{
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Auth::routes();

    //auth routes

    Route::group(['middleware' => ['auth']], function () {

        Route::get('/', 'WishesController@index')->name('home');

        Route::get('/files', 'FilesController@index')->name('files');

        Route::get('/file-types', 'FileTypesController@index')->name('file-types');

        //Route::get('/file-types/create', 'FileTypesController@create')->name('create-file-types');

        Route::get('/file-types/edit/{id?}/', 'FileTypesController@edit')->name('edit-file-types');

        Route::get('/opinioes-list', 'WishesController@index')->name('opinioes-list');

        Route::resource('candidatos', 'CandidatosController');

    });

});


