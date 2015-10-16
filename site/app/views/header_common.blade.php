<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1616910621872702";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
<!-- BEGIN HEADER -->
<div class="header">
  <div class="container">                  
    <a class="site-logo" href="{{url('/')}}">{{HTML::image('assets/img/logos/Final-Logo1.png','logo')}}</a>
    <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
    <!-- BEGIN NAVIGATION -->
    <div class="header-navigation pull-right font-transform-inherit">
      <ul>
        <li class="close-button"><a href="{{url('/')}}" class="close-menu"><i class="fa fa-remove"></i></a></li>
        <li><a href="{{url('/')}}">Home</a></li>                     
        <li><a href="{{url('/ourstory')}}">Our Story</a></li>
         <li><a href="{{url('/faq')}}">FAQ</a></li>    
        <!-- BEGIN TOP SEARCH -->
        @if(Auth::check())
        <li>
            <a href="{{URL('/profile')}}" style="color:#1caf9a">
              @if(Auth::user()->profile_pic == '')
                {{HTML::image('assets/avatars/default.png','logo',array("class"=>"img-circle hidden-xs hidden-sm pull-right user-top-image"))}}
              @else
                {{HTML::image(Auth::user()->profile_pic,'logo',array("class"=>"img-circle hidden-xs hidden-sm pull-right user-top-image"))}}
              @endif
            <span class="username">{{Auth::user()->firstname}}</span></a>
        </li>
          @if(Auth::user()->priv == 1)
          <li>
              <a href="{{URL('/corper-admin')}}" style="color:#1caf9a">
                Admin Panel
              </a>
          </li>
          @endif
        @endif
        <!-- END TOP SEARCH -->
      </ul>
    </div>  
    <!-- END NAVIGATION -->
  </div>
</div>
<!-- Header END -->