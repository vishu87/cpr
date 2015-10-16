<!DOCTYPE html>
<!-- 
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>{{$title}}</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="{{$description}}" name="description">
<meta content="{{$keywords}}" name="keywords">
<meta content="corperlife.com" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
  {{ HTML::style("assets/plugins/font-awesome/css/font-awesome.min.css")}}       
  {{ HTML::style("assets/css/bootstrap.css")}}       
  {{ HTML::style("assets/css/components.css")}}       
  {{ HTML::style("assets/css/style.css")}}       
  {{ HTML::style("assets/css/style-responsive.css")}}  
  {{ HTML::style("assets/css/profile.css")}}       
  {{ HTML::style("assets/css/tasks.css")}}       
  {{ HTML::style("assets/css/cropper.min.css")}}             
  {{ HTML::style("assets/css/crop-avatar.css")}}             
  {{ HTML::style("assets/css/components-rounded.css")}}             
  {{ HTML::style("assets/css/layout.css")}}       
  {{ HTML::style("assets/css/themes/default.css")}}       
  {{ HTML::style("assets/css/custom.css?v=1.0.0")}}
  {{ HTML::style("assets/css/bootstrap-wysihtml5.css")}}    


<!-- END THEME STYLES -->
<link rel="shortcut icon" href="{{url('/assets/img/favi.png')}}">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
<!-- BEGIN HEADER -->
@include('pre_header_common')
<!-- END TOP BAR -->

@include('header_common')

<div class="page-container">
  <!-- BEGIN PAGE CONTENT -->
  <div class="page-content" style="background:#f7f7f7; padding:30px 0; border-top:1px solid #ddd">
    <div class="container">
      <!-- BEGIN PAGE BREADCRUMB -->
      <!-- <ul class="page-breadcrumb breadcrumb">
        <li>
          {{ HTML::link('/profile','Home') }}
          <i class="fa fa-circle"></i>
        </li>       
        <li class="active">
          Personal Information
        </li>
      </ul> -->
      <!-- END PAGE BREADCRUMB -->
      <!-- BEGIN PAGE CONTENT INNER -->
      <div class="row">
        <div class="col-md-3" style="padding:0; background:#fff">
                  <!-- BEGIN SAMPLE FORM PORTLET-->
          <div class="portlet" style="padding:0">
            <div class="portlet-body form" style="border:1px solid #ddd; border-right:none; padding-bottom: 30px !important;">               
              <div id="crop-avatar">
                 <!-- Current avatar -->
                <div class="avatar-view" pic-ratio="1">
                  <?php 
                    if(Auth::user()->profile_pic == '') $profile_pic = 'assets/avatars/default.png';
                    else $profile_pic = Auth::user()->profile_pic;  ?>
                  {{HTML::image($profile_pic,'profile picture')}}
                </div>
                <div style="font-style:italic; text-align:center">
                  Click on the image to change profile picture
                </div>
                <!-- Cropping modal -->
                <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <form class="avatar-form" action="{{url('/profile/uploadprofilepic')}}" enctype="multipart/form-data" method="post">
                        <div class="modal-header">
                          <button class="close" data-dismiss="modal" type="button">&times;</button>
                          <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                        </div>
                        <div class="modal-body">
                          <div class="avatar-body">
                            <!-- Upload image and data -->
                            <div class="avatar-upload">
                              <input class="avatar-src" name="avatar_src" type="hidden">
                              <input class="avatar-data" name="avatar_data" type="hidden">
                              <label for="avatarInput">Local upload</label>
                              <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                            </div>
                            <!-- Crop and preview -->
                            <div class="row">
                              <div class="col-md-9">
                                <div class="avatar-wrapper"></div>
                              </div>
                              <div class="col-md-3">
                                <div class="avatar-preview preview-lg"></div>
                                <div class="avatar-preview preview-md"></div>
                                <div class="avatar-preview preview-sm"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                          <button class="btn btn-primary avatar-save" type="submit">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div><!-- /.modal -->

                      <!-- Loading state -->
                <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
              </div>    
            </div>
            <div class="profile-toggle">
              MENU
              <a href="javascript:void(0);" class="pull-right" style="color:#FFF"><i class="fa fa-bars"></i></a>
            </div>
              <div class="side-menu">
                <ul>
                  <li @if($top_active == 2)class="active start" @else class="start" @endif;>
                   <a href="{{url('/profile')}}">Edit Profile
                    <span class="selected"></span></a>
                  </li>
                  
                  <li @if($top_active == 4)class="active"@endif;>
                   <a href="{{url('/forum')}}">Forum
                    <span class="selected"></span></a>
                  </li>
                  <li @if($top_active == 3)class="active"@endif;>
                   <a href="{{url('/checklist-guide')}}">Resources
                    <span class="selected"></span></a>
                  </li>
                  <li @if($top_active == 5)class="active"@endif;>
                   <a href="{{url('/knowledge')}}">Knowledge Bank
                    <span class="selected"></span></a>
                  </li>
                  <li @if($top_active == 6)class="active"@endif;>
                   <a href="{{url('/cv-page')}}">My CVs
                    <span class="selected"></span></a>
                  </li>
                  @if(empty(Auth::user()->facebook_id))
                     <li @if($top_active == 7)class="active"@endif;>
                     <a href="{{url('/profile/change-password')}}">Change Password<span class="selected"></span></a>
                    </li>
                  @endif
                </ul>
              </div>         
            </div> 
          </div> 
          <div class="col-md-9"  style="padding:0;border:1px solid #ddd; min-height:600px; background:#FFF">
          {{$main}}

          </div>             
        </div>
      <!-- END PAGE CONTENT INNER -->
    </div>
  </div>
  <!-- END PAGE CONTENT -->
</div>
@include('footer_common')

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script type="text/javascript">
  var base_url = '{{URL::to('/')}}';
</script>
    {{ HTML::script("assets/js/jquery.min.js")}}
    {{ HTML::script("assets/js/jquery-migrate.min.js")}}
    {{ HTML::script("assets/js/bootstrap.min.js")}}   
    {{ HTML::script("assets/js/jquery-ui.js")}}   
    {{ HTML::script("assets/js/back-to-top.js")}}
    {{ HTML::script("assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js")}}
    {{ HTML::script("assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js")}}
    {{ HTML::script("assets/js/jquery.cokie.min.js")}}
    {{ HTML::script("assets/js/metronic.js")}}
    {{ HTML::script("assets/js/layout.js")}}
    {{ HTML::script("assets/js/cropper.min.js")}}
    {{ HTML::script("assets/js/crop-avatar.js")}}
    {{ HTML::script("assets/js/profile.js")}}
    {{ HTML::script("assets/js/wysihtml5-0.3.0.js")}}
    {{ HTML::script("assets/js/bootstrap-wysihtml5.js")}}
    {{ HTML::script("assets/js/custom.js?v=1.2")}}
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  $("#sortable1").sortable();
  $("#sortable1").disableSelection();
    $("#work_ex_panel").sortable();
  $("#work_ex_panel").disableSelection();
    $("#education_panel").sortable();
  $("#education_panel").disableSelection();
    // initiate layout and plugins
  Metronic.init(); // init metronic core components
  Layout.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>