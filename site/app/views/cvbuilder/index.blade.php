<div class="container-fluid" style="text-align:center; background:#839742; color:#FFF;  padding:50px 0;">
  <div class="container quotes">
    <div class="visible">
      <p class="quote">"The master has failed more times than the beginner has even tried."</p>
      <p class="author">Anonymous</p>
    </div>
    <div>
      <p class="quote">"Logic will get you from A to B, Imagination will take you anywhere"</p>
      <p class="author">Albert Einstein</p>
    </div>
    <div>
      <p class="quote">"Strong minds discuss ideas, average minds discuss events, weak minds discuss people"</p>
      <p class="author">Socrates</p>
    </div>
     <div>
      <p class="quote">"If you think you can, you can. And if you think you can’t, you’re right."</p>
      <p class="author">Henry Ford</p>
    </div>
     <div>
      <p class="quote">"Any fool can know. The point is to understand."</p>
      <p class="author">Albert Einstein</p>
    </div>
     <div>
      <p class="quote">"People will forget what you said, People will forget what you did, but people will never forget how you made them feel."</p>
      <p class="author">Maya Angelou</p>
    </div>
     <div>
      <p class="quote">"The secret of change is to focus all your energy not on fighting the old, but on building the new."</p>
      <p class="author">Socrates</p>
    </div>
     <div>
      <p class="quote">"Build your own dream or someone else will hire you to build theirs."</p>
      <p class="author">Anonymous</p>
    </div> <div>
      <p class="quote">"Failure  is not the opposite of success. It is part of success"</p>
      <p class="author">Anonymous</p>
    </div>
     <div>
      <p class="quote">"No one can blame you if you’re born broke, but if you die broke, then thats your fault."</p>
      <p class="author">Skizzy Mars</p>
    </div>
     <div>
      <p class="quote">"You have to be ODD to be number ONE."</p>
      <p class="author">Anonymous</p>
    </div>
     <div>
      <p class="quote">"Don’t be afraid of being different, Be afraid of being the same as everyone else."</p>
      <p class="author">Anonymous</p>
    </div>
     <div>
      <p class="quote">"When ShI*T happens, turn it into fertiliser."</p>
      <p class="author">Kute Blackson</p>
    </div>
     <div>
      <p class="quote">"Don’t live the same year 75 times and call it a Life"</p>
      <p class="author">Robin Sharma</p>
    </div>
     <div>
      <p class="quote">"Inspiration exists, but it has to find you working."</p>
      <p class="author">Pablo Picasso</p>
    </div>
     <div>
      <p class="quote">"It’s the reputation of affirmations that leads to belief. And once that belief becomes a deep conviction, things begin to happen."</p>
      <p class="author">Muhammed Ali</p>
    </div>
     <div>
      <p class="quote">"If you want something you’ve never had, you have to do something you’ve never done"</p>
      <p class="author">Anonymous</p>
    </div>
     <div>
      <p class="quote">"A thought which does not result in an action is nothing much, and an action which does not proceed from a thought is nothing  at all."</p>
      <p class="author">George Bernanos</p>
    </div>
     <div>
      <p class="quote">"The best way to predict the future is to create it"</p>
      <p class="author">Peter Drucker</p>
    </div>
     <div>
      <p class="quote">"The only place where success comes before work is in the dictionary."</p>
      <p class="author">Vidal Sassoon</p>
    </div>
    <div>
      <p class="quote">"In the real world, the smartest people are the people who make mistakes and learn. In school, the smartest people don't make any mistakes"</p>
      <p class="author">Robert Kiyosaki</p>
    </div>
    <div>
      <p class="quote">"A leader is best when people barely know he exists. When his work is done, his aim fulfilled, they will say: we did it ourselves."</p>
      <p class="author">Lau Tzu</p>
    </div>
    <div>
      <p class="quote">"A person who never made a mistake never tried anything new."</p>
      <p class="author">Albert Einstein</p>
    </div>
    <div>
      <p class="quote">"There are 2 rules for success…1. Never tell everything you know."</p>
      <p class="author">Roger H.Lincon</p>
    </div>
    <div>
      <p class="quote">"Entrepreneurship is living a few years of your life like most people won’t, so that you can spend the rest of your life like most people can't."</p>
      <p class="author">Anonymous</p>
    </div>
  </div>
