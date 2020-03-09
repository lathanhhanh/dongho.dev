<?php

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

        Route::get('', 'AdminController@index')->name('admin.index');

        /* Route danh mục sản phẩm */
        Route::group(['prefix' => 'category'], function () {

            Route::get('','AdminCategoryController@index')->name('admin.category.index');

            Route::get('create', 'AdminCategoryController@create')->name('admin.category.create');
            Route::post('create', 'AdminCategoryController@store');

            Route::get('update/{id}', 'AdminCategoryController@edit')->name('admin.category.update');
            Route::post('update/{id}', 'AdminCategoryController@update');

            Route::get('delete/{id}', 'AdminCategoryController@delete')->name('admin.category.delete');

            Route::get('active/{id}', 'AdminCategoryController@active')->name('admin.category.active');
            Route::get('hot/{id}', 'AdminCategoryController@hot')->name('admin.category.hot');

            Route::get('delete/{id}', 'AdminCategoryController@delete')->name('admin.category.delete');

        });

        /* Route danh mục keyword */
        Route::group(['prefix' => 'keyword'], function () {

            Route::get('','AdminKeywordController@index')->name('admin.keyword.index');

            Route::get('create', 'AdminKeywordController@create')->name('admin.keyword.create');
            Route::post('create', 'AdminKeywordController@store');

            Route::get('update/{id}', 'AdminKeywordController@edit')->name('admin.keyword.update');
            Route::post('update/{id}', 'AdminKeywordController@update');

            Route::get('delete/{id}', 'AdminKeywordController@delete')->name('admin.keyword.delete');

            Route::get('active/{id}', 'AdminKeywordController@active')->name('admin.keyword.active');
            Route::get('hot/{id}', 'AdminKeywordController@hot')->name('admin.keyword.hot');

            Route::get('delete/{id}', 'AdminKeywordController@delete')->name('admin.keyword.delete');

        });

        /* Route danh mục product */
        Route::group(['prefix' => 'product'], function () {

            Route::get('','AdminProductController@index')->name('admin.product.index');

            Route::get('create', 'AdminProductController@create')->name('admin.product.create');
            Route::post('create', 'AdminProductController@store');

            Route::get('update/{id}', 'AdminProductController@edit')->name('admin.product.update');
            Route::post('update/{id}', 'AdminProductController@update');

            Route::get('delete/{id}', 'AdminProductController@delete')->name('admin.product.delete');

            Route::get('active/{id}', 'AdminProductController@active')->name('admin.product.active');
            Route::get('hot/{id}', 'AdminProductController@hot')->name('admin.product.hot');

            Route::get('delete/{id}', 'AdminProductController@delete')->name('admin.product.delete');

        });

        /* Route danh mục attribute */
        Route::group(['prefix' => 'attribute'], function () {

            Route::get('','AdminAttributeController@index')->name('admin.attribute.index');

            Route::get('create', 'AdminAttributeController@create')->name('admin.attribute.create');
            Route::post('create', 'AdminAttributeController@store');

            Route::get('update/{id}', 'AdminAttributeController@edit')->name('admin.attribute.update');
            Route::post('update/{id}', 'AdminAttributeController@update');

            Route::get('delete/{id}', 'AdminAttributeController@delete')->name('admin.attribute.delete');

            Route::get('active/{id}', 'AdminAttributeController@active')->name('admin.attribute.active');
            Route::get('hot/{id}', 'AdminAttributeController@hot')->name('admin.attribute.hot');

            Route::get('delete/{id}', 'AdminAttributeController@delete')->name('admin.attribute.delete');

        });

    });
