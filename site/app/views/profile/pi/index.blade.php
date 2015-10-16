@include('profile.adv')
<div class="portlet light">
  <div class="portlet-body form">
      {{Form::open(array("url"=>"/profile/savepi","method" => "PUT","class"=>"form-horizontal","role"=>"form"))}}                    
      <div class="form-body">
        <div class="form-group">                 
          {{ Form::label('', 'First Name', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-9">                                     
            {{Form::text('firstname',$user->firstname,array("class"=>"form-control", "placeholder"=>"Enter First Name"))}}
            <span>{{$errors->first('firstname','Please provide your first name')}}</span> 
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('', 'Last Name', array('class' => 'col-md-3 control-label')) }}                   
          <div class="col-md-9">
            {{Form::text('lastname',$user->lastname,array("class"=>"form-control", "placeholder"=>"Enter Last Name"))}}                                 
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('', 'Profile Name', array('class' => 'col-md-3 control-label')) }}                    
          <div class="col-md-9">
            {{Form::text('profilename',$user->profilename,array("class"=>"form-control", "placeholder"=>"Enter Profile Name"))}}
            <span>{{$errors->first('profilename')}}</span>
          </div>
        </div>
          <div class="form-group">
          {{ Form::label('', 'Sex', array('class' => 'col-md-3 control-label')) }}                 
          <div class="col-md-9">
            {{Form::select('sex',array("0"=>"Select","1"=>"Male","2"=>"Female"),$user->sex,array("class"=>"form-control"))}}
            <span>{{$errors->first('sex')}}</span>
          </div>
        </div>
         <div class="form-group">
          {{ Form::label('', 'Serving State', array('class' => 'col-md-3 control-label')) }}                   
          <div class="col-md-9">
            {{Form::select('serv_state',$states,$user->serv_state,array("class"=>"form-control"))}}
          </div>
        </div>
         <div class="form-group">
          {{ Form::label('', 'Origin State', array('class' => 'col-md-3 control-label')) }}                   
          <div class="col-md-9">
            {{Form::select('origin_state',$states,$user->origin_state,array("class"=>"form-control"))}}
          </div>
        </div>                  
        <div class="form-group">
          {{ Form::label('', 'State Code', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-9">
            {{Form::text('state_code',$user->state_code,array("class"=>"form-control", "placeholder"=>"Enter State Code"))}}                              
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('', 'LG', array('class' => 'col-md-3 control-label')) }}                   
          <div class="col-md-9">
            {{Form::text('lg',$user->lg,array("class"=>"form-control", "placeholder"=>"Enter LG"))}}                                  
          </div>
        </div>
      </div>
       <div class="form-actions right1">
        <button type="submit" class="btn green">Submit</button>
      </div>
      {{Form::close()}}
  </div>            
</div>