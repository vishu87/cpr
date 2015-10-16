<div class="modal-body row">
	<form id="editwork_form" action="" method="POST">
			
			<div class="form-group col-md-6">
				<label>Job Title<span class="required">*</span></label>
				{{Form::text('title',$work->title,array("class"=>"form-control", "placeholder"=>"Enter Job Title"))}}	
			</div>
		    <div class="form-group col-md-6">
				<label>Location<span class="required">*</span></label>																	
				{{Form::text('location',$work->location,array("class"=>"form-control", "placeholder"=>"Enter Location"))}}
			</div>	
	
		    <div class="form-group col-md-6">
			    <label>Company Name<span class="required">*</span></label>																	
			{{Form::text('company',$work->company,array("class"=>"form-control", "placeholder"=>"Enter Company Name"))}}
		    </div>
		     <div class="form-group col-md-6">
				<label>Start Date</label>																	
				{{Form::text('startdate',$work->startdate,array("class"=>"form-control", "placeholder"=>"Enter Start Date"))}}
			</div>	
		    <div class="form-group col-md-6">
			    <label>End Date</label>																	
				{{Form::text('enddate',$work->enddate,array("class"=>"form-control", "placeholder"=>"Enter End Date"))}}	
			 </div>	
		
		    <div class="form-group col-md-12">
				<label>Other Information</label>		
				{{ Form::textarea('otherinfo',$work->otherinfo,["class"=>"form-control textarea"])}}															
		    </div>
		
	</form>
</div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" onclick="editwork_submit({{$work->id}})" id="work_ex_submit" class="btn btn-primary">Update</button>
  </div>
