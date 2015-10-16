@include('profile.adv')
<div class="page-content" style="padding-top:0px; background: #fff;">
  <!-- BEGIN PAGE CONTENT INNER -->
  <div class="row">
    <div class="col-md-8" style="padding-right:0px;">
      <!-- BEGIN PORTLET-->
      <div class="portlet light">             
         <div class="portlet-body">            
            <div class="row">
              <div class="col-md-12 topic-title-contain">
                <h4 class="topic-title">{{$topic->title}}</h4>
                Category: {{$topic->category_name}}
              </div>
            </div>
            <div class="row">
              <div class="col-md-12" style="padding: 0px 0px 10px 15px; display:table">
                <a href="#" class="pull-left" style="padding-right: 10px; vertical-align:middle; color:inherit">
                  @if($topic->profile_pic == '')
                    <img class="user-pic" src="{{url('assets/avatars/default.png')}}">
                    @else
                    <img class="user-pic" src="{{url($topic->profile_pic)}}">
                  @endif
                  <span>Posted by {{$topic->firstname}}</span>

                </a>
              </div>
            </div>       
            <p style="border:1px solid #dbdbdb; padding:15px;">{{$topic->content}}</p>
            <div class="portlet-body form">
              {{Form::open(array("url"=>"/forum/forum-page/savereply/".$topic->id,"method" => "POST","role"=>"form"))}}                    
                <div class="form-group" style="border-top:1px dashed #CCC; margin-top:15px; padding-top:10px">
                  <h4>Reply</h4>
                  @if(Session::has('success'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                      <strong>Success!</strong> Your reply has been added.
                    </div>
                  @endif
                    {{Form::textarea('reply','',array("class"=>"form-control", "placeholder"=>"Your reply","style"=>"height:80px"))}}            
                </div>
                <div>
                <button type="submit" class="btn green">Submit</button>
                </div>
              {{Form::close()}}
            </div>  
            <div style="border:1px solid #dbdbdb; padding:15px; margin-top:10px;">
                  <h4>Total Replies: {{sizeof($replies)}}</h4>

            @foreach($replies as $reply)          
                <div class="row" style="margin-top:10px; padding-bottom:10px; border-bottom:1px dashed #CCC;">
                 <div class="col-md-2" style="padding-right:0px; max-width: 60px;">
                   @if($reply->profile_pic == '')
                    <img class="user-pic" src="{{url('assets/avatars/default.png')}}">
                    @else
                    <img class="user-pic" src="{{url($reply->profile_pic)}}">
                    @endif
                </div>    
                 <div class="col-md-10"><p style="margin-bottom:5px;"><strong>{{$reply->firstname}}</strong></p>
                  <p>{{$reply->reply}}</p>
                  <span style="color:#BBB; font-size:11px;">{{date("d-M-y H:i:s", strtotime($reply->created_at))}}</spn>
                  </div>     
                </div>
             @endforeach
        </div>  
      </div>
      </div>
      <!-- END PORTLET-->
    </div>  
   @include('profile.pi.category-tab')   
  </div>
  <!-- END PAGE CONTENT INNER -->
</div>