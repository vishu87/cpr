<div class="main" style="padding:40px">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{url('/')}}">Home</a></li>
      <li class="{{url('/faq')}}">FAQ</li>
    </ul>
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
      <!-- BEGIN CONTENT -->
      <div class="col-md-12 col-sm-12">
        <h1>FAQ</h1>
           
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content">
          <div class="container">   
                  <!-- BEGIN PAGE CONTENT INNER -->
            <div class="row">
              <div class="col-md-12" style="padding:0; margin-top:20px">
               Please ask any question regarding CorperLife<sup>TM</sup>. We will be happy to answer them.         
              </div>
            </div>
            <div class="row" style="margin-top:50px;">
              <div class="col-md-8">
                {{Form::open(["url"=>"/faq","method"=>"post", "class"=> "form-horizontal", "role"=>"form"])}}
                  @if(Session::has('success'))
                    <div class="alert alert-success">
                        <i class="fa fa-ban-circle"></i><strong>Success!</strong> {{Session::get('success')}}
                      </div>
                  @endif
                  <div class="form-body">
                    <div class="form-group">
                      <label class="col-md-2 control-label">Name</label>
                      <div class=" col-md-10">
                        {{Form::text('name','',array("class"=>"form-control", "placeholder"=>"Your name"))}}
                        <span>{{$errors->first('name','Please provide your name')}}</span> 
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Email Address</label>
                      <div class=" col-md-10">
                        {{Form::text('email','',array("class"=>"form-control", "placeholder"=>"Your email"))}}
                        <span>{{$errors->first('email')}}</span> 
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label">Question</label>
                      <div class=" col-md-10">
                        {{Form::textarea('question','',array("class"=>"form-control", "placeholder"=>"Your question"))}}
                        <span>{{$errors->first('question','Please enter your question')}}</span> 
                      </div>
                    </div>
                    <div class="form-group" style="display:none">
                      <label class="col-md-2 control-label">Spam</label>
                      <div class=" col-md-10">
                        <input type="hidden" class="form-control" name="antispam" value="">
                      </div>
                    </div>
                  </div>
                  <div class="form-actions">
                    <button type="submit" class="btn blue pull-right">Submit</button>
                  </div>
                  {{Form::close()}}
              </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
          </div>
        </div>
        <!-- END PAGE CONTENT -->
      </div>
    </div>
  </div>
  <!-- END CONTENT -->
</div>
       