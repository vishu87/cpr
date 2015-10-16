  <div class="modal-body row">
     <form id="editeducation_form" action="" method="POST">        
            <div class="form-group col-md-6">
          		<label>Course Name<span class="required">*</span></label>											
          	      {{Form::text('coursename',$edu->coursename,array("class"=>"form-control", "placeholder"=>"Course Name"))}}		
            </div>
             <div class="form-group col-md-6">
              <label>Institution Name<span class="required">*</span></label>                                 
           {{Form::text('institutename',$edu->institutename,array("class"=>"form-control", "placeholder"=>"Institution Name"))}}   
            </div>
           <div class="form-group col-md-6">
              <label>Address Line 1</label>                      
                  {{Form::text('add_line1',$edu->add_line1,array("class"=>"form-control", "placeholder"=>"Address"))}}    
            </div>
             <div class="form-group col-md-6">
              <label>Address Line 2</label>                      
                  {{Form::text('add_line2',$edu->add_line2,array("class"=>"form-control", "placeholder"=>"Address"))}}    
            </div>
          <div class="form-group col-md-6">
        		<label>Start Date</label>																	
        	   {{Form::text('startdate',$edu->startdate,array("class"=>"form-control", "placeholder"=>"Start Date"))}}		
            </div>   
           
            <div class="form-group col-md-6">
        	    <label>End Date</label>																	
        	 {{Form::text('enddate',$edu->enddate,array("class"=>"form-control", "placeholder"=>"End Date"))}}					
            </div>
       
          <div class="form-group col-md-12">
        	<label>Academic Achievement</label>		
        	{{ Form::textarea('otherinfo',$edu->otherinfo,["class"=>"form-control textarea"])}}									
          </div>       
    </form>
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" onclick="editeducation_submit({{$edu->id}})" id="education_submit" class="btn btn-primary">Update</button></a>
  </div>