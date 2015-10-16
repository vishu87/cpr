@include('profile.adv')
<div class="page-content" style="padding-top:0px; background: #fff;">
      <!-- BEGIN PAGE CONTENT INNER -->
      <div class="row">
        <div class="col-md-12">
          <!-- BEGIN SAMPLE FORM PORTLET-->
          <div class="portlet light">             
             <div class="portlet-body">
            <h4 style="padding: 3px 0 15px 0; margin: 0 0 15px 0; font-family: 'Source Sans Pro', sans-serif; font-weight: 600;
                 border-bottom: 1px solid #cdcdcd; font-size: 1.4em;">Blog</h4> 
                 @foreach($topics as $topic)
                 <p>{{$topic->content}}</p>
                 @endforeach
            </div> 
          </div>
        </div>       
      </div>
      <!-- END PAGE CONTENT INNER -->
    </div>