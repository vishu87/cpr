<div class="main" style="padding:40px">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}">Home</a></li>
      <li class="{{url('/faq')}}">Advertise with Us</li>
    </ul>
      <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
        <!-- BEGIN CONTENT -->
      <div class="col-md-12 col-sm-12">
        <h1 style="margin:0px;">Advertise with Us</h1>
        <div class="content-page">
          <div class="page-container">
            <!-- BEGIN PAGE HEAD -->
            <!-- END PAGE HEAD -->
            <!-- BEGIN PAGE CONTENT -->
            <div class="page-content">
              <div class="container">   
                <!-- BEGIN PAGE CONTENT INNER -->
                

                <div class="row" style="margin-top:30px">
                  <div class="col-md-10" style="padding:0">
                    <p>Advertising on corperlife.com will help you gain exposure to a large audience of viewers and jobseekers.
                       take advantage of Corperlife's High traffic and give your brand maximum awareness and increased conversion through any of 
                       the following channels
                    </p>
                    <ul style="list-style: none;">
                      <li style="padding-top: 4px; padding-bottom: 4px; list-style-image:url(assets/img/icon_check.png);">Banner Ads on our internet properties (website, blog and mobile website)</li>
                      <li style="padding-top: 4px; padding-bottom: 4px; list-style-image:url(assets/img/icon_check.png);">Banner Ads or text mentions in Email Job Alerts</li>
                      <li style="padding-top: 4px; padding-bottom: 4px; list-style-image:url(assets/img/icon_check.png);">Social Media Engagement</li>
                      <li style="padding-top: 4px; padding-bottom: 4px; list-style-image:url(assets/img/icon_check.png);">Banner Ads in Weekly Newsletter</li>
                      <li style="padding-top: 4px; padding-bottom: 4px; list-style-image:url(assets/img/icon_check.png);">Lead Generation Campaigns</li>        
                    </ul>
                    <div style="border:solid 1px; margin-top:20px;">{{HTML::image('assets/img/ads/Corperlife-ads-LEADERBOARD.jpg','ad',array("class"=>"width-100"))}}</div>
                    <p style="margin:40px 0px;">
                      If you would like more information of you would like to book one of our available ad placements, Please use the form below and we will get back to you as soon as possible. We also can offer customized advertising packages which offer even more exposure, to learn more simply fill and submit the form below.
                    </p>
                    <div class="col-md-8" style="padding:0">
                      <div class="portlet-body form">
                         @if(Session::has('success'))
                                <div class="alert alert-dismissable alert-success">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                  {{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('failure'))
                              <div class="alert alert-dismissable alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                {{Session::get('failure')}}</div>
                            @endif
                        {{Form::open(array("url"=>"/advertise/saveadd","method" => "POST","role"=>"form"))}}                    
                          <div> 
                            <div class="form-group">
                              <label>Your name:</label> 
                              {{Form::text('name','',array("class"=>"form-control", "placeholder"=>"Your name"))}}
                               <span class="error">{{$errors->first('name')}}</span>
                            </div>  
                            <div class="form-group">
                              <label>Your e-mail:</label> 
                              {{Form::text('email','',array("class"=>"form-control", "placeholder"=>"Your email"))}}
                               <span class="error">{{$errors->first('email')}}</span>
                            </div> 
                            <div class="form-group">
                              <label>Type of Enquiry:</label>
                               {{Form::select('enquiry',array("Select","General Enquiry","Advertising on Site","Technical Support","Partnership","Suggestions","Complaints"),'',array("class"=>"form-control"))}}   
                              <span class="error">{{$errors->first('enquiry')}}</span>
                            </div>
                            <div class="form-group">
                              <label>Contact Phone:</label> 
                              {{Form::text('phone','',array("class"=>"form-control", "placeholder"=>"Phone"))}}
                            </div>                   
                            <div class="form-group">
                              {{ Form::label('', 'Message:') }}
                              {{Form::textarea('message','',array("class"=>"form-control", "placeholder"=>"Description"))}}
                              <span class="error">{{$errors->first('message')}}</span>
                            </div>
                          </div>
                          <div style="margin:20px 0;">
                            <button type="submit" class="btn green btn-block ">Submit</button>
                          </div>
                        {{Form::close()}}
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2" style="padding-left:10px;">
                    <div style="border:solid 1px; min-height: 500px;">{{HTML::image('assets/img/ads/Corperlife-Ads-Skyscraper.jpg','ad',array("class"=>"width-100"))}}</div>
                  </div>
                </div>
              </div>
            <!-- END PAGE CONTENT -->
            </div>
          </div>
        </div>
      <!-- END CONTENT -->
      </div>
      <!-- BEGIN SIDEBAR & CONTENT -->
    </div>    
  </div>
</div>