</div>

<div class="page-container">
  <!-- BEGIN PAGE CONTENT -->
  <div class="page-content" style="padding:0; background:#fff">
    <div class="container">   
      <!-- BEGIN PAGE CONTENT INNER -->
      <div class="row">
        <div class="col-md-12" style="padding:0; margin-top:30px">
          <!-- BEGIN TAB PORTLET-->
          <div class="portlet">
            <div class="portlet-body">
              <div class=" portlet-tabs">
                <ul class="nav nav-tabs corper-life-tab">
                  <li class="active col-md-6 col-sm-12 align-center">
                    <a href="#portlet_tab1" data-toggle="tab">
                      CV Builder 
                    </a>
                  </li>
                  <li class="col-md-6 col-sm-12 align-center">
                    <a href="#portlet_tab2" data-toggle="tab">
                      Job Seeker Resources </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="portlet_tab1">
                     <div class="row">
                      @if(!Auth::check())
                      <div class="col-md-2"></div>

                      <div class="col-md-4">
                        <div style="background:rgba(0,0,0,0.8); padding:20px; margin:55px 0 30px 0;">
                          {{Form::open(array("url"=>"/", "method" => "GET","class"=>"login-form"))}}
                          <h3 class="form-title" style="color:#fff;">Create New CV</h3>
                          <h5 class="form-title" style="color:#fff; font-size:20px;">Are you a corper?</h5>
                          <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button>
                            <span>
                              Enter any username and password. </span>
                            </div>
                            <div class="col-md-12" style="margin:0px 0px 15px 0px; padding: 0px;">
                              {{Form::submit('Sign Up For New Account',array("class"=>"btn btn-success uppercase","style"=>"background-color:#ABC351;"))}}    
                            </div>
                            {{Form::close()}} 

                            {{Form::open(array("url"=>"cvbuilder/createnew","method"=>"POST"))}} 
                            <h5 class="form-title" style="color:#fff; margin-top:5px;">Or Continue Without Registering</h5>
                            <div class="col-md-12" style="padding-left:0px;">
                             <div class="col-md-9" style="padding-left:0px;">
                              <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">Username</label>
                                {{Form::text('email','',array("class"=>"form-control form-control-solid placeholder-no-fix", "autocomplete"=>"off","placeholder"=>"Enter E-mail id"))}}
                                <span class="error">{{$errors->first('email')}}</span>{{Form::hidden('cv_name','CV Name',array())}}
                              </div>
                            </div>
                            <div class="col-md-3" style="padding-left:0px;">
                              {{Form::submit('Proceed',array("class"=>"btn btn-success uppercase","style"=>"background-color:#ABC351;"))}}  
                            </div>
                          </div>     
                          <label class="rememberme check" style="color:#fff; margin:5px;">
                            {{Form::close()}}           
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div style="background:rgba(0,0,0,0.8); padding:20px; margin:55px 0 30px 0;">
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            {{Form::open(array("url"=>"/login", "method" => "POST","class"=>"login-form"))}}
                            <h3 class="form-title" style="color:#fff;">Update Your CV</h3>
                            <h5 class="form-title" style="color:#fff; font-size:20px;">Login</h5>         
                            <div class="form-group">
                              <label class="control-label visible-ie8 visible-ie9">Username</label>
                              {{Form::text('username','',array("class"=>"form-control form-control-solid placeholder-no-fix", "autocomplete"=>"off","placeholder"=>"Username","id"=>"Username"))}}
                              <span>{{$errors->first('username')}}</span>
                            </div>
                            <div class="form-group">
                              <label class="control-label visible-ie8 visible-ie9">Password</label>
                              {{Form::password('password',array("class"=>"form-control form-control-solid placeholder-no-fix","autocomplete"=>"off","placeholder"=>"Password","id"=>"password"))}}
                              <span>{{$errors->first('password')}}</span>
                            </div>
                            {{Form::submit('Login',array("class"=>"btn btn-success uppercase","style"=>"background-color:#ABC351; float:right"))}} 
                            {{Form::close()}}      
                            <div class="row">
                              {{Form::open(array("url"=>"/cvbuilder/editcv", "method" => "POST","class"=>"login-form"))}}

                              <div class="col-md-12">
                                <span style="color:#fff;">Or Use CV-Retrieval Code</span>
                              </div>              
                              <div class="col-md-8" style="margin-top: 8px;">         
                                <div class="form-group">
                                  {{Form::text('cvcode','',array("class"=>"form-control form-control-solid placeholder-no-fix", "autocomplete"=>"off","placeholder"=>"Enter Retrieval Code"))}}
                                </div>
                              </div>
                              <div class="col-md-4" style="margin-top:7px;">                
                                {{Form::submit('Update',array("class"=>"btn btn-success uppercase","style"=>"background-color:#ABC351; float:right"))}}    
                              </div>
                              {{Form::close()}}
                            </div>             

                          </div>
                        </div>
                        <div class="col-md-2"></div>
                        @else
                        <div class="col-md-4"></div>

                        <div class="col-md-4">
                          <div style="background:rgba(0,0,0,0.8); padding:20px; margin:55px 0 30px 0;">
                            @if(Session::has('fail'))
                            <span style="background:#f00; color:white">{{Session::get('fail')}}</span>
                            @endif

                            <h3 class="form-title" style="color:#fff;">Create New CV</h3>
                            <h5 class="form-title" style="color:#fff; font-size:20px;">Hey! {{Auth::user()->firstname}}</h5>
                            <div class="col-md-12" style="margin:0px 0px 15px 0px; padding: 0px;">
                              <a href="{{URL::to('/cv-page')}}" class="btn btn-success uppercase" style="background-color:#ABC351;">Your Cv List</a>
                            </div>


                            {{Form::open(array("url"=>"cvbuilder/createnew","method"=>"POST"))}} 
                            <h5 class="form-title" style="color:#fff; margin-top:5px;">Or Create a New CV</h5>
                            <div class="col-md-12" style="padding-left:0px;">
                             <div class="col-md-9" style="padding-left:0px;">
                              <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9">CV Name</label>
                                {{Form::hidden('email',Auth::user()->username,array("class"=>"form-control form-control-solid placeholder-no-fix"))}}
                                {{Form::text('cv_name','',array("class"=>"form-control form-control-solid placeholder-no-fix", "autocomplete"=>"off","placeholder"=>"Cv Name"))}}
                                <span>{{$errors->first('cv_name')}}</span>
                              </div>
                            </div>
                            <div class="col-md-3" style="padding-left:0px;">
                              {{Form::submit('Create',array("class"=>"btn btn-success uppercase","style"=>"background-color:#ABC351;"))}}  
                            </div>
                          </div>     
                          <label class="rememberme check" style="color:#fff; margin:5px;">
                            {{Form::close()}}           
                          </div>
                        </div>
                        <div class="col-md-4"></div>
                        @endif
                      </div>
                    </div>
                    <div class="tab-pane" id="portlet_tab2">
                      <div class="row row-padding">
                        <div class="col-md-4">
                          <div class="jsr-section background-1">
                            <h3>Getting Ready</h3>
                            <h4 class="job-seeker"><a href="{{url('/about-cover-letter')}}">About Cover Letter</a></h4>
                            <h4 class="job-seeker"><a href="{{url('/cv-writing-tips')}}">CV writing tips</a></h4>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="jsr-section background-2">
                            <h3>Applying</h3>
                            <h4 class="job-seeker"><a href="{{url('/cv-delivery')}}">CV Delivery</a></h4>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="jsr-section background-3">
                            <h3>The Interview</h3>
                            <h4 class="job-seeker"><a href="{{url('/interview-questions')}}">Sample Interview Questions to Expect </a></h4>
                            <h4><a href="{{url('/questions-you-can-ask')}}">Questions you can ask interviewers</a></h4> 
                            <h4><a href="{{url('/interview-guide')}}">Interview Guide</a></h4> 
                            <h4><a href="{{url('/assets/Resources/Interview-Prep-Checklist.pdf')}}" target="_blank">Interview Checklist (Download PDF file)</a></h4>                          
                          </div>
                        </div>
                      </div>       
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END TAB PORTLET-->         
          </div>
        </div>
        <!-- END PAGE CONTENT INNER -->
      </div>
    </div>
    <!-- END PAGE CONTENT -->
  </div>

