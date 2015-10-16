 <div class="container-fluid back-div">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-md-offset-7">
        <div style="background:rgba(0,0,0,0.7); padding:20px; margin:30px 0 30px 0;">
          @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
          @if(!Auth::check())
          {{Form::open(array("url"=>"/signup", "method" => "POST","class"=>"login-form"))}}
          <h3 class="form-title" style="color:#fff;">Sign Up (Corpers Only)</h3>
          <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>
              Enter any username and password. </span>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label visible-ie8 visible-ie9">Firstname</label>
                  {{Form::text('firstname','',array("class"=>"form-control form-control-solid placeholder-no-fix", "autocomplete"=>"off","placeholder"=>"First name","id"=>"Firstname"))}}
                  <span class="error">{{$errors->first('firstname')}}</span>
                </div> 
              </div> 
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label visible-ie8 visible-ie9">Lastname</label>
                  {{Form::text('lastname','',array("class"=>"form-control form-control-solid placeholder-no-fix", "autocomplete"=>"off","placeholder"=>"Last name","id"=>"Lastname"))}}
                  <span class="error">{{$errors->first('lastname')}}</span>
                </div> 
              </div> 
            </div>             
            <div class="form-group">
              {{Form::text('email','',array("class"=>"form-control form-control-solid placeholder-no-fix","autocomplete"=>"off","placeholder"=>"E-mail","id"=>"email"))}}
              <span class="error">{{$errors->first('email')}}</span>
            </div>
            <div class="form-group" style="margin-bottom:15px;">
              <label class="control-label visible-ie8 visible-ie9">Password</label>
              {{Form::password('password', array("class"=>"form-control form-control-solid placeholder-no-fix","autocomplete"=>"off","placeholder"=>"New Password","id"=>"password"))}}
              <span class="error">{{$errors->first('password')}}</span>
            </div>
            <div class="row">
              <div class="col-md-4" style="margin-bottom:10px;">
                {{Form::select('gender',array(""=>"Gender","1"=>"Male","2"=>"Female"),'',array("class"=>"form-control"))}}
                <span class="error">{{$errors->first('gender')}}</span>

              </div>
              <div class="col-md-4" style="margin-bottom:10px;">
                {{Form::select('serv_year',$service_year,'',array("class"=>"form-control"))}}
                <span class="error">{{$errors->first('serv_year')}}</span>

              </div>
              <div class="col-md-4">
                {{Form::select('batch',array(""=>"Batch","A"=>"A","B"=>"B","C"=>"C"),'',array("class"=>"form-control"))}}
                <span class="error">{{$errors->first('batch')}}</span>
              </div>
            </div>
            <div class="form-actions" style="padding-right:0px; margin-bottom:10px;">
              <a href="{{url('/forgot-password')}}" id="forget-password" class="forget-password" style="color:#eee;">* Forgot Password?</a><br>                                               
            </div>
            <div class="row"> 
              <div class="col-md-8 col-sm-6 col-xs-12 hidden-xs">         
                <div class="login-options" style="margin-top:8px;">               
                  <a href="{{URL::to('/fblogin')}}">{{HTML::image('assets/img/fb3.png','Facebook')}}</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 xs-align-center" style="margin-top:7px;">
                {{Form::submit('Join Now',array("class"=>"btn btn-success uppercase join-button"))}}    
              </div>
              <div class="col-xs-12 hidden-lg hidden-md hidden-sm" style="text-align:center; margin:10px 0">         
                <div class="login-options" style="margin-top:8px;">               
                  <a href="{{URL::to('/fblogin')}}">{{HTML::image('assets/img/fb3.png','Facebook')}}</a>
                </div>
              </div>
            </div>
            <label class="rememberme check" style="color:#fff; margin:5px;">
             {{Form::checkbox('agree')}} I dont want to subscribe </label>
             {{Form::close()}}
             @else
              <h2 style="color:#FFF; text-align:center; line-height:2">
                Hey! {{Auth::user()->firstname}}
              </h2>
              <h1 style="color:#FFF; text-align:center; line-height:2">Welcome to CorperLife<sup>TM</sup></h1>
             @endif           
           </div>
         </div>
       </div>
     </div>
   </div>

   <!-- END DIV -->

   <div class="main home-service">
    <div class="container" style="padding:10px 0 20px 0;">
      <!-- BEGIN SERVICE BOX -->   
      <div class="row service-box">
        <div class="col-md-4 col-sm-4">
          <div class="service-box-heading">
            <em><i class="fa fa-location-arrow blue"></i></em>
            <a href="{{url('/profile')}}"><span style="color:#B6C876">The</span><span>Dashboard</span></a>
          </div> 
          <p>The section of the CorperLife<sup>TM</sup> site is dedicated to all currently serving Corpers. We are proud to say we have the deepest and best organized cache of information and tools to make the NYSC Journey a breeze. Corper'WE'lcome!</p>
          <div style="text-align:center">
            @if(Auth::check())
            <a href="{{url('/profile')}}" class="btn green">Click Here</a>
            @else
            <a href="{{url('/login')}}" class="btn green">Click Here</a>
            @endif
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-box-heading">
            <em><i class="fa fa-check red"></i></em>
            <a href="{{url('/whycorperlife')}}"><span  style="color:#B6C876">Why</span><span>Corperlife</span></a>
          </div>
          <p>CorperLife<sup>TM</sup> is custom built to aid corpers and job seekers through "the best time of their lives". Find out what you can expect from each area of the site and what makes it awesome.</p>
          <div style="text-align:center"><a class="btn green" href="{{url('/whycorperlife')}}">Click Here</a>  </div>
        </div>     
        <div class="col-md-4 col-sm-4">
          <div class="service-box-heading">
            <em><i class="fa fa-compress green"></i></em>
            <a href="{{url('/cvbuilder')}}"><span  style="color:#B6C876">The</span><span>Career Centre</span></a>
          </div>
          <p>The section of the CorperLife<sup>TM</sup> site is filled with free tools and resources for all people who are in the process of job hunting. Make this your first stop on the path to having a great career.</p>
          <div style="text-align:center"><a class="btn green" href="{{url('/cvbuilder')}}">Click Here</a>  </div>
        </div>
      </div>
      <!-- END SERVICE BOX -->
    </div>
  </div>