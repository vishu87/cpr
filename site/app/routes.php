<?php

Route::get('/', function(){
	$service_year = array(""=>"Service Year");
	for ($i=2010; $i < 2021; $i++) { 
		array_push($service_year, $i);
	}
	$main = View::make('home',["service_year" => $service_year]);
	return View::make('main',["title"=>"The Official Corperlife Website","description"=>"Welcome to the Official Corperlife Site. We help Corpers Maximise their NYSC Experience and also get them Started on their Careers.","keywords"=>"Corperlife, Youth Corpers, NYSC batch","main"=>$main]);
});
App::missing(function($exception)
{
	$main = View::make('404');
    return View::make('main',["title"=>"404 error Corperlife","description"=>"Welcome to the Official Corperlife Site. We help Corpers Maximise their NYSC Experience and also get them Started on their Careers.","keywords"=>"Corperlife, Youth Corpers, NYSC batch","main"=>$main]);
});
App::error(function(Exception $exception, $code) 
{
   $main = View::make('404');
    return View::make('main',["title"=>"404 error Corperlife","description"=>"Welcome to the Official Corperlife Site. We help Corpers Maximise their NYSC Experience and also get them Started on their Careers.","keywords"=>"Corperlife, Youth Corpers, NYSC batch","main"=>$main]);
});
Route::get('/logout', function(){
	Auth::logout();
	return Redirect::to('/');
});
Route::post('/subscribe', 'UserController@postSubscribe');
Route::get('/forgot-password', 'UserController@getForgot');
Route::post('/forgot-password', 'UserController@postForgot');
//Route::get('/mail-try', 'UserController@mailTry');

Route::get('/interview-questions', function(){
	$main = View::make('cvbuilder.interview_qus');
	return View::make('main',["title"=>"Interview Questions to Expect","description"=>"Here are some questions you can expect at the interview. Proper preparation will make you a better candidate.","keywords"=>"Interview, interview questions, interview preparation","main"=>$main]);
});
Route::get('/questions-you-can-ask', function(){
	$main = View::make('cvbuilder.ask_qus');
	return View::make('main',["title"=>"Interview Questions to Ask","description"=>"Here are some questions you can ask your interviewers to make sure the job is right for you and   also to impress them.","keywords"=>"Interview, interview questions,  ask","main"=>$main]);
});
Route::get('/interview-guide', function(){
	$main = View::make('cvbuilder.interview_guide');
	return View::make('main',["title"=>"Interview Guide","description"=>"Read this guide before your interview! follow it, and you be in a better position than the competition.","keywords"=>"Interview, interview guide, interview tips","main"=>$main]);
});
Route::get('/cv-writing-tips', function(){
	$main = View::make('cvbuilder.cv_tips');
	return View::make('main',["title"=>"CV Writing Tips","description"=>"Writing a fantastic CV “no be beans”. Go through these tips to ensure it comes out great and make yourself a better candidate for the job.","keywords"=>"Nigerian Jobs, writing CV, better candidate","main"=>$main]);
});
Route::get('/about-cover-letter', function(){
	$main = View::make('cvbuilder.cover_letter');
	return View::make('main',["title"=>"About Cover letter","description"=>"We help you answer everything about cover letters to make sure you submit a better application for the job.","keywords"=>"cover letter, jobseeker, application","main"=>$main]);
});
Route::get('/cv-delivery', function(){
	$main = View::make('cvbuilder.cv_delivery');
	return View::make('main',["title"=>"CV Delivery","description"=>"You have put a lot of work into preparing your CV/resume, find out how to properly deliver it. Don’t overlook this.","keywords"=>"Cv, Resume, CV Delivery","main"=>$main]);
});
Route::get('/advertise', function(){
	$main = View::make('ad');
	return View::make('main',["title"=>"Advertisement Opportunities","description"=>"Find out how to get your advert on the Corperlife network and reach the Nigerian youth.","keywords"=>"Advert, corperlife network, Nigerian youth","main"=>$main]);
});

Route::get('/faq', 'GeneralController@faq');

Route::post('/faq', 'GeneralController@faqsubmit');

