@include('profile.adv')
    <div class="row">
      <div class="col-md-8" style="padding-right:0px;">
          <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet light">

          <div class="portlet-body">
            @if(Session::has('success'))
                <div class="alert alert-dismissable alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                  {{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
              <div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                {{Session::get('fail')}}</div>
            @endif
            <div class="table-scrollable">
              <table class="table table-hover" style="width:100%">
                <thead>
                  <tr>
                    <th>
                       #
                    </th>
                    <th>
                       CV Code
                    </th>
                    <th>
                       CV Name
                    </th>
                    <th>
                       Created on
                    </th>
                    <th>
                      Edit/Delete
                    </th>                 
                  </tr>
                </thead>
                <tbody>
                  <?php $count = 0; ?>
                  @foreach($cvs as $cv)
                  <tr>
                    <td>
                       {{++$count}}
                    </td>
                    <td>
                       {{$cv->cv_code}}
                    </td>
                     <td>
                       {{$cv->cv_name}}
                    </td>
                    <td>
                       {{date("d-M-y H:i", strtotime($cv->created_at))}}
                    </td>
                    <td>
                      <a href="{{url("/cvbuilder/cv/".$cv->cv_code)}}"> <span class="label label-lg label-success">
                      Edit</span></a>
                      <a href="{{url("/cv-page/duplicate/".$cv->cv_code)}}"> <span class="label label-lg label-warning">Duplicate</span></a>
                      <a href="{{url("/cv-page/delete/".$cv->cv_code)}}"> <span class="label label-lg label-danger">
                      Delete</span></a>
                    </td>                 
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
          <!-- END SAMPLE TABLE PORTLET-->
      </div>
      <div class="col-md-4" style="padding-left:1px;">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet light">
          <div class="portlet-body" align="center">              
            <span class="caption-subject font-green-sharp " style="font-size:24px">CVs Created by You</span> <br>             
            <span class="" style="margin:10px 90px; font-size:36px;">{{sizeof($cvs)}}</span> 
              {{Form::open(array("url"=>"cvbuilder/createnew","method"=>"POST","class"=>"horizontal-form"))}}
               <div class="form-body">
                @if(Session::has('mail-send'))
                  <div class="alert alert-success">{{Session::get('mail-send')}}</div>
                @endif
                <div class="form-group">                 
                  <div>
                    {{Form::text('cv_name','',array("class"=>"form-control","placeholder"=>"CV Name"))}}
                    {{Form::hidden('email',Auth::user()->username,array("class"=>"form-control","placeholder"=>"CV Name"))}}
                    <span class="error">{{$errors->first('cv_name')}}</span>
                  </div>
                </div>
              </div>        
              <button href="#" type="submit" class="btn green">Create New</button>  
              {{Form::close()}}              
          </div>
        </div>
          <!-- END BORDERED TABLE PORTLET-->
      </div>
    </div>
