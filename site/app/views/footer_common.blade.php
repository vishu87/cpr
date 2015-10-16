    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div style="background-image:url('http://www.transparenttextures.com/patterns/az-subtle.png');">
        <div class="container">
          <div class="row">
            <!-- BEGIN BOTTOM ABOUT BLOCK -->
            <div class="col-md-3 col-sm-6 pre-footer-col">
              <h2>About Us</h2>
              <p style="text-align:justify">Corperlife<sup>TM</sup> is run by a small group of ex-corpers who wish to help others maximize their post-graduate years. We provide free tools and resources to help Nigerian youths through the NYSC program and into starting their careers.</p>
            </div>
        <!-- END BOTTOM ABOUT BLOCK -->

        <!-- BEGIN BOTTOM CONTACTS -->
        <div class="col-md-3 col-sm-6 pre-footer-col like-us">
          <h2>Like Us</h2>              
          <div class="fb-like" data-href="https://www.facebook.com/pages/Corperlife/137990536376099" data-layout="standard" data-action="like" data-show-faces="true" data-share="true" data-width="250px"></div> 
        </div>
        <!-- END BOTTOM CONTACTS -->

        <!-- BEGIN TWITTER BLOCK --> 
        <div class="col-md-3 col-sm-6 pre-footer-col">
          <h2>Advertise</h2>            
          <p><a class="twitter-timeline" href="{{url('/advertise')}}" data-chrome="noheader nofooter noscrollbar noborders transparent" style="">Click here</a> to post your ad with us.</p>

            <div class="row" style="margin-top:20px;">
             <div class="col-md-12">
              <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
                <h2>Newsletter</h2>
                <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                <div class="input-group">
                  {{Form::text('email_sub','',array("placeholder"=>"youremail@mail.com","class"=>"form-control","style"=>"border:1px solid #CCC"))}}
                  <span class="input-group-btn">
                    <button class="btn green" type="button" onclick="subscribe()" id="subscribe_btn" >Subscribe</button>
                  </span>
                </div>
                <span class="error error-sub"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 pre-footer-col">           
          <h2>Latest Tweets</h2>
          <?php
            include(app_path().'/tweet/TweetPHP.php');
            $TweetPHP = new TweetPHP(array(
              'consumer_key'              => 'S5MdIUJXCne6ybLa29K9h3Iqf',
              'consumer_secret'           => 'iPsT3OKLfvsyNutH0YkVy9Rh1j2k9ePilhx9vOJaps8jFr4ztr',
              'access_token'              => '2540278561-rKu6wUzFOeuaPCcYOnZHDvX7vDpXWkftyLzkrFA',
              'access_token_secret'       => 'oL1DVxj9k4voG6QMiQqDgst0rk9x0cFNuKjkakIyyZR3g',
              'twitter_screen_name'       => 'corperlife'
              ));
            echo $TweetPHP->get_tweet_list();
            ?>
          <!-- END TWITTER BLOCK -->         
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END PRE-FOOTER -->

<!-- BEGIN FOOTER -->
<div class="footer">
  <div class="container">
    <div class="row">
      <!-- BEGIN COPYRIGHT -->
      <div class="col-md-8 col-sm-8 padding-top-10">
        © 2015 CorperLife All Rights Reserved <a href="{{url('/website-rules')}}">Privacy Policy</a> | <a href="{{url('/website-rules')}}">Terms of Service</a>
      <!-- END COPYRIGHT -->
      <!-- BEGIN PAYMENTS -->
        <ul class="list-unstyled list-inline">
          <li><a href="https://www.facebook.com/pages/Corperlife/137990536376099"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://plus.google.com/116063502261479284840/posts/ByspxFzavwd"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="https://www.linkedin.com/company/corperlife"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="https://twitter.com/corperlife"><i class="fa fa-twitter"></i></a></li>
        </ul> 
      </div>
      <!-- END PAYMENTS -->
      <div class="col-md-4 col-sm-4 padding-top-10 pull-right" align="right">
        Website Designed and Developed by <a target="blank" href="http://www.naijagosocial.com/">Naija Go Social</a>
      </div>

    </div>
  </div>
</div>
    <!-- END FOOTER -->