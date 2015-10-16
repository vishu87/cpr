<div class="modal-body row">
	<form id="language_form" action="" method="POST">			
		<div class="form-group col-md-6">
		   {{ Form::label('', 'Select Language') }}<span class="required">*</span>							                       
	       {{Form::select('language_id',$langs,'',array("class"=>"form-control"))}}
	       <span>{{$errors->first('language_id')}}</span>	
		</div>
	    <div class="form-group col-md-6">
			{{ Form::label('', 'Other Language') }}							                       
	        {{Form::text('language_name','',array("class"=>"form-control", "placeholder"=>"Enter Language", "readonly" => "readonly"))}}	
	       <span>{{$errors->first('language_name')}}</span>	
		</div>
	    <div class="form-group col-md-6">
		   {{ Form::label('', 'Ability') }}<span class="required">*</span>						                       
	       {{Form::select('ability',$abilities,'',array("class"=>"form-control"))}}
	       <span>{{$errors->first('ability')}}</span>	
	    </div>
	     <div class="form-group col-md-6">
			{{ Form::label('', 'Level') }}<span class="required">*</span>                 
	       {{Form::select('level',$levels,'',array("class"=>"form-control"))}}
	       <span>{{$errors->first('level')}}</span>	
		</div>			
	</form>
</div>
 <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" onclick="language_submit()" id="language_submit" class="btn btn-primary">Add</button>
 </div>
