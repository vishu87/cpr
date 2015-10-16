<?php

class ForumController extends BaseController {
   protected $layout = 'profile.layout';
   
     public function getForum(){
        $this->layout->title = 'NYSC Corpers Forum';
        $this->layout->description = 'Meet and discuss with other corpers in the Forum. Help each other get the best out of the NYSC experience.';
        $this->layout->keywords = 'Forum, NYSC experience, Corpers';
        $this->layout->top_active = 4;
        $category = DB::table('categories')->lists('category_name','id');
        $category_get = DB::table('categories')->select('category_name','id')->get();       
        $topics = DB::table('topics')->join('categories','topics.category_id','=','categories.id')->join('users','topics.user_id','=','users.id')->select('topics.*','categories.category_name','users.firstname','users.profile_pic')->orderBy('topics.id','desc')->paginate(12);
        $this->layout->main = View::make("profile.pi.forum",array("categories"=>$category,"topics"=>$topics,"category_get"=>$category_get));
    }
     public function postSearch(){
        $this->layout->title = 'NYSC Corpers Forum | Search '.Input::get('topic_q');
        $this->layout->description = 'Meet and discuss with other corpers in the Forum. Help each other get the best out of the NYSC experience.';
        $this->layout->keywords = 'Forum, NYSC experience, Corpers';
        $this->layout->top_active = 4;
        $category = DB::table('categories')->lists('category_name','id');
        $category_get = DB::table('categories')->select('category_name','id')->get();       
        $topics = DB::table('topics')->join('categories','topics.category_id','=','categories.id')->join('users','topics.user_id','=','users.id')->select('topics.*','categories.category_name','users.firstname','users.profile_pic')->where('topics.title', 'LIKE' , '%'.Input::get('topic_q').'%')->orderBy('topics.id','desc')->paginate(12);
        $this->layout->main = View::make("profile.pi.forum",array("categories"=>$category,"topics"=>$topics,"category_get"=>$category_get,"search_for"=>Input::get('topic_q')));
    }

      public function getForumpage($id){
        $topic = DB::table('topics')->join('categories','topics.category_id','=','categories.id')->join('users','topics.user_id','=','users.id')->select('topics.*','categories.category_name','users.firstname','users.profile_pic')->where('topics.id',$id)->first();

        $this->layout->title = 'NYSC Corpers Forum | '.$topic->title;
        $this->layout->description = 'Meet and discuss with other corpers in the Forum. Help each other get the best out of the NYSC experience.';
        $this->layout->keywords = 'Forum, NYSC experience, Corpers';
        $this->layout->top_active = 4;
        $category = DB::table('categories')->lists('category_name','id');

        $category_get = DB::table('categories')->select('category_name','id')->get();
        $replies = DB::table('replies')->join('users','replies.user_id','=','users.id')->where('replies.topic_id',$id)->select('replies.reply','replies.created_at','users.firstname','users.profile_pic')->get();

        $this->layout->main = View::make("profile.pi.forum-page",array("categories"=>$category,"topic"=>$topic,"replies"=>$replies,"category_get"=>$category_get));
    }

    public function getcontentpage(){
        $this->layout->title = 'NYSC Corpers Forum | Topics';
        $this->layout->description = 'Meet and discuss with other corpers in the Forum. Help each other get the best out of the NYSC experience.';
        $this->layout->keywords = 'Forum, NYSC experience, Corpers';
        $this->layout->top_active = 8;
        $category = DB::table('categories')->lists('category_name','id');           
        $topics = DB::table('topics')->join('categories','topics.category_id','=','categories.id')->join('users','topics.user_id','=','users.id')->select('topics.*','categories.category_name','users.*')->orderBy('topics.id','desc')->paginate(12);
        $this->layout->main = View::make("profile.pi.content-page",array("categories"=>$category,"topics"=>$topics));
    } 
     
     public function getCategory($id){
        $category = DB::table('categories')->lists('category_name','id');
        $this->layout->title = 'NYSC Corpers Forum | '.$category[$id];
        $this->layout->description = 'Meet and discuss with other corpers in the Forum. Help each other get the best out of the NYSC experience.';
        $this->layout->keywords = 'Forum, NYSC experience, Corpers';
        $this->layout->top_active = 4;
        $topics = DB::table('topics')->join('categories','topics.category_id','=','categories.id')->join('users','topics.user_id','=','users.id')->select('topics.*','categories.category_name','users.firstname','users.profile_pic')->where('topics.category_id',$id)->orderBy('topics.id','desc')->paginate(12);
        $category_get = DB::table('categories')->select('category_name','id')->get(); 

        $this->layout->main = View::make("profile.pi.forum",array("categories"=>$category,"topics"=>$topics,"category_get"=>$category_get));
    }
      public function postSaveTopic(){
        $cre = [
            'category_id' => Input::get('category'),
            'title' => Input::get('title'),         
            'content' => Input::get('content')            
        ];
        $rules = [
            'category_id' => 'required',
            'title' => 'required',   
            'content' => 'required'   
        ];
        $validator = Validator::make($cre,$rules);

        if($validator->passes()){
            $topic = new Topic;
            $topic->user_id =Auth::id(); 
            $topic->category_id = Input::get('category');
            $topic->title =  Input::get('title');
            $topic->content =  Input::get('content');
            $topic->save();
            return Redirect::to('/forum/'.$topic->topic_id)->with('success','Topic is successfully added');
         }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
    public function postSaveReply($topic_id){
        $cre = [
            'reply' => Input::get('reply')            
        ];
        $rules = [
            'reply' => 'required'   
        ];
        $validator = Validator::make($cre,$rules);

        if($validator->passes()){
            $blog = new Blog;
            $blog->user_id =Auth::id(); 
            $blog->topic_id = $topic_id ;
            $blog->reply = Input::get('reply');
            $blog->save();
            return Redirect::Back()->with('success','gfhfhfh');
                      
         }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
}    