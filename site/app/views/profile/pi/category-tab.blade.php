<div class="col-md-4" style="padding-left:1px;">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light">
          <div class="portlet-title">
            <div class="caption">
              <span class="caption-subject font-green-sharp bold uppercase">Categories</span>
            </div>
          </div>
          <div class="portlet-body form">
                                
            <div>                                   
              <div class="form-group">                  
                 
              <ul>
                @foreach($category_get as $category)                  
                <li><a href="{{url('/forum/category/'.$category->id)}}">{{$category->category_name}}</a></li>
                @endforeach
                <li><a href="{{url('/forum')}}">View All</a></li>

              </ul> 

                   <!-- BEGIN TOP SEARCH -->
                    <div class="menu-search">
                      <span class="sep"></span>
                      <div class="search-box">
                         {{Form::open(array("url"=>"/forum/search", "method" => "POST"))}}
                          <div class="input-group">
                            <input type="text" name="topic_q" placeholder="Search Topic" class="form-control" value="@if(isset($search_for)){{$search_for}}@endif">
                            <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">Search</button>
                            </span>
                          </div>
                        {{Form::close()}}
                      </div> 
                    </div>
                    <!-- END TOP SEARCH -->


                </div> 
                {{Form::open(array("url"=>"/forum/savetopic","method" => "POST","role"=>"form"))}}
                <div class="form-group">
                    <label>Topic Category</label> 
                    {{Form::select('category',$categories,'',array("class"=>"form-control", "placeholder"=>"Forum category"))}}
                    <span class="error">{{$errors->first('category')}}</span>
                </div>
                <div class="form-group">
                    <label>Topic Title</label> 
                    {{Form::text('title','',array("class"=>"form-control", "placeholder"=>"Forum Title"))}}
                      <span class="error">{{$errors->first('title')}}</span>
                </div>                   
                <div class="form-group">
                  {{ Form::label('', 'Description') }}
                  {{Form::textarea('content','',array("class"=>"form-control", "placeholder"=>"Description"))}}
                  <span class="error">{{$errors->first('content')}}</span>

                </div>
              </div>
              <div>
                <button type="submit" class="btn green btn-block ">Submit</button>
              </div>
              {{Form::close()}}
          </div>
        </div>
      </div>