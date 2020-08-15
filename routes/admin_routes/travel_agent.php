<?php

/* * ******  Travel Agent Start ********** */
Route::get('list-travel-agents', array_merge(['uses' => 'Admin\TravelAgentController@indexTravelAgents'], $all_users))->name('list.travel.agents');
Route::get('create-travel-agent', array_merge(['uses' => 'Admin\TravelAgentController@createTravelAgent'], $all_users))->name('create.travel.agent');
Route::post('store-travel-agent', array_merge(['uses' => 'Admin\TravelAgentController@storeTravelAgent'], $all_users))->name('store.travel.agent');
Route::get('edit-travel-agent/{id}', array_merge(['uses' => 'Admin\TravelAgentController@editTravelAgent'], $all_users))->name('edit.travel.agent');
Route::put('update-travel-agent/{id}', array_merge(['uses' => 'Admin\TravelAgentController@updateTravelAgent'], $all_users))->name('update.travel.agent');
Route::delete('delete-travel-agent', array_merge(['uses' => 'Admin\TravelAgentController@deleteTravelAgent'], $all_users))->name('delete.travel.agent');
Route::get('fetch-travel-agents', array_merge(['uses' => 'Admin\TravelAgentController@fetchTravelAgentsData'], $all_users))->name('fetch.data.travel.agents');
Route::put('make-active-travel-agent', array_merge(['uses' => 'Admin\TravelAgentController@makeActiveTravelAgent'], $all_users))->name('make.active.travel.agent');
Route::put('make-not-active-travel-agent', array_merge(['uses' => 'Admin\TravelAgentController@makeNotActiveTravelAgent'], $all_users))->name('make.not.active.travel.agent');
Route::put('make-featured-travel-agent', array_merge(['uses' => 'Admin\TravelAgentController@makeFeaturedTravelAgent'], $all_users))->name('make.featured.travel.agent');
Route::put('make-not-featured-travel-agent', array_merge(['uses' => 'Admin\TravelAgentController@makeNotFeaturedTravelAgent'], $all_users))->name('make.not.featured.travel.agent');
/* * ****** End Travel Agent ********** */
