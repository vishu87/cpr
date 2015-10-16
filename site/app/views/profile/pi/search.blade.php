@include('profile.adv')
  <div class="page-content" style="padding-top:0px; background: #fff;">
      <!-- BEGIN PAGE CONTENT INNER -->
    <div class="row">
      <div class="col-md-8" style="padding-right:0px;">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light">
          <div class="portlet-body">
              <?php $count = 0; ?>
              @foreach($topics as $topic)
                <div class="row" style="background:#EEE; margin:10px 0; padding:10px 0">
                  <div class="col-md-9">
                    <div class="media" style="">
                      <a href="#" class="pull-left"><img class="user-pic" src="assets/img/avatar4.jpg"></a>
                      <div class="media-body">
                       <a href="{{url("/forum/forum-page/".$topic->id)}}"><h4 class="media-heading">[{{$topic->category_name}}] {{$topic->title}}</h4></a> 
                        <span>Posted by <a href="#">{{$topic->username}}</a></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">{{ date("d-M-y H:i:s", strtotime($topic->created_at)) }}</div>
                </div>
              @endforeach  
          </div> 
        </div>
      </div>
      @include('profile.pi.category-tab')
    </div>
      <!-- END PAGE CONTENT INNER -->
  </div>