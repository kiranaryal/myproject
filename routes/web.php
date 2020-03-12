
<?php
use App\User;


Auth::routes();

Route::post('follow/{user}','FollowsController@store');
Route::get('/','PostsController@index');

Route::post('/p','PostsController@store');
Route::get('/p/create','PostsController@create');
Route::get('/p/{post}','PostsController@show');


Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::patch('/search',function(){
    $q = Request::get ( 'q' );
    $user = User::where('name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('search')->withDetails($user)->withQuery ( $q );
    else return view ('search')->withMessage('No Details found. Try to search again !');
});

?>