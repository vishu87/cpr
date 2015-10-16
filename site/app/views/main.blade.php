<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>{{$title}}</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="{{$description}}" name="description">
  <meta content="{{$keywords}}" name="keywords">
  <meta content="corperlife.com" name="author">
  <link rel="shortcut icon" href="{{url('/assets/img/favi.png')}}">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->
  {{ HTML::style("assets/plugins/font-awesome/css/font-awesome.min.css")}}       
  {{ HTML::style("assets/fancybox/source/jquery.fancybox.css")}}         
  {{ HTML::style("assets/css/bootstrap.min.css")}}       
  {{ HTML::style("assets/css/components.css")}}       
  {{ HTML::style("assets/css/style.css")}}       
  {{ HTML::style("assets/css/gallery.css")}}       
  {{ HTML::style("assets/css/portfolio.css")}}       
  {{ HTML::style("assets/css/style-responsive.css")}}       
  {{ HTML::style("assets/css/owl.carousel.css")}}       
  {{ HTML::style("assets/css/owl.theme.css")}}       
  {{ HTML::style("assets/css/custom.css")}}
  
  <!-- Theme styles END -->
</head>
<!-- Head END -->
<!-- Body BEGIN -->
  <body class="corporate">
    <!-- BEGIN TOP BAR -->
    @include('pre_header_common')

    <!-- END TOP BAR -->
    @include('header_common')

    {{$main}}
    @include('footer_common')
    <script type="text/javascript">
     var base_url = '{{URL::to('/')}}';
    </script>
    <div class="overlay">
    </div>
    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src=".assets/.assets/assets/global/plugins/respond.min.js"></script>
    <![endif]-->
    {{ HTML::script("assets/js/jquery.min.js")}}
    {{ HTML::script("assets/js/jquery-migrate.min.js")}}
    {{ HTML::script("assets/fancybox/source/jquery.fancybox.pack.js")}}    
    {{ HTML::script("assets/js/bootstrap.min.js")}}      
    {{ HTML::script("assets/js/back-to-top.js")}}
    {{ HTML::script("assets/js/owl.carousel.min.js")}}
    {{ HTML::script("assets/js/owl.carousel.js")}}
    {{ HTML::script("assets/js/wysihtml5-0.3.0.js")}}
    {{ HTML::script("assets/js/bootstrap-wysihtml5.js")}}
    
    {{ HTML::script("assets/js/custom.js?v=1.2")}}

    <!-- END CORE PLUGINS -->

    {{ HTML::script("assets/js/layout.js")}}
    <script type="text/javascript">
    jQuery(document).ready(function() {
        Layout.init(); 
        $("#owl-example").owlCarousel({
          'items':3
        });
    });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
  </body>
<!-- END BODY -->
</html>