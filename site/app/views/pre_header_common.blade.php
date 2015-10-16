    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-envelope-o"></i><a href="mailto:info@corperlife.com">info@corperlife.com</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        @if(!Auth::check())
                          <li><a href="{{url("/login")}}">Log In</a></li>
                        @else
                          <li><a href="{{url("/logout")}}">Logout</a></li>
                        @endif
                        <li><a href="{{url("/cvbuilder")}}">Career Center</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>