Route::get('/whycorperlife', function(){
	$main = View::make('whycorper');
	return View::make('main',["title"=>"Why Corperlife","description"=>"If you are a corper, jobseeker or advertiser, find out what the Corperlife website can help you with.","keywords"=>"jobseeker, advertiser, corper, ","main"=>$main]);
});
Route::get('/ourstory', function(){
	$main = View::make('ourstory');
	return View::make('main',["title"=>"The Corperlife Startup Story","description"=>"Thinking about starting company in Nigeria?  Check out the Corperlife story, learn and get inspired. We’ll keep adding as we grow.","keywords"=>"starting company, Corperlife, story","main"=>$main]);
});

Route::get('/career-center', function(){
	$main = View::make('career-center.career');
	return View::make('main',["title"=>"Career Center","main"=>$main]);
});
Route::get('/career-center-cv', function(){
	$main = View::make('career-center.center');
	return View::make('main',["title"=>"Career Center","main"=>$main]);
});
Route::get('/website-rules', function(){
	$main = View::make('rules');
	return View::make('main',["title"=>"Corper Life Website Rule","description"=>"Corper life website rules","keywords"=>"corper life, website rules","main"=>$main]);
});

Route::post('/advertise/saveadd', 'GeneralController@postSaveadd');

Route::get('/login', 'UserController@getLogin');
Route::get('/fblogin', 'UserController@getFBLogin');

Route::get('/career-document', 'CVController@getcareer');

Route::post('/login', 'UserController@postLogin');

Route::post('/signup', 'UserController@postSignup');

Route::group(['prefix' => 'profile', 'before' => 'auth'], function () {
	Route::get('/', 'UserprofileController@getProfile');
	Route::put('/savepi', 'UserprofileController@putSavePI');

	Route::get('/nysc-details', 'UserprofileController@nyscDetails');
	Route::put('/nysc-details', 'UserprofileController@putnyscDetails');

	Route::get('/change-password', 'UserprofileController@changePassword');
	Route::put('/change-password', 'UserprofileController@putchangePassword');
	
	Route::post('/uploadprofilepic', 'UserMediaController@uploadProfilePic');
});

Route::group(['prefix' => 'checklist-guide', 'before' => 'auth'], function () {
	Route::get('/', 'UserprofileController@getChecklistGuide');
});

Route::group(['prefix' => 'corper-admin', 'before' => array('auth','admin')], function () {
	Route::get('/', 'UserController@getUsers');
});

Route::group(['prefix' => 'forum', 'before' => 'auth'], function () {
	Route::get('/', 'ForumController@getForum');
	Route::post('/savetopic', 'ForumController@postSaveTopic');
	Route::get('/category/{id}', 'ForumController@getcategory');
	Route::post('/search/', 'ForumController@postSearch');
     
	Route::group(['prefix' => 'forum-page'], function () {
		Route::get('/{id}', 'ForumController@getForumpage');
		Route::post('/savereply/{id}', 'ForumController@postSaveReply');
	});

	Route::group(['prefix' => 'content-page'], function () {
		Route::get('/{id}', 'ForumController@getcontentpage');
	    
	});
});


Route::group(['prefix' => 'knowledge', 'before' => 'auth'], function () {
	Route::get('/', 'UserprofileController@getknowledge');
	Route::post('/askquestion', 'UserprofileController@postAskQuestion');
});
Route::group(['prefix' => 'cv-page', 'before' => 'auth'], function () {
	Route::get('/', 'UserprofileController@getcvpage');
	Route::get('/duplicate/{code}', 'UserprofileController@duplicatecvpage');
	Route::get('/delete/{code}', 'UserprofileController@deleteCV');
});

Route::group(['prefix' => 'content-page', 'before' => 'auth'], function () {
	Route::get('/', 'ForumController@getcontentpage');
});

