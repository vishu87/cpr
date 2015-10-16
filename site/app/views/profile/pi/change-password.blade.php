@include('profile.adv')
<div class="portlet light">
  <div class="portlet-body form">
      @if(Session::has('failure'))
        <div class="alert alert-danger">{{Session::get('failure')}}</div>
      @endif
      @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      {{Form::open(array("url"=>"/profile/change-password","method" => "PUT","class"=>"form-horizontal","role"=>"form"))}}                    
      <div class="form-body">
        <div class="form-group">                 
          {{ Form::label('', 'Old Password', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-9">                                     
            {{Form::password('old_password',$user->old_password,array("class"=>"form-control"))}}
            <br><span class="error">{{$errors->first('old_password')}}</span> 
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('', 'New Password', array('class' => 'col-md-3 control-label')) }}                   
          <div class="col-md-9">
            {{Form::password('new_password',$user->new_password,array("class"=>"form-control", "placeholder"=>"Min 8 Characters"))}}    
            <br><span class="error">{{$errors->first('new_password')}}</span>                             
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('', 'Retype New Password', array('class' => 'col-md-3 control-label')) }}                    
          <div class="col-md-9">
            {{Form::password('re_new_password',$user->re_new_password,array("class"=>"form-control", "placeholder"=>""))}}
            <br><span class="error">{{$errors->first('re_new_password')}}</span>
          </div>
        </div>
       <div class="form-actions right1">
        <button type="submit" class="btn green">Change Password</button>
      </div>
      {{Form::close()}}
  </div>            
</div>