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
              @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
              @endif
              {{Form::open(array("url"=>"/forgot-password", "method" => "POST","class"=>"login-form"))}}
              <h3 class="form-title" style="color:#fff;">Forgot Password</h3>
              <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Your Email</label>
                {{Form::text('email','',array("class"=>"form-control form-control-solid placeholder-no-fix", "autocomplete"=>"off","placeholder"=>"Your Email","id"=>"email"))}}
                <span class="error">{{$errors->first('email')}}</span>
              </div>
              <div class="row"> 

                <div class="col-md-12 xs-align-center" style="margin-top:7px;">
                  {{Form::submit('Reset Password',array("class"=>"btn btn-success uppercase join-button"))}}    
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