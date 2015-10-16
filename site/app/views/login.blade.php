
    <!-- BEGIN DIV -->
    <div class="container-fluid back-div">
      <div class="container">
       <div class="row">
        <div class="col-md-4"></div>
       
        <div class="col-md-4">
          <div style="background:rgba(0,0,0,0.8); padding:20px; margin:80px 0;">
              @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
              @endif
              {{Form::open(array("url"=>"/login", "method" => "POST","class"=>"login-form"))}}
              <h3 class="form-title" style="color:#fff;">Login</h3>
              <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>
                Enter any email and password. </span>
              </div>
              <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Email</label>
                {{Form::text('username','',array("class"=>"form-control form-control-solid placeholder-no-fix", "autocomplete"=>"off","placeholder"=>"Email","id"=>"Username"))}}
                <span class="error">{{$errors->first('username')}}</span>
                <!-- <input class=" type="text" autocomplete="off" placeholder="Username" name="username"/> -->
              </div>
              <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                {{Form::password('password',array("class"=>"form-control form-control-solid placeholder-no-fix","autocomplete"=>"off","placeholder"=>"Password","id"=>"password"))}}
                <span class="error">{{$errors->first('password')}}</span>

                <!--<input class="" type="password"   name="password"/>-->
              </div>
              <div class="form-actions">
                <a href="{{url('/forgot-password')}}" id="forget-password" class="forget-password" style="color:#eee;">* Forgot Password?</a><br>                                               
              </div>
              <div class="row"> 
                    <div class="col-md-8 col-sm-6 col-xs-12 hidden-xs">         
                  <div class="login-options" style="margin-top:8px;">               
                    <a href="{{URL::to('/fblogin')}}">{{HTML::image('assets/img/fb3.png','Facebook')}}</a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 xs-align-center" style="margin-top:7px;">
                  {{Form::submit('Login',array("class"=>"btn btn-success uppercase join-button"))}}    
                </div>
                <div class="col-xs-12 hidden-lg hidden-md hidden-sm" style="text-align:center; margin:10px 0">         
                  <div class="login-options" style="margin-top:8px;">               
                    <a href="{{URL::to('/fblogin')}}">{{HTML::image('assets/img/fb3.png','Facebook')}}</a>
                  </div>
              </div>
              </div>
              <div class=""  style="margin-top:18px; text-align:center">
                <p>
                  <a href="{{url('/')}}" id="register-btn"  style="color:#fff"><h4>Not a User? Sign Up now!!</h4></a>
                </p>
              </div>
              {{Form::close()}}  
            
            </div>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>    
     <!-- END DIV -->