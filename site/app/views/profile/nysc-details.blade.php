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
              {{Form::open(array("url"=>"/profile/nysc-details", "method" => "PUT","class"=>"login-form"))}}
              <h3 class="form-title" style="color:#fff;">NYSC Details</h3>
              <p style="color:#CCC">Please fill following details to continue</p>
              <div class="form-group" style="margin-bottom:10px;">
                {{Form::select('service_year',$service_year,'',array("class"=>"form-control"))}}
                <span class="error">{{$errors->first('serv_year')}}</span>
              </div>
              <br>
              <div class="form-group">
                {{Form::select('batch',array(""=>"Batch","A"=>"A","B"=>"B","C"=>"C"),'',array("class"=>"form-control"))}}
                <span class="error">{{$errors->first('batch')}}</span>
              </div>
              <div class="row">
                <div class="col-md-4 pull-right align-center" style="margin-top:7px;">
                  {{Form::submit('Submit',array("class"=>"btn btn-success uppercase join-button"))}}    
                </div>
              </div>
              {{Form::close()}}
            </div>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>    
     <!-- END DIV -->