
<?php

Route::get('travel-agents', 'TravelAgent\TravelAgentsController@travel_agent_listing')->name('travel.agent.listing');

Route::get('travel-agent-home', 'TravelAgent\TravelAgentController@index')->name('travel.agent.home');
Route::get('travel-agent-profile', 'TravelAgent\TravelAgentController@travelAgentProfile')->name('travel.agent.profile');
Route::put('update-travel-agent-profile', 'TravelAgent\TravelAgentController@updateTravelAgentProfile')->name('update.travel.agent.profile');

Route::get('travel-agent/{slug}', 'TravelAgent\TravelAgentController@travelAgentDetail')->name('travel.agent.detail');
Route::post('contact-travel-agent-message-send', 'TravelAgent\TravelAgentController@sendContactForm')->name('contact.travel.agent.message.send');

Route::get('applicant-profile/{application_id}', 'TravelAgent\TravelAgentController@applicantProfile')->name('applicant.profile');
Route::post('submit-message-seeker', 'TravelAgentMessagesController@submitnew_message_seeker')->name('submit-message-seeker');

Route::get('travel-agent-messages', 'TravelAgentMessagesController@all_messages')->name('travel.agent.messages');
Route::get('append-messages', 'TravelAgentMessagesController@append_messages')->name('append-message');
Route::get('append-only-messages', 'TravelAgentMessagesController@appendonly_messages')->name('append-only-message');
Route::post('travel-agent-submit-messages', 'TravelAgentMessagesController@submit_message')->name('travel.agent.submit-message');
Route::get('travel-agent-message-detail/{id}', 'TravelAgent\TravelAgentController@travelAgentMessageDetail')->name('travel.agent.message.detail');

// Route::get('posted-jobs', 'TravelAgent\TravelAgentController@postedJobs')->name('posted.jobs');
// Route::post('contact-applicant-message-send', 'TravelAgent\TravelAgentController@sendApplicantContactForm')->name('contact.applicant.message.send');
// Route::get('user-profile/{id}', 'TravelAgent\TravelAgentController@userProfile')->name('user.profile');

// Route::get('travel-agent-followers', 'TravelAgent\TravelAgentController@travelAgentFollowers')->name('travel.agent.followers');
// Route::get('add-to-favourite-applicant/{application_id}/{user_id}/{job_id}/{company_id}', 'TravelAgent\TravelAgentController@addToFavouriteApplicant')->name('add.to.favourite.applicant');
// Route::get('remove-from-favourite-applicant/{application_id}/{user_id}/{job_id}/{company_id}', 'TravelAgent\TravelAgentController@removeFromFavouriteApplicant')->name('remove.from.favourite.applicant');
// Route::get('list-applied-users/{job_id}', 'TravelAgent\TravelAgentController@listAppliedUsers')->name('list.applied.users');
// Route::get('list-favourite-applied-users/{job_id}', 'TravelAgent\TravelAgentController@listFavouriteAppliedUsers')->name('list.favourite.applied.users');
