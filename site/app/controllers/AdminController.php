<?php
class AdminController extends BaseController {
    protected $layout = 'main';
    public function getUsers(){
        $this->layout->title = "User List";
        $this->layout->description = "";
        $this->layout->keywords = "";
        $users = User::orderBy('id','DESC')->get();
        $this->layout->main = View::make('admin.users',["users"=>$users,"main_tab"=>1,"sub_tab"=>2,"cat"=>"corper"]);
    }
    public function getCorpers(){
    	$this->layout->title = "Corper Stats";
        $this->layout->description = "";
        $this->layout->keywords = "";
        $alluser=User::get();
        $user=User::where('password',"-1")->get();
        $fbuser=count($user);

        $male_user=User::where('sex',"1")->get();
        $muser=count($male_user);

        $female_user=User::where('sex',"2")->get();
        $fuser=count($female_user);

        $undefined=count($alluser) - $fuser - $muser;
        
        $via_registration=count($alluser);
        

        $user_via_registration=$via_registration-$fbuser;

        $user_groups = User::select(DB::raw('count(id) as count, serv_year, batch'))->groupBy("serv_year")->groupBy("batch")->get();

        $this->layout->main = View::make('admin.corpersdata',['undefined'=>$undefined,'female'=>$fuser,'male'=>$muser,"main_tab"=>1,"sub_tab"=>1,"reg_user"=>$fbuser,"corper_registered_user"=>$user_via_registration,"cat"=>"corper", "user_groups" => $user_groups ]);
    }
    public function getDuplicateUsers(){
        $this->layout->title = "Duplicate Users";
        $this->layout->description = "";
        $this->layout->keywords = "";
        $duplicate=DB::table('users')->groupBy('username')->havingRaw('count(*) > 1')->get();
        $count=count($duplicate);
        $this->layout->main = View::make('admin.duplicateuser',["main_tab"=>1,"sub_tab"=>3,"count"=>$count,"cat"=>"corper"]);
    }
    public function getForums(){
        $this->layout->title = "Forums";
        $this->layout->description = "";
        $this->layout->keywords = "";
        $topics=DB::table('topics')->get();
        $topics_count=count($topics);
        $categories=DB::table('categories')->get();
        $categories_count=count($categories);
        $category_topics = Topic::select(DB::raw('count("*") as count, category_id, title,categories.category_name'))->groupBy("category_name")->groupBy("title")->join('categories','topics.category_id','=','categories.id')->get();
        $this->layout->main = View::make('admin.forums',['cat_topic'=>$category_topics,'count_cat'=>$categories_count,'count'=>$topics_count,"main_tab"=>2,"sub_tab"=>1,"cat"=>"forum"]);

    }
    public function getTopics(){
        $this->layout->title = "Forums Categories";
        $this->layout->description = "";
        $this->layout->keywords = "";
        $topics=DB::table('topics')->Select('topics.*','categories.category_name')->join('categories','topics.category_id','=','categories.id')->get();
        $this->layout->main = View::make('admin.forumscategories',['topics'=>$topics,"main_tab"=>2,"sub_tab"=>2,"cat"=>"forum"]);
    }
    public function DeleteTopics($id){
        $del = DB::table('topics')->where('id',$id)->delete();
        return Redirect::Back()->with('success','Topic Deleted');
    }
    public function knowledge_bank(){
        $this->layout->title = "Knowledge Bank";
        $this->layout->description = "";
        $this->layout->keywords = "";
        $total_que=DB::table('member_qus')->get();
        $count=count($total_que);
        $this->layout->main = View::make('admin.knowledgebank',['count'=>$count,"main_tab"=>3,"sub_tab"=>1,"cat"=>"k_bank"]);
    }

    public function cv_data(){
        $this->layout->title = "CV Page";
        $this->layout->description = "";
        $this->layout->keywords = "";
        $cvs=DB::table('cvs')->get();
        $total=count($cvs);
        $cvs_nonmember=DB::table('cvs')->where('user_id','=',0)->get();
        $nonmember=count($cvs_nonmember);
        $member=$total-$nonmember;
        $this->layout->main = View::make('admin.cvs',['count'=>$total,'member'=>$member,'nonmember'=>$nonmember,"main_tab"=>4,"sub_tab"=>1,"cat"=>"cvs"]);
    }
  
    

}