Route::group(['prefix' => 'cvbuilder'], function () {
	Route::get('/', 'CVController@getIndex');
	Route::post('/createnew', 'CVController@postCreateNew');
	Route::post('/uploadCvPic/{code}', 'UserMediaController@uploadCvPic');

	Route::post('/editcv', function(){

		$count= Cv::where('cv_code',Input::get('cvcode'))->count();
		if($count == 0){
			return Redirect::Back()->with('fail','Invalid CV Code')->withInput();
		} else {
			return Redirect::to('/cvbuilder/cv/'.Input::get('cvcode'));
		}
	});
	Route::get('/cv/{id}', 'CVController@getCV');
	Route::post('/saveinfo/{id}', 'CVController@putSaveInfo');
	Route::get('/fetch_workex', function(){
		return View::make('cvbuilder.section_views.workex');
	});
		Route::get('/fetch_education', function(){
		return View::make('cvbuilder.section_views.education');
	});
		Route::get('/fetch_nysc', function(){
		return View::make('cvbuilder.section_views.nysc');
	});
	
	Route::get('/fetch_language', function(){
			$langs = DB::table('langs')->lists('language','id');
			$langs = array("0"=>"Select") + $langs + array("-1"=>"Others");
			$levels = DB::table('levels')->lists('level','id');
			$abilities = DB::table('abilities')->lists('ability','id');
		return View::make('cvbuilder.section_views.language',array("langs"=>$langs,"levels"=>$levels,"abilities"=>$abilities));
	});
	
	Route::post('/fetch_workex', 'CVController@postWorkex');
	Route::post('/fetch_education', 'CVController@postEducation');
	Route::post('/fetch_nysc', 'CVController@postNysc');
	Route::post('/fetch_language', 'CVController@postLanguage');
	Route::post('/save', 'CVController@postProfile');

	Route::get('/fetch_ui_section', function(){
		return View::make('cvbuilder.section_views.add_new_section');
	});
	Route::get('/edit_ui_section/{id}', function($id){
		$section = Section::find($id);
		return View::make('cvbuilder.section_views.edit_new_section', ['section'=>$section]);
	});
    Route::get('/edit_ui_workex/{id}', function($id){
		$work = WorkExperience::find($id);
		return View::make('cvbuilder.section_views.edit_work', ['work'=>$work]);
	});
	 Route::get('/edit_ui_education/{id}', function($id){
		$education = Education::find($id);
		return View::make('cvbuilder.section_views.edit_education', ['edu'=>$education]);
	});
	  Route::get('/edit_ui_nysc/{id}', function($id){
		$nysc = Nysc::find($id);
		return View::make('cvbuilder.section_views.edit_nysc', ['nysc'=>$nysc]);
	});
	  Route::get('/edit_ui_language/{id}', function($id){
		$language = Language::find($id);
		$langs = DB::table('langs')->lists('language','id');
		$langs = array("0"=>"Select") + $langs + array("-1"=>"Others");

		$levels = DB::table('levels')->lists('level','id');
		$abilities = DB::table('abilities')->lists('ability','id');
		return View::make('cvbuilder.section_views.edit_language', ['lang'=>$language,'langs'=>$langs,'levels'=>$levels,'abilities'=>$abilities]);
	});

	Route::post('/fetch_addsection', 'CVController@postSection');
	Route::post('/edit_section', 'CVController@putSection');

	Route::post('/edit_work', 'CVController@putwork');
	Route::post('/edit_education', 'CVController@puteducation');

	Route::post('/edit_nysc', 'CVController@putnysc');

	Route::post('/edit_language', 'CVController@putlanguage');

	Route::post('/edit_profile', 'CVController@putprofile');

	Route::get('/preview/{code}/{style}/{type}', 'CVController@getPreview');

	Route::get('/pdf/{type}/{code}/{style}', 'CVController@getPDF');
	Route::post('/pdf/{type}/{code}/{style}', 'CVController@getPDF');

	Route::post('/remove_work/{id}/{code}', 'CVController@deleteWork');

	Route::post('/remove_education/{id}/{code}', 'CVController@deleteEducation');

	Route::post('/remove_nysc/{id}/{code}', 'CVController@deleteNysc');

	Route::post('/remove_language/{id}/{code}', 'CVController@deleteLanguage');

	Route::post('/remove_section/{id}/{code}', 'CVController@deleteSection');
});


Route::group(['before'=> 'auth'], function(){

	Route::post('/proaccount', 'UseraccountController@postLogin');
	Route::get('/account',function(){
		return View::make('account');
	});

});
	

Route::post('/profilesave', 'UserprofileController@postsave');

Route::get('/userprofile', function(){
	return View::make('userprofile');
});

Route::get('/logout', function(){
	Auth::logout();
	return Redirect::to('/');
});

Route::get('/userprofile',function(){
	return View::make('userprofile');
});


Route::get('/user/{id}', function(){
	return View::make('main');
});

Route::post('/user/{id}', function(){
	return 'Post';
});

Route::post('/', function(){
	return 'This is the post request';
});


