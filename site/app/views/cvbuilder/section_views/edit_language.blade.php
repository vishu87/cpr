<div class="modal-body row">
	<form id="editlanguage_form" action="" method="POST">			
		<div class="form-group col-md-6">
		   {{ Form::label('', 'Select Language') }}<span class="required">*</span>			                       
	       {{Form::select('language_id',$langs,$lang->language_id,array("class"=>"form-control"))}}
	       <span>{{$errors->first('language_id')}}</span>	
		</div>
	    <div class="form-group col-md-6">
		  {{ Form::label('', 'Language') }}<span class="required">*</span>       
		  @if($lang->language_id == -1)
	      	{{Form::text('language_name',$lang->language_name,array("class"=>"form-control", "placeholder"=>"Enter Language"))}}
	      @else
			{{Form::text('language_name',$lang->language_name,array("class"=>"form-control", "placeholder"=>"Enter Language","readonly"=>"readonly"))}}
	      @endif
	       <span>{{$errors->first('language_name')}}</span>	
		</div>
	    <div class="form-group col-md-6">
		   {{ Form::label('', 'Ability') }}<span class="required">*</span>	                   
	       {{Form::select('ability',$abilities,$lang->ability,array("class"=>"form-control"))}}
	       <span>{{$errors->first('ability')}}</span>	
	    </div>
	     <div class="form-group col-md-6">
		   {{ Form::label('', 'Level') }}<span class="required">*</span>	                   
	       {{Form::select('level',$levels,$lang->level,array("class"=>"form-control"))}}
	       <span>{{$errors->first('level')}}</span>	
		</div>			
	</form>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	<button type="button" onclick="editlanguage_submit({{$lang->id}})" id="editlanguage_submit" class="btn btn-primary">Update</button>
</div>
