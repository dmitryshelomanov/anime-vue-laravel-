<?php
    Route::group(['namespace' => 'Admin'], function() {
        //главная
        Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
        //Поиск
        Route::get('/search', ['as' => 'search', 'uses' => 'SearchController@search']);
        //страница для изменения аниме
        Route::get('/refactore/anime/{id}', ['as' => 'refactoreAnime', 'uses' => 'RefactoreAnimeController@getRefactor']);
        //Добавление аниме страница
        Route::get('/add/anime', ['as' => 'addAnime', 'uses' => 'RefactoreAnimeController@addAnimeIndex']);
        //Добавление аниме
        Route::post('/add/anime', ['as' => 'addAnimePost', 'uses' => 'RefactoreAnimeController@addAnime']);
        //изменение аниме
        Route::post('/refactore/anime/{id}', ['as' => 'refactoreAnimePost', 'uses' => 'RefactoreAnimeController@postRefactor']);
        //измнение изображение аниме
        Route::post('/update/img/anime/{id}', ['as' => 'updateImgAnime', 'uses' => 'RefactoreAnimeController@upload']);
        //удаление аниме
        Route::delete('/delete/anime/{id}', ['as' => 'deleteAnime', 'uses' => 'RefactoreAnimeController@deleteAnime']);

    });

    //добавить серию
    Route::post('/addSeries/{id}', ['as' => 'addSeries', 'uses' => 'SeriesController@addSeries']);
    //изменить серию
    Route::post('/updateSeries/{id}', ['as' => 'updateSeries', 'uses' => 'SeriesController@updateSeries']);
    //удаление серии
    Route::delete('/deleteSeries/{id}', ['as' => 'deleteSeries', 'uses' => 'SeriesController@removeSeries']);

    //Добавление героя страница
    Route::get('/add/person', function () {
        return view('addPerson');
    });
    //Добавление героя
    Route::post('/add/person', ['as' => 'addPerson', 'uses' => 'PersonController@addPerson']);
    //Изменение героя страница
    Route::get('/update/person/{id}', ['as' => 'updatePerson', 'uses' => 'PersonController@updatePersonPage']);
    //Изменение героя
    Route::post('/update/person/{id}', ['as' => 'updatePerson', 'uses' => 'PersonController@updatePerson']);
    //Изменение изображения героя
    Route::post('/update/img/person/{id', ['as' => 'uploadImagePerson', 'uses' => 'PersonController@refactoreImg']);
    //удаление героя
    Route::delete('/delete/person/{id}', ['as' => 'deletePerson', 'uses' => 'PersonController@deletePerson']);

    //Проверка аниме
    Route::get('/changeAnime', function () {
        $data = DB::table('anime')->where('name', 'LIKE', '%' . request()->name . '%')->get();
        return response()->json($data);
    });
    //Проверка героя
    Route::get('/changePerson', function () {
        $data = DB::table('person')->where('name', 'LIKE', '%' . request()->name . '%')->get();
        return response()->json($data);
    });

    // Пользователи страница
    Route::get('/users', ['as' => 'users', 'uses' => 'UserController@getUsers']);
    // Повызить пользователя до редактора
    Route::post('/users/upgrade/editor/{id}', ['as' => 'upgradeToEditor', 'uses' => 'UserController@upgradeToEditor']);
    // Повызить пользователя до админа
    Route::post('/users/upgrade/admin/{id}', ['as' => 'upgradeToAdmin', 'uses' => 'UserController@upgradeToAdmin']);
    // Понизить пользователя до редактора
    Route::post('/users/lower/editor/{id}', ['as' => 'lowerToEditor', 'uses' => 'UserController@lowerToEditor']);
    // понизить пользователя до смертного
    Route::post('/users/lower/death/{id}', ['as' => 'lowerToDeath', 'uses' => 'UserController@lowerToDeath']);
    // Удалить пользователя
    Route::delete('/users/drop/{id}', ['as' => 'dropUser', 'uses' => 'UserController@dropUser']);

    //новости
    Route::get('/news/{id}', ['as' => 'newsById', 'uses' => 'NewsController@index']);
    // удалить новость
    Route::delete('/delete/{id}', ['as' => 'deleteNews', 'uses' => 'NewsController@deleteNews']);
    // изменить новость страница
    Route::get('/update/news/{id}', ['as' => 'updateNews', 'uses' => 'NewsController@updateNewsPage']);
    // изменить новость
    Route::post('/update/news/{id}', ['as' => 'updateNewsPost', 'uses' => 'NewsController@updateNews']);
    // добавить новости
    Route::get('/add/news', [
        'as' => 'newsPage',
        function () {
            return view('news');
        }
    ]);
    Route::post('/add/news', ['as' => 'addNew', 'uses' => 'NewsController@addNews']);
