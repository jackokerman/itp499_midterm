<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {

    $restaurants = Restaurant::all();

	return View::make('restaurant', [
        "restaurants" => $restaurants
    ]);
});

Route::get("/restaurants/{id}/reviews", function($id) {

    $restaurant = Restaurant::find($id);
    $reviews = $restaurant->reviews;

    $fbpage = null;
    if ($restaurant->facebook_page) {
        $fbpage = new \Yelp\Facebook\FacebookPage($restaurant->facebook_page);
        $fbpage = $fbpage->get();
    }

    return View::make("reviews", [
        "restaurant" => $restaurant,
        "reviews" =>$reviews,
        "fbpage" =>$fbpage
    ]);
});