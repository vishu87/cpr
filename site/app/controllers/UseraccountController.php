<?php

class UseraccountController extends BaseController {

    public function getProfile(){
        $user_id = Auth::id();

        $user = DB::table('users')->where('id',$cv_id)->first();
        $workex = WorkExperience::where('cv_id',$cv_id)->orderBy('priority')->get();
        $education = Education::where('cv_id',$cv_id)->orderBy('priority')->get();
        $nysc = Nysc::where('cv_id',$cv_id)->orderBy('priority')->get();
        $sections = Section::where('cv_id',$cv_id)->orderBy('priority')->get();
        $topic = Section::where('cv_id',$cv_id)->orderBy('priority')->get();

          return View::make('userprofile',array(
                "user" => $user,
                "sections" => $sections,
                "workex" => $workex,
                "education" => $education
                "nysc" => $nysc
            ));          
    }

    public function putSaveInfo(){
        $section_order=Input::get ('section');
        $count = 1;
        foreach ($section_order as $section_id) {
            Section::where('id',$section_id)->where('cv_id',Auth::id())->update(array('priority'=>$count));
            $count++;
        }

        $cre = [
            'email' => Input::get('email'),
            'phone' => Input::get('phone')
        ];
        $rules = [
            'email' => 'sometimes|email',
            'phone' => 'sometimes|min:10'
        ];

        $validator = Validator::make($cre,$rules);
        if($validator->passes()){


            $user = User::find(Auth::id());
            $user->name = Input::get("name");
            $user->email = Input::get("email");
            $user->phone = Input::get("phone");
            $user->website = Input::get("website");
            $user->save();

            $count = 1;
            $work_ex_order = Input::get('work_ex');
            foreach ($work_ex_order as $work_ex_id) {
                WorkExperience::where('id',$work_ex_id)->where('cv_id',Auth::id())->update(array('priority'=>$count));
                $count++;
            }

            $count = 1;
            $education_order = Input::get('education');
            foreach ($education_order as $education_id) {
                Education::where('id',$education_id)->where('cv_id',Auth::id())->update(array('priority'=>$count));
                $count++;
            }

             $count = 1;
            $nysc_order = Input::get('nysc');
            foreach ($nysc_order as $nysc_id) {
               Nysc::where('id',$nysc_id)->where('cv_id',Auth::id())->update(array('priority'=>$count));
                $count++;
            }

            $sections = Section::where('cv_id',Auth::id())->orderBy('priority')->get();

            foreach ($sections as $section) {
                if($section->type == 0){
                    $content = Input::get("section_".$section->id);
                    Section::where('id',$section->id)->where('cv_id',Auth::id())->update(array('content'=>$content));
                }
            }
            // $count = Parameter::where('user_id',Auth::id())->count();
            // if($count == 0){
            //     $parameters = new Parameter;
            //     $parameters->user_id = Auth::id();
            // } else $parameters = Parameter::where('user_id',Auth::id())->first();
            // $parameters->order = implode(',', Input::get('section'));
            // $parameters->work_ex_order = implode(',', Input::get('work_ex'));
            // $parameters->education_order = implode(',', Input::get('education'));
            // $parameters->save();

            // $qual = Qualification::where('user_id',Auth::id())->count();
            // if($qual == 0){
            //     $qualification = new Qualification;
            //     $qualification->user_id = Auth::id();
            // } else $qualification = Qualification::where('user_id',Auth::id())->first();

            // $qualification->qualification = Input::get('qualification');
            // $qualification->save();

            // $interest = Interest::where('user_id',Auth::id())->count();
            // if($interest == 0){
            //     $interest = new Interest;
            //     $interest->user_id = Auth::id();
            // } else $interest = Interest::where('user_id',Auth::id())->first();

            // $interest->interest = Input::get('interest');
            // $interest->save();

            // $reference = Reference::where('user_id',Auth::id())->count();
            // if($reference == 0){
            //     $reference = new Reference;
            //     $reference->user_id = Auth::id();
            // } else $reference = Reference::where('user_id',Auth::id())->first();

            // $reference->reference = Input::get('reference');
            // $reference->save();


            return Redirect::Back()->with('success','Basic Information Succefully updated');           
        } 

        else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

      


    public function postLogin(){
        $cre = [
            'firstname' => Input::get('firstname'),
            'lastname' => Input::get('lastname'),
            'sex' => Input::get('sex'),
            'phone' => Input::get('phone'),
            'address' => Input::get('address'),
            'city' => Input::get('city'),
            'homestate' => Input::get('homestate'),
            'degree' => Input::get('degree')
        ];
        $rules = [
            'firstname' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'degree' => 'required',
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
                $id = DB::table("account")->insertGetID(array('firstname'=>Input::get("firstname"),'lastname'=>Input::get("lastname"),'sex'=>Input::get("sex"),
                    'phone'=>Input::get("phone"),'address'=>Input::get("address"),'city'=>Input::get("city"),'homestate'=>Input::get("homestate"),'degree'=>Input::get("degree")));
               
                return Redirect::to('/account');
                      
         }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function postWorkex(){
       
        $cre = [
            'title' => Input::get('title'),
            'company' => Input::get('company')
        ];
        $rules = [
            'title' => 'required',
            'company' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $workex = new WorkExperience;
            $workex = WorkExperience::where('cv_code',$id)->first();
            $workex->title = Input::get('title');
            $workex->company = Input::get('company');
            $workex->startdate = Input::get('startdate');
            $workex->enddate = Input::get('enddate');
            $workex->otherinfo = Input::get('otherinfo');
            $workex->save();
            $insert_id = $workex->id;
            $data["message"] = 'Work ex Succefully added';
            $data["title"] = Input::get('title');
            $data["id"] = $insert_id;
            return json_encode($data);
        } else {
            return 'Please fill all the inputs';
        }
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
            $education = Education::where('cv_code',$id)->first();
            $education->cv_id = Auth::id();
            $education->coursename = Input::get('coursename');
            $education->institutename = Input::get('institutename');
            $education->startdate = Input::get('startdate');
            $education->enddate = Input::get('enddate');
            $education->otherinfo = Input::get('otherinfo');
            $education->save();
            $insert_id = $education->id;
            $data["message"] = 'education details Succefully added';
            $data["title"] = Input::get('title');
            $data["id"] = $insert_id;
            $data["coursename"] = Input::get('coursename');
            return json_encode($data);
        } else {
            return 'Please fill all the inputs';
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
            $section->user_id = Auth::id();
            $section->section_name = Input::get('section_name');
            $section->type = 0;
            $section->priority = DB::table('sections')->where('user_id',Auth::id())->max('priority') + 1;
            $section->save();
            $insert_id = $section->id;

            $data["message"] = 'Section is Succefully added';
            $data["section_name"] = Input::get('section_name');
            $data["id"] = $insert_id;
            return json_encode($data);
        } else {
            return 'Please fill all the inputs';
        }
    }
}
    