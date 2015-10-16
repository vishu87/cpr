<?php

class CVController extends BaseController {

    protected $layout = 'cvbuilder.layout';

    public function getIndex(){
        $user_id = Auth::id();
        $this->layout->title = 'The Corperlife Career Centre';
        $this->layout->description = 'Corperlife provides a Free beautifully designed CV builder to help all Nigerian jobseekers get employed. Find other free career advice here.';
        $this->layout->keywords = 'jobseeker, career advice, career centre';
        $this->layout->top_active = 0;
        $this->layout->main = View::make('cvbuilder.index');         
    }
     public function getcareer(){
        $user_id = Auth::id();
        $this->layout->title = 'Career Center Document';
        $this->layout->main = View::make('cvbuilder.career-doc');         
    }

    public function postCreateNew(){
         $cre = [
            'cv_name' => Input::get('cv_name'),
            'email' => Input::get('email')
        ];
        $rules = [
            'cv_name' => 'required',
            'email' => 'required|email'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $cv = new Cv;
            do {
                $random = str_random(10);
                $count = Cv::where('cv_code',$random)->count();
            } while($count != 0);

            $cv->cv_code = $random;
            if(Auth::check()){
                $cv->user_id = Auth::id();
            }
            $cv->cv_name = Input::get('cv_name');
            $cv->email = Input::get('email');
            $cv->save();
            $cv_id = $cv->id;
            DB::table('sections')->insert(array(
                array("cv_id"=>"$cv_id","section_name"=>"Work Experience","type"=>"1","priority"=>"1","default"=>"1"),
                array("cv_id"=>"$cv_id","section_name"=>"Qualfications","type"=>"0","priority"=>"2","default"=>"1"),
                array("cv_id"=>"$cv_id","section_name"=>"Education","type"=>"2","priority"=>"3","default"=>"1"),
                array("cv_id"=>"$cv_id","section_name"=>"NYSC","type"=>"3","priority"=>"4","default"=>"1"),
                array("cv_id"=>"$cv_id","section_name"=>"Languages","type"=>"4","priority"=>"5","default"=>"1"),
                array("cv_id"=>"$cv_id","section_name"=>"Passport Photo","type"=>"5","priority"=>"6","default"=>"1"),
                array("cv_id"=>"$cv_id","section_name"=>"Interests","type"=>"0","priority"=>"7","default"=>"1"),
                array("cv_id"=>"$cv_id","section_name"=>"References","type"=>"0","priority"=>"8","default"=>"1"),
            ));
            return Redirect::to('/cvbuilder/cv/'.$cv->cv_code);
        }   else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function getCV($id){

        $cv = Cv::where('cv_code',$id)->first();
        if($cv){
            $cv_id = $cv->id;
            $dob = explode('-', $cv->dob);
            $workex = WorkExperience::where('cv_id',$cv_id)->orderBy('priority')->get();
            $education = Education::where('cv_id',$cv_id)->orderBy('priority')->get();
            $nysc = Nysc::where('cv_id',$cv_id)->orderBy('priority')->get();
            $language = Language::leftJoin('langs','languages.language_id','=','langs.id')->leftJoin('levels','languages.level_id','=','levels.id')->leftJoin('abilities','languages.ability_id','=','abilities.id')->select('languages.id','languages.language_id','languages.language_name','langs.language','abilities.ability','levels.level')->where('cv_id',$cv_id)->orderBy('priority')->get();

            $sex = array("0"=>"Select","1"=>"Male","2"=>"Female");
            
            $states =  array("0" => "Select") + DB::table('states')->lists('state','id');
            $religions =  array("0" => "Select") + DB::table('religions')->lists('religion','id') + array("-1" => "Others");
            
            
            $sections = Section::where('cv_id',$cv_id)->orderBy('priority')->get();
            $topic = Section::where('cv_id',$cv_id)->orderBy('priority')->get();

            $this->layout->title = 'The Corperlife CV Builder '.$id;
            $this->layout->description = 'Read this guide before your interview! follow it, and you be in a better position than the competition.';
            $this->layout->keywords = 'Interview, interview guide, interview tips';
            $this->layout->top_active = 6;


            $this->layout->main = View::make('cvbuilder.cv',array(
                "cv" => $cv,
                "sections" => $sections,
                "workex" => $workex,
                "education" => $education,
                "dob" => $dob,
                "nysc" => $nysc,
                "language" => $language,
                "sex" => $sex,
                "states" => $states,
                "religions" => $religions,
            ));
        } else {
            return Redirect::to(404);
        }
    }

    public function putSaveInfo($id){

        $cv = Cv::where('cv_code',$id)->first();
        $cv_id = $cv->id;
        $section_order=Input::get ('section');
        $count = 1;

        foreach ($section_order as $section_id) {
            Section::where('id',$section_id)->where('cv_id',$cv_id)->update(array('priority'=>$count));
            $count++;
        }
            $cv->cv_name = Input::get("cv_name");
            $cv->full_name = Input::get("full_name");
            $cv->email = Input::get("email");
            $cv->phone_num = Input::get("phone_num");
            $cv->website = Input::get("website");
            $cv->add_line1 = Input::get("add_line1");
            $cv->add_line2 = Input::get("add_line2");
            $cv->sex = Input::get("sex");
            $cv->state_origin = Input::get("state_origin");
            $cv->religion = Input::get("religion");
            $cv->religion_text = Input::get("religion_text");
            $cv->local_government = Input::get("local_government");
            $cv->dob = Input::get("dob_year").'-'.Input::get("dob_month").'-'.Input::get("dob_date");
            if(Input::has("show_profile_pic")) $cv->show_profile_pic = 1;
            else $cv->show_profile_pic = 0;
            $cv->marital_status = Input::get("marital_status");
              if (Input::hasFile('profile_image')){
                    $destinationPath = "assets/img/";
                    $extension = Input::file('profile_image')->getClientOriginalExtension();
                    $image = Input::file('profile_image')->getClientOriginalName();
                    Input::file('profile_image')->move($destinationPath,$image);
                    $cv->profile_image = $image;
                }           
            $cv->save();
            
            $count = 1;
            $work_ex_order = Input::get('work_ex');
            if($work_ex_order){
                foreach ($work_ex_order as $work_ex_id) {
                    WorkExperience::where('id',$work_ex_id)->where('cv_id',$cv_id)->update(array('priority'=>$count));
                    $count++;
                }
            }

            $count = 1;
            $education_order = Input::get('education');

            if($education_order){
                foreach ($education_order as $education_id) {
                    Education::where('id',$education_id)->where('cv_id',$cv_id)->update(array('priority'=>$count));
                    $count++;
                }
            }
            

            $count = 1;
            $nysc_order = Input::get('nysc');
            if($nysc_order){
                foreach ($nysc_order as $nysc_id) {
                    Nysc::where('id',$nysc_id)->where('cv_id',$cv_id)->update(array('priority'=>$count));
                    $count++;
                }
            }
            
             $count = 1;
            $language_order = Input::get('language');
            if($language_order){
                foreach ($language_order as $language_id) {
                    Language::where('id',$language_id)->where('cv_id',$cv_id)->update(array('priority'=>$count));
                    $count++;
                }
            }


            $sections = Section::where('cv_id',$cv_id)->orderBy('priority')->get();

            foreach ($sections as $section) {
                if($section->type == 0){
                    $content = Input::get("section_".$section->id);
                    Section::where('id',$section->id)->where('cv_id',$cv_id)->update(array('content'=>$content));
                }
            }
            
            return 'success';           
    }


     public function postWorkex(){
       
        $cre = [
            'title' => Input::get('title'),
            'company' => Input::get('company'),
            'location' => Input::get('location')
        ];
        $rules = [
            'title' => 'required',
            'company' => 'required',
            'location' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $workex = new WorkExperience;
            $workex->cv_id = Input::get('cv_id');
            $workex->title = Input::get('title');
            $workex->company = Input::get('company');
            $workex->location = Input::get('location');
            $workex->startdate = Input::get('startdate');
            $workex->enddate = Input::get('enddate');
            $workex->otherinfo = Input::get('otherinfo');
            $workex->save();
            $insert_id = $workex->id;
            $data["success"] = true;
            $data["message"] = 'Work Experience is succefully added';
            $data["title"] = Input::get('title');
            $data["company"] = Input::get('company');
            $data["location"] = Input::get('location');
            $data["startdate"] = Input::get('startdate');
            $data["enddate"] = Input::get('enddate');
            $data["id"] = $insert_id;
        } else {
            $data["success"] = false;
            $data["message"] = 'Please fill required fields';
        }
        return json_encode($data);
    }

    public function putWork(){       
        $cre = [
            'title' => Input::get('title'),
            'company' => Input::get('company'),
            'location' => Input::get('location')
        ];
        $rules = [
            'title' => 'required',
            'company' => 'required',
            'location' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $workex = WorkExperience::find(Input::get('work_id'));
            $cv = Cv::select('id')->where('cv_code',Input::get('cv_code'))->first();
            if($cv->id == $workex->cv_id){
                $workex->title = Input::get('title');
                $workex->company = Input::get('company');
                $workex->location = Input::get('location');
                $workex->startdate = Input::get('startdate');
                $workex->enddate = Input::get('enddate');
                $workex->otherinfo = Input::get('otherinfo');         
                $workex->save();
                $data["success"] = true;
                $data["message"] = 'Work Experience is succefully updated';
                $data["title"] = Input::get('title');
                $data["company"] = Input::get('company');
                $data["location"] = Input::get('location');
                $data["startdate"] = Input::get('startdate');
                $data["enddate"] = Input::get('enddate');
            }
            else {
                $data["message"] = 'Error in editing work';
            }
        } else {
            $data["success"] = false;
            $data["message"] = 'Please fill required fields';
        }
        return json_encode($data);
    }


     public function postEducation(){
       
        $cre = [
            'coursename' => Input::get('coursename'),
            'institutename' => Input::get('institutename')
        ];
        $rules = [
            'coursename' => 'required',
            'institutename' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $education = new Education;
            $education->cv_id = Input::get('cv_id');
            $education->coursename = Input::get('coursename');
            $education->institutename = Input::get('institutename');
            $education->add_line1 = Input::get('add_line1');
            $education->add_line2 = Input::get('add_line2');
            $education->startdate = Input::get('startdate');
            $education->enddate = Input::get('enddate');
            $education->otherinfo = Input::get('otherinfo');
            $education->save();
            $insert_id = $education->id;

            $data["success"] = true;
            $data["message"] = 'Education details are succefully added';
            $data["title"] = Input::get('title');
            $data["id"] = $insert_id;
            $data["coursename"] = Input::get('coursename');
            $data["institutename"] = Input::get('institutename');              
            $data["startdate"] = Input::get('startdate');
            $data["enddate"] = Input::get('enddate');

        } else {
            $data["success"] = false;
            $data["message"] = 'Please fill required fields';
        }
        return json_encode($data);

    }

    public function putEducation(){
       
        $cre = [
            'coursename' => Input::get('coursename'),
            'institutename' => Input::get('institutename')
        ];
        $rules = [
            'coursename' => 'required',
            'institutename' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $education = Education::find(input::get('education_id'));
            $cv=Cv::select('id')->where('cv_code',Input::get('cv_code'))->first();
            if($cv->id==$education->cv_id){
                $education->coursename = Input::get('coursename');
                $education->institutename = Input::get('institutename');
                $education->add_line1 = Input::get('add_line1');
                $education->add_line2 = Input::get('add_line2');
                $education->startdate = Input::get('startdate');
                $education->enddate = Input::get('enddate');
                $education->otherinfo = Input::get('otherinfo');
                $education->save();
                $data["success"] = true;
                $data["message"] = 'Education details are succefully updated';
                $data["coursename"] = Input::get('coursename');
                $data["institutename"] = Input::get('institutename');              
                $data["startdate"] = Input::get('startdate');
                $data["enddate"] = Input::get('enddate');
            }
        } else {
                $data["success"] = false;
                $data["message"] = 'Please fill required fields';
        }
        return json_encode($data);
    }
    
    public function postNysc(){
       
        $cre = [
            'ppa' => Input::get('ppa'),
            'batch' => Input::get('batch'),
            'year' => Input::get('year')
        ];
        $rules = [
            'ppa' => 'required',
            'batch' => 'required',
            'year' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $nysc = new Nysc;
            $nysc->cv_id = Input::get('cv_id');
            $nysc->batch = Input::get('batch');
            $nysc->year = Input::get('year');
            $nysc->ppa = Input::get('ppa');
            $nysc->cd = Input::get('cd');
            $nysc->otherinfo = Input::get('otherinfo');     
            $nysc->save();
            $insert_id = $nysc->id;
            $data["success"] = true;
            $data["message"] = 'NYSC details are succefully added';
            $data["title"] = Input::get('title');
            $data["id"] = $insert_id;
            $data["batch"] = Input::get('batch');
            $data["year"] = Input::get('year');
            $data["ppa"] = Input::get('ppa');
        } else {
            $data["success"] = false;
            $data["message"] = "Please fill all required fields";
        }
        return json_encode($data);

    }
      public function putNysc(){
       
        $cre = [
            'ppa' => Input::get('ppa'),
            'batch' => Input::get('batch'),
            'year' => Input::get('year')
        ];
        $rules = [
            'ppa' => 'required',
            'batch' => 'required',
            'year' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $nysc = Nysc::find(input::get('nysc_id'));
            $cv=Cv::select('id')->where('cv_code',Input::get('cv_code'))->first();
            if($cv->id==$nysc->cv_id){
            $nysc->batch = Input::get('batch');
            $nysc->year = Input::get('year');
            $nysc->ppa = Input::get('ppa');
            $nysc->cd = Input::get('cd');    
            $nysc->save();
            $data["success"]= true;
            $data["message"] = 'NYSC details are succefully updated';
            $data["batch"] = Input::get('batch');
            $data["year"] = Input::get('year');
            $data["ppa"] = Input::get('ppa');
            }
            else{            
                $data["success"]= false;
                $data["message"] = 'Error in editing work';

            } 
        }
        else 
        {
                $data["success"]= false;
                $data["message"] = 'Please fill all required fields';
        }
        return json_encode($data);
    }

        public function postLanguage(){
       
        $cre = [
            'language_id' => Input::get('language_id'),        
            'ability' => Input::get('ability'),
            'level' => Input::get('level')
        ];
        $rules = [
            'language_id' => 'required|not_in:0',
            'ability' => 'required',
            'level' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if(Input::get('language_id') == -1 && Input::get('language_name') == ''){
                $data["language_id"] = Input::get('language_id');
                $data["success"] = false;
                $data["message"] = 'Please fill the other language name';
            } else {
                $language = new Language;
                $language->cv_id = Input::get('cv_id');
                $language->language_id = Input::get('language_id');
                
                if($language->language_id == -1) $language->language_name = Input::get('language_name');
                
                $language->ability_id = Input::get('ability');
                $language->level_id = Input::get('level');
                $language->save();

                $insert_id = $language->id;
                
                $data["message"] = 'Language is succefully added';

                if($language->language_id != -1){
                    $lang = DB::table('langs')->select('language')->where('id',$language->language_id)->first();
                    $data["language_id"] = $lang->language;
                } else {
                    $data["language_id"] = Input::get('language_name');
                }
                
                $ability = DB::table('abilities')->select('ability')->where('id',$language->ability_id)->first();
                
                $data["success"] = true;
                $data["ability"] = $ability->ability;
                
                $level = DB::table('levels')->select('level')->where('id',$language->level_id)->first();
                $data["level"] = $level->level;
                
                $data["id"] = $insert_id;
           } 
        } else {
            $data["success"] = false;
            $data["message"] = 'Please fill all required fields';
        }
        return json_encode($data);
    }

    public function putLanguage(){       
         $cre = [
            'language_id' => Input::get('language_id'),
            'ability' => Input::get('ability'),
            'level' => Input::get('level')
        ];
        $rules = [
            'language_id' => 'required|not_in:0',
            'ability' => 'required',
            'level' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $language = Language::find(Input::get('language_edit'));
            $cv = Cv::select('id')->where('cv_code',Input::get('cv_code'))->first();

            if($cv->id == $language->cv_id){
                if(Input::get('language_id') == -1 && Input::get('language_name') == ''){
                    $data["success"] = false;
                    $data["message"] = 'Please fill the other language name';
                } else {
                    $language->language_id = Input::get('language_id');
                    if($language->language_id == -1)$language->language_name = Input::get('language_name');
                    $language->ability_id = Input::get('ability');
                    $language->level_id = Input::get('level');     
                    $language->save();

                    $data["success"] = true;
                    $data["message"] = 'Language is succefully updated';
                   
                    if($language->language_id != -1){
                        $lang = DB::table('langs')->select('language')->where('id',$language->language_id)->first();
                        $data["language_id"] = $lang->language;
                    } else {
                        $data["language_id"] = Input::get('language_name');
                    }

                    $data["language_name"] = Input::get('language_name');
                    $ability = DB::table('abilities')->select('ability')->where('id',$language->ability_id)->first();
                    $data["ability"] = $ability->ability;
                    $level = DB::table('levels')->select('level')->where('id',$language->level_id)->first();
                    $data["level"] = $level->level;
                }
            }
            else {
                $data["success"] = false;
                $data["message"] = 'Error in editing language';
            }
        } 
        else {
            $data["success"] = false;
            $data["message"] = 'Please fill all required fields';
        }
        return json_encode($data);

    }

     public function postProfile(){      
         
          $cre = [
            'profile_image' => Input::get('profile_image')
        ];
        $rules = [
            'profile_image' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $profiles = new Profile;
            $profiles->cv_id = Input::get('cv_id');
            $profiles->profile_image = Input::get('profile_image');
            $profiles->save();
            $insert_id = $profiles->id;
            $data["message"] = 'Profile detail is succefully added';
            $data["profile_image"] = Input::get('profile_image');
            $data["id"] = $insert_id;
            return json_encode($data);
        } else {
            return 'Please upload the image';
        }
    }

      public function putProfile(){
       
        $cre = [
            'profile_image' => Input::get('profile_image')
        ];
        $rules = [
            'profile_image' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $profiles = Nysc::find(input::get('profile_id'));
            $cv=CV::select('id')->where('cv_code',Input::get('cv_code'))->first();
            if($cv->id==$profiles->cv_id){
            $profiles->profile_image = Input::get('profile_image');
            $profiles->save();
            $data["message"] = 'Profile details are succefully updated';
            $data["profile_image"] = Input::get('profile_image');
        }
        else{            
            $data["message"] = 'Error in editing image';

        } return json_encode($data);
    }
        else 
        {
            return 'Please upload the image';
        }
    }


    public function postSection(){
       
        $cre = [
            'section_name' => Input::get('section_name')
        ];
        $rules = [
            'section_name' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $section = new Section;
            $section->cv_id = Input::get('cv_id');
            $section->section_name = Input::get('section_name');
            $section->type = 0;
            $section->priority = DB::table('sections')->where('cv_id',Input::get('cv_id'))->max('priority') + 1;
            $section->save();
            $insert_id = $section->id;

            $data["message"] = 'Section is succefully added';
            $data["section_name"] = Input::get('section_name');
            $data["id"] = $insert_id;
            return json_encode($data);
        } else {
            return 'Please fill all the inputs';
        }
    }

    public function putSection(){
       
        $cre = [
            'section_name' => Input::get('section_name')
        ];
        $rules = [
            'section_name' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){

            $section = Section::find(Input::get('section_id'));
            $cv = Cv::select('id')->where('cv_code',Input::get('cv_code'))->first();
            if($cv->id == $section->cv_id){
                $section->section_name = Input::get('section_name');
                $section->save();

                $data["message"] = 'Section name is succefully updated';
                $data["section_name"] = Input::get('section_name');
            } else {
                $data["message"] = 'Error in editing section';
            }
            return json_encode($data);
        } else {
            return 'Please fill all the inputs';
        }
    }

    public function getPreview($code,$style,$type){

        $cv = Cv::leftJoin('states','cvs.state_origin','=','states.id')->leftJoin('religions','cvs.religion','=','religions.id')->select('cvs.*','states.state','religions.religion as religion_name')->where('cv_code',$code)->first();
        $cv_id = $cv->id;
        $dob = explode('-', $cv->dob);
        $workex = WorkExperience::where('cv_id',$cv_id)->orderBy('priority')->get();
        $education = Education::where('cv_id',$cv_id)->orderBy('priority')->get();
        $nysc = Nysc::where('cv_id',$cv_id)->orderBy('priority')->get();
        $language = Language::leftJoin('langs','languages.language_id','=','langs.id')->leftJoin('levels','languages.level_id','=','levels.id')->select('languages.id','languages.language_id','languages.language_name','langs.language','languages.ability_id','levels.level')->where('cv_id',$cv_id)->orderBy('priority')->get();
        $sections = Section::where('cv_id',$cv_id)->orderBy('priority')->get();
        $topic = Section::where('cv_id',$cv_id)->orderBy('priority')->get();
        $abilities = DB::table('abilities')->lists('ability','id');

         foreach ($language as $value) {
            $value->ability_id = explode(',', $value->ability_id);
            $values = array();
            foreach ($value->ability_id as $ability_id) {
                array_push($values, $abilities[$ability_id]);
            }
             $value->ability = '<b>Ability</b>: '.implode(' / ', $values);
            $value->level = '<b>Level</b>: '.$value->level;
        }
        $marital_status_vals = array("1"=>"Married","2"=>"UnMarried");

        $view = View::make('cvbuilder.templates.'.$style,array(
            "cv" => $cv,
            "sections" => $sections,
            "workex" => $workex,
            "education" => $education,
            "dob" => $dob,
            "nysc" => $nysc,
            "language" => $language,
            "marital_status_vals" =>$marital_status_vals

        ));
        if($type == 2) return $view.'<script>window.onload = function() { window.print(); }</script>';
        else return $view;      
    }

    public function getPDF($type,$code,$style){
        if($type == 2)
            return Redirect::to('/cvbuilder/preview/'.$code.'/'.$style.'/'.'2');
        include(app_path().'/dompdf/dompdf_config.inc.php');
        $dompdf = new DOMPDF();

        $cv = Cv::leftJoin('states','cvs.state_origin','=','states.id')->leftJoin('religions','cvs.religion','=','religions.id')->select('cvs.*','states.state','religions.religion as religion_name')->where('cv_code',$code)->first();
        $cv_id = $cv->id;
        $dob = explode('-', $cv->dob);
        $workex = WorkExperience::where('cv_id',$cv_id)->orderBy('priority')->get();
        $education = Education::where('cv_id',$cv_id)->orderBy('priority')->get();
        $nysc = Nysc::where('cv_id',$cv_id)->orderBy('priority')->get();
        $language = Language::leftJoin('langs','languages.language_id','=','langs.id')->leftJoin('levels','languages.level_id','=','levels.id')->select('languages.id','languages.language_id','languages.language_name','langs.language','languages.ability_id','levels.level')->where('cv_id',$cv_id)->orderBy('priority')->get();
        $sections = Section::where('cv_id',$cv_id)->orderBy('priority')->get();
        $topic = Section::where('cv_id',$cv_id)->orderBy('priority')->get();
        $abilities = DB::table('abilities')->lists('ability','id');

         foreach ($language as $value) {
            $value->ability_id = explode(',', $value->ability_id);
            $values = array();
            foreach ($value->ability_id as $ability_id) {
                array_push($values, $abilities[$ability_id]);
            }
             $value->ability = '<b>Ability</b>: '.implode(' / ', $values);
            $value->level = '<b>Level</b>: '.$value->level;
        }
        $marital_status_vals = array("1"=>"Married","2"=>"UnMarried");
        $html =  View::make('cvbuilder.templates.'.$style,array(
            "cv" => $cv,
            "sections" => $sections,
            "workex" => $workex,
            "education" => $education,
            "dob" => $dob,
            "nysc" => $nysc,
            "language" => $language,
            "marital_status_vals" =>$marital_status_vals
        ));

        $dompdf->load_html($html);
        $dompdf->render();

        if($type == 3){
            $output = $dompdf->output();
            file_put_contents(app_path().'/../../cvs/'.$code.'.pdf', $output);

            require app_path().'/libraries/PHPMailerAutoload.php';
            require app_path().'/mail.php';

            $mail = new PHPMailer;
            $mail_text = new Mail;

            $mail->isMail();
            $mail->setFrom('info@corperlife.com', 'Corper Life');
            
            $emails = explode(',', Input::get("emails"));
            foreach ($emails as $email) {
                $mail->addAddress($email);
            }

            $mail->addAttachment(app_path().'/../../cvs/'.$code.'.pdf'); 
            $mail->isHTML(true);


            $mail->Subject = "Your CV -".$code." | Corper Life ";
            $mail->Body = $mail_text->cv_mail($cv->full_name, $code, Input::get("emails"));

            if(!$mail->send()) {
                $response["success"] = false;
                $response["message"] = 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                $response["success"] = true;
                $response["message"] = "The cv has been mailed to you on ".Input::get("emails");
            }

            return json_encode($response);
        } else {
            $dompdf->stream($code.".pdf",array('Attachment'=>0));
        }
    }

    public function deleteWork($work_id,$code){
        $cv = Cv::where('cv_code',$code)->first();
        $cv_id = $cv->id;
        WorkExperience::where('id',$work_id)->where('cv_id',$cv_id)->delete();
        $data["success"] = 1;
        $data["message"] = "Succefully deleted";
        return json_encode($data);
    }

    public function deleteEducation($education_id,$code){
        $cv = Cv::where('cv_code',$code)->first();
        $cv_id = $cv->id;
        Education::where('id',$education_id)->where('cv_id',$cv_id)->delete();
        $data["success"] = 1;
        $data["message"] = "Succefully deleted";
        return json_encode($data);
    }

    public function deleteNysc($nysc_id,$code){
        $cv = Cv::where('cv_code',$code)->first();
        $cv_id = $cv->id;
        Nysc::where('id',$nysc_id)->where('cv_id',$cv_id)->delete();
        $data["success"] = 1;
        $data["message"] = "Succefully deleted";
        return json_encode($data);
    }

      public function deleteLanguage($language_id,$code){
        $cv = Cv::where('cv_code',$code)->first();
        $cv_id = $cv->id;
        Language::where('id',$language_id)->where('cv_id',$cv_id)->delete();
        $data["success"] = 1;
        $data["message"] = "Succefully deleted";
        return json_encode($data);
    }

    public function deleteSection($section_id,$code){
        $cv = Cv::where('cv_code',$code)->first();
        $cv_id = $cv->id;
        Section::where('id',$section_id)->where('cv_id',$cv_id)->delete();
        $data["success"] = 1;
        $data["message"] = "Succefully deleted";
        return json_encode($data);
    }
}    