<div class="modal-body row">
	<form id="nysc_form" action="" method="POST">			
		<div class="form-group col-md-6">
			<label>Batch<span class="required">*</span></label>																	
			{{Form::text('batch','',array("class"=>"form-control", "placeholder"=>"Batch"))}}
		</div>
		<div class="form-group col-md-6">
			<label>Year<span class="required">*</span></label>																	
			{{Form::text('year','',array("class"=>"form-control", "placeholder"=>"Year"))}}
		</div>
		<div class="form-group col-md-6">
			<label>Place of Primary Assignment (PPA)<span class="required">*</span></label>
			{{Form::text('ppa','',array("class"=>"form-control", "placeholder"=>"Place of primary assignment"))}}	
		</div>		  
	     <div class="form-group col-md-6">
			<label>CD/SAED Ggroup</label>																	
			{{Form::text('cd','',array("class"=>"form-control", "placeholder"=>"CD"))}}
		</div>	
	    <div class="form-group col-md-12">
		    <label>Other Information</label>																	
			{{ Form::textarea('otherinfo','',["class"=>"form-control textarea"])}}		
		 </div>		
	</form>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	<button type="button" onclick="nysc_submit()" id="nysc_submit" class="btn btn-primary">Add</button>
</div>
