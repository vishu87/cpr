
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>CV Code : {{$cv->cv_code}}</h1>
			</div>
			<!-- END PAGE TITLE -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
			   <li>
		        {{ HTML::link('/','Home') }}
		        <i class="fa fa-circle"></i>
			     </li>       
		      <li class="active">
		       Cv Builder
		      </li>  			
			</ul>
		</div>
	</div>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
	{{Form::open(array("url"=>"/cvbuilder/cv/saveinfo".$cv->id,"method" => "PUT","id"=>"builderForm","files"=>"true"))}}	
	{{Form::hidden('cv_id',$cv->id,["id"=>"cv_id","readonly"=>"readonly"])}}
	{{Form::hidden('cv_code',$cv->cv_code,["id"=>"cv_code","readonly"=>"readonly"])}}

		<div class="container margin-top-20" style="margin-bottom:15px;">
			<div class="row margin-top-10">
				<!-- BEGIN PROFILE CONTENT -->
							<div class="portlet light">
								<div class="portlet-title tabbable-line">
									<div class="caption caption-md">
				<div class="profile-content">
					<div class="row">					
						<div class="col-md-12">
										<i class="icon-globe theme-font hide"></i>
										<span class="caption-subject font-blue-madison bold uppercase">Create Your CV</span>
									</div>
									<ul class="nav nav-tabs">									
										<li class="">
										</li>
									</ul>									
								</div>
							</div>
						</div>
					</div>
					<div class="portlet-body">										
						<!-- PERSONAL INFO TAB -->
						<div class="row">
						   <div class="cv">
							<a href="{{url('/cvbuilder/pdf/'.$cv->cv_code.'/executive')}}" class="btn green pull-right down" target="_blank">Downlaod</a>
						    <button type="button" class="btn green pull-right pre" data-toggle="modal" data-target="#style-modal">Preview</button>
						    <button type="button" class="btn green pull-right submit-form">Save</button>	
                           </div>
					<!-- BEGIN SAMPLE FORM PORTLET-->					
							<div class="portlet light">
								<div class="portlet-body cv-portal form">
									<div class="row">	
									    <div class="col-md-3 section-names">
										   <div class="section_link margin-top-0" data-show="#prop-1">Basic Information</div>
										    <div class="drag">Drag to arrange the order of sections</div>
										    <div id="sortable1">
										    	@foreach($sections as $section)
											    <div class="section_link" data-show="#prop{{$section->id}}">
												   	<input type="checkbox" name="section[]" id="" value="{{$section->id}}" checked>
												   	<span id="section{{$section->id}}">{{$section->section_name}}</span>
												   	@if($section->default == 0)
												   		<a href="javascript:;" data-id="{{$section->id}}" class="remove-section">x</a>
												   		@endif
												   	<a href="javascript:;" data-id="{{$section->id}}" data-toggle="modal" data-target="#Modal" class="edit-section"><i class="fa fa-edit"></i></a>
											   </div>
											    @endforeach 
										    </div>
										    <div class="new"> <a class="btn green" href="#" data-toggle="modal" data-target="#Modal" id="add_new_section">+ Add new section</a></div>     
									    </div>                      
										<div class="col-md-9" id="section_panel">			
											<div class="row section" id="prop-1">			 
												<h2>Basic Information</h2>
												<div class="col-md-12">
													<div class="form-group col-md-6">
														<label>Full Name</label>
													    {{Form::text('full_name',$cv->full_name,array("class"=>"form-control", "placeholder"=>"Full Name"))}}
													</div>
													<div class="form-group col-md-6">
														<label>Email</label>
														{{Form::text('email',$cv->email,array("class"=>"form-control", "placeholder"=>"Email"))}}	
														<span>{{$errors->first('email')}}</span>
													</div>
													<div class="form-group col-md-6 ">
													    <label>D.O.B</label>
													    <div class="row dob">
													    	<div class="col-md-3">
													    		{{Form::selectRange('dob_date', 1, 31,$dob[2],["class"=>"form-control"])}}
													    	</div>													    	
													    	<div class="col-md-4">
													    		{{Form::selectMonth('dob_month',$dob[1],array("class"=>"form-control"))}}
													    	</div>													    	
													    	<div class="col-md-4">
													    		{{Form::selectYear('dob_year',1970, 2010, $dob[0], ['class' => 'form-control'])}}
													    	</div>
												        </div>
													</div>
												    <div class="form-group col-md-6">
										               {{ Form::label('', 'marital_status') }} 							                       
										               {{Form::select('marital_status',array("0"=>"Select","1"=>"Married","2"=>"UnMarried"),$cv->marital_status,array("class"=>"form-control"))}}
										               <span>{{$errors->first('marital_status')}}</span>							                    
										            </div>
													<div class="form-group col-md-6">
														<label>Address line 1</label>
														{{Form::text('add_line1',$cv->add_line1,array("class"=>"form-control", "placeholder"=>"Enter Address"))}}												
													</div>
													<div class="form-group col-md-6">
														<label>Address line 2</label>	
														{{Form::text('add_line2',$cv->add_line2,array("class"=>"form-control", "placeholder"=>"Enter Address"))}}								
													</div>
													<div class="form-group col-md-6">
													    <label>Phone Number</label>	
													    {{Form::text('phone_num',$cv->phone_num,array("class"=>"form-control", "placeholder"=>"Enter Phone Number"))}}
											        </div>													
													<div class="form-group col-md-6">
													    <label>Web Site</label>	
													    {{Form::text('website',$cv->website,array("class"=>"form-control", "placeholder"=>"Web Site"))}}
													</div>	                                              
										        </div>
							                </div>
							                 @foreach($sections as $section)
									          	@if($section->type == 0)
									            <div class="row section hide_panel" id="prop{{$section->id}}">	
									            	<h2>{{$section->section_name}}</h2>		
													<div class="col-md-11">
													  <div class="form-group">
														{{ Form::textarea('section_'.$section->id,$section->content,["class"=>"form-control textarea"])}}		
													  </div>
													</div>
											    </div>
												@elseif($section->type == 1)
										        <div class="row section hide_panel" id="prop{{$section->id}}">
										    		<h2>{{$section->section_name}}</h2>
								                    <div class="btn btn-primary section-button" data-toggle="modal" data-target="#Modal" id="add_new_work_ex"> + Add New Entry</div>
									                <div class="margin-top-20" id="work_ex_panel">
									               	@foreach($workex as $work)
									              		<div class="workex-item">
									              			<div class="row" style="padding:10px 0">
										              			<div class="col-md-10" id="work">
											               			<input type="checkbox" name="work_ex[]" value="{{$work->id}}" checked>
											               			<div class="row" style="padding:0" id="work{{$work->id}}">
											               				<div class="col-md-4">
											               					<span class="small-text">Position</span><br>
											               					<b>{{$work->title}}</b>
											               				</div>
											               				<div class="col-md-4">
											               					<span class="small-text">Company</span><br>
											               					<b>{{$work->company}}</b>
											               				</div>
											               				<div class="col-md-4">
											               					<span class="small-text">Duration</span><br>
											               					<b>{{$work->startdate}} - {{$work->enddate}}</b>
											               				</div>
											               			</div>
										              			</div>
										              			<div class="col-md-2">
											               			<div class="edit">
											                		   <a href="javascript:;" data-id="{{$work->id}}" data-toggle="modal" data-target="#Modal" class="edit-work"><i class="fa fa-edit"></i></a>
											                		   <a href="javascript:;" data-id="{{$work->id}}" class="remove-work">x</a>
											               		    </div>
										              		    </div> 
									              		    </div>
									              		</div>			                                               		
									               	 @endforeach
									              </div>
										     </div>
											@elseif ($section->type == 2)
											<div class="row section hide_panel" id="prop{{$section->id}}">
												<h2>{{$section->section_name}}</h2>	
								                <div class="btn btn-primary section-button" data-toggle="modal" data-target="#Modal" id="add_new_education"> + Add New Entry</div> 	        
								                <div class="margin-top-20" id="education_panel">
									            	@foreach($education as $edu)
								            		<div class="education-item">
								            			<div class="row">
							             		            <div class="col-md-10" id="edu">
											              		<input type="checkbox" name="education[]" value="{{$edu->id}}" checked>
												              	<div class="row" style="padding:0" id="edu{{$edu->id}}">
										              			 	<div class="col-md-4">
										              					<span class="small-text">Course</span><br>
										              					<b>{{$edu->coursename}}</b>
											              			</div>
									              					<div class="col-md-4">
										              					<span class="small-text">Institute</span><br>
										              					<b>{{$edu->institutename}}</b>                                  
										              			 	</div>
									              					<div class="col-md-4">
										              					<span class="small-text">Duration</span><br>
										              					<b>{{$edu->startdate}} - {{$edu->enddate}}</b>
										              				</div>			                                         			
												              	</div>	
										              		</div>
										            		<div class="col-md-2">
										              			<div class="edit-edu">
											               			<a href="javascript:;" data-id="{{$edu->id}}" data-toggle="modal" data-target="#Modal" class="edit-education"><i class="fa fa-edit"></i></a>
											               			<a href="javascript:;" data-id="{{$edu->id}}" class="remove-education">x</a>
										      		           </div>
										     		        </div> 
									        		    </div> 
									       		    </div>                                               		
								            	   @endforeach		                                                     
												</div>
											</div>
                                             @elseif ($section->type == 3)
											<div class="row section hide_panel" id="prop{{$section->id}}">
												<h2>{{$section->section_name}}</h2>	
								                <div class="btn btn-primary section-button" data-toggle="modal" data-target="#Modal" id="add_new_nysc" > + Add New Entry</div> 	        
								                <div  id="nysc_panel">
								             	   @foreach($nysc as $nysc)
								             		<div class="nysc-item" class="margin-top-20">
								             			<div class="row">
								             				<div class="col-md-12" id="nysc">
								             					<input type="checkbox" name="nysc[]" value="{{$nysc->id}}" checked>
								             					<div class="row" style="padding:0" id="nysc{{$nysc->id}}">  
								             					    <div class="col-md-3">
									                					<span class="small-text">Batch</span><br>
									                					<b>{{$nysc->batch}}</b>
										                			</div>
										                			<div class="col-md-3">
									                					<span class="small-text">Year</span><br>
									                					<b>{{$nysc->year}}</b>
										                			</div>     
							            							<div class="col-md-4">
								                					    <span class="small-text">PPA</span><br>
										                				<b>{{$nysc->ppa}}</b>
										                			</div>
										               			 	<div class="col-md-2">
											                   			<div class="edit-edu">
											                    			<a href="javascript:;" data-id="{{$nysc->id}}" data-toggle="modal" data-target="#Modal" class="edit-nysc"><i class="fa fa-edit"></i></a>
											                    			<a href="javascript:;" data-id="{{$nysc->id}}" class="remove-nysc">x</a>
											            		        </div>
										           		            </div> 
										             		   </div>  	                 			
											             	</div>
								             	        </div>	
								                    </div>                                       		
							             	       @endforeach
				                                </div>    
					                        </div>
					                        @elseif ($section->type == 4)
									        <div class="row section hide_panel" id="prop{{$section->id}}">
												<h2>{{$section->section_name}}</h2>	
								                <div class="btn btn-primary section-button" data-toggle="modal" data-target="#Modal" id="add_new_language"> + Add New Entry</div> 	        
								                <div class="margin-top-20" id="language_panel">
									            	@foreach($language as $lang)
								            		<div class="language-item">
								            			<div class="row">
							             		            <div class="col-md-10" id="lang">
											              		<input type="checkbox" name="language[]" value="{{$lang->id}}" checked>
												              	<div class="row" style="padding:0" id="lang{{$lang->id}}">
										              			 	<div class="col-md-4">
										              					<span class="small-text">Language Name</span><br>
										              					<b>{{$lang->language_id}}</b>
											              			</div>
									              					<div class="col-md-4">
										              					<span class="small-text">Ability</span><br>
										              					<b>{{$lang->ability}}</b>                                  
										              			 	</div>
									              					<div class="col-md-4">
										              					<span class="small-text">Level</span><br>
										              					<b>{{$lang->level}}</b>
										              				</div>			                                         			
												              	</div>	
										              		</div>
										            		<div class="col-md-2">
										              			<div class="edit-lang">
											               			<a href="javascript:;" data-id="{{$lang->id}}" data-toggle="modal" data-target="#Modal" class="edit-language"><i class="fa fa-edit"></i></a>
											               			<a href="javascript:;" data-id="{{$lang->id}}" class="remove-language">x</a>
										      		           </div>
										     		        </div> 
									        		    </div> 
									       		    </div>                                               		
								            	   @endforeach		                                                     
												</div>
											</div>
											 @elseif ($section->type == 5)
									            <div class="row section hide_panel" id="prop{{$section->id}}">	
									            	<h2>{{$section->section_name}}</h2>	
									            	    <div class="form-group">
                                                		    <div class="col-md-3">							            				    
											                    <label class="control-label">Profile Image</label>
											                    </div>
											                    <div class="col-md-5">
											                      {{Form::file('profile_image',array("class"=>"form-control"))}} 
											                   </div>
											                </div> 						            			    	
								            				<div class="col-md-4">
										              			<div class="edit-lang">
										              				{{ link_to('/cvbuilder/cv/edit_profile', 'Update', array('class' => 'btn btn-danger')) }}
										      		            </div>
										     		        </div> 
						            				<div class="col-md-11">
						            				@if($cv)
                                                      {{HTML::image('/assets/img/'.$cv->profile_image)}}
                                                     @endif
                                                    </div>
                                                </div>
							           		@endif							           		
							               @endforeach
		                                </div>
								    </div>
								</div>
							</div>									
						</div>
					</div>
				</div>
	        </div>
	    </div>
	{{Form::close()}}
	<!--new section-->
		<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="ModalLabel"></h4>
		      </div>
		      	<div class="modal-body-main">
		      		
				</div>
		      </div>
		  </div>
		</div>
	<!-- end new section-->

	<!--new section-->
   <div class="mod">
		<div class="modal fade" id="Preview_Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
		  <div class="modal-dialog" style="width:90%;">
		    <div class="modal-content cont1">		      
		     </div>
		  </div>
		</div>   
	<!-- end new section-->
		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="style-modal">
			<div class="modal-dialog modal-sm">
			    <div class="modal-content" style="padding:20px;">
			    	<div class="form-group">
						<label>Style</label>
						<hr style="border-width:3px;">
						<div class="radio-list">
							<label><input type="radio" name="cvstyle" value="bold" checked> Bold</label>
							
							<label><input type="radio" name="cvstyle" value="elegant"> Elegant </label>
							<label><input type="radio" name="cvstyle" value="executive"> Executive </label>
							<label><input type="radio" name="cvstyle" value="literateur"> Literateur </label>
							<label><input type="radio" name="cvstyle" value="finesse"> Finesse </label>
						</div>
					</div>
					<div class="modal-footer">
					    <button class="btn preview green">Preview</button>
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>												    
			   		</div>
			    </div>
			</div>
		</div>
	</div>