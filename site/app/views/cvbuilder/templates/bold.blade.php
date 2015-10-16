<html>
<head>  
  <style type="text/css">
  @page {
    margin: 23px auto 50px auto;
  }
  .container_cv{
    font-size: 14px;
    width: 755px;    
    margin: 0 auto;
    font-family: Georgia;
  }
  .main-head{
    width: 755px;
  }
  ul{
    margin-top: 8px;
    margin-bottom: 8px;
  }
    .cv-name{
      font-size:2em;
      text-transform: uppercase;
      margin-top: 20px;
      font-weight: 800;
      width: 600px !important;
      float: left;
    }
    .cv-image{
      width: 150px !important;
      float: right;
      text-align: right;
    }
    .cv-image img{
      width: 120px;
      height: auto;
      border: 2px solid #EEE;
      padding: 2px;
    }
    .container_cv hr{
      border-color: black;
      border-width: 2px;
      margin-top: 0px;
    }
    .section_cv{
    margin-top: 30px;
    display: inline-block;
  }
  .section_cv-1{
    margin-top: 50px;
    display: inline-block;
  }
    .left{
      width: 115px;
      float: left;
      background-color: black;
      color: #fff;
      font-weight: 700; 
      padding: 8px 0px 8px 0px;
      min-width: 100px;
      margin-right: 20px;      
text-align: center;

  }
  .right{
    width: 620px;
    float: left;
    font-size: 14px;
    text-transform: none;
    font-weight: normal;
  }
  .nysc-1{
    width: 40% !important;
  }
  .nysc-2{
    width: 30%;
    text-align: center;
  }
  .nysc-3{
    width: 500px;
    text-align: left; ;
  }
  .lang-1{
    width: 30%;
    float: left;
  }
  .lang-2{
    width: 30%;
    float:left;
    text-align: center;
  }
   .right-1{
   float: left;
    width: 50%;
  }
  .right-2{
    display: inline-block;
    float: right;
    width: 49%;
    text-align: right;
  }
  .right-3{
    display: inline-block;
    float: right;
    width: 30%;
    text-align: right;
  }
  .clear{
    clear: both;
    height: 0;
  }
  .table-width{
    width: 100%;
  }
    
  </style>
</head>
  <body>
    <div class="container_cv">
      <div class="main-head">
        <div class="cv-name">
          <div @if($cv->show_profile_pic == 1)style="border-bottom:3px solid #000; "@endif>{{$cv->full_name}}</div>
          @if($cv->show_profile_pic == 1)
          <div class="right" style="margin-top:15px; width:600px !important ">
            <div class="right-1">
              @if($cv->add_line1 != '' || $cv->add_line2 != '' )<b>Address: </b>{{$cv->add_line1}}@if($cv->add_line1 != '' && $cv->add_line2 != ''), @endif{{$cv->add_line2}}<br>@endif
              @if($cv->email)<b>E-mail:</b> {{$cv->email}}<br>@endif
              @if($cv->phone_num)<b>Phone:</b> {{$cv->phone_num}}<br>@endif
              @if($cv->website)<b>Website:</b> {{$cv->website}}<br>@endif
            </div>
            <div class="right-2">
               @if($cv->dob)<b>DOB:</b> {{$cv->dob}}<br>@endif              
               @if($cv->marital_status != 0)<b>Marital Status:</b> {{$marital_status_vals[$cv->marital_status]}}<br>@endif              
               @if($cv->state)<b>State of Origin:</b> {{$cv->state}}<br>@endif              
               @if($cv->religion != 0 || ($cv->religion == -1 && $cv->religion_text != ''))
                 <b>Religion:</b> {{$cv->religion_name}} {{$cv->religion_text}}           
                 <br>
               @endif
               @if($cv->local_government)<b>Local Government:</b> {{$cv->local_government}}@endif
            </div>
          </div> 
          @endif
        </div>
        @if($cv->show_profile_pic == 1)
          <div class="cv-image">{{HTML::image($cv->profile_image,'cv picture')}}</div>
        @endif
      </div> 
      <div class="clear"></div>
       @if($cv->show_profile_pic != 1)<hr> @endif

        @if($cv->show_profile_pic != 1)
           <div class="section_cv">            
              <div class="left">Personal Information</div>
              <div class="right">
               <div class="right-1">@if($cv->add_line1 != '' || $cv->add_line2 != '' )<b>Address: </b>{{$cv->add_line1}}@if($cv->add_line1 != '' && $cv->add_line2 != ''), @endif{{$cv->add_line2}}<br>@endif
              @if($cv->email)<b>E-mail:</b> {{$cv->email}}<br>@endif
              @if($cv->phone_num)<b>Phone:</b> {{$cv->phone_num}}<br>@endif
              @if($cv->website)<b>Website:</b> {{$cv->website}}<br>@endif</div>
               <div class="right-2">   
                @if($cv->dob)<b>DOB:</b> {{$cv->dob}}<br>@endif              
               @if($cv->marital_status != 0)<b>Marital Status:</b> {{$marital_status_vals[$cv->marital_status]}}<br>@endif              
               @if($cv->state)<b>State of Origin:</b> {{$cv->state}}<br>@endif                   
                @if($cv->religion != 0 || ($cv->religion == -1 && $cv->religion_text != ''))
                 <b>Religion:</b> {{$cv->religion_name}} {{$cv->religion_text}}           
                 <br>
               @endif
               @if($cv->local_government)<b>Local Government:</b> {{$cv->local_government}}@endif</div>
              </div>             
            </div> 
            @endif
       <div class="clear"></div>
        @foreach($sections as $section)
        @if($section->type == 0) 
          @if($section->content !== '')
            <div class="section_cv">
              <div class="left">{{$section->section_name}}</div>
              <div class="right">{{$section->content}}</div>
            </div>
            <div class="clear"></div>
          @endif
        @elseif($section->type == 1)
          @if(sizeof($workex)>0)
            <div class="section_cv">            
              <div class="left">{{$section->section_name}}</div>
              <div class="right">
                <table class="table-width">
                  @foreach($workex as $work)
                    <tr>
                        <td><b>{{$work->company}}, {{$work->location}}</b></td>
                        <td align="right"><b>{{$work->startdate}} - {{$work->enddate}}</b></td> 
                      </tr>  
                      <tr>  <td colspan="2">   
                      <span>{{$work->title}}</span><br>
                      {{$work->otherinfo}}</td>
                    </tr>
                  @endforeach
                </table>
              </div>             
            </div>
             <div class="clear"></div>
          @endif
        @elseif ($section->type == 2)
           @if(sizeof($education)>0) 
            <div class="section_cv-1">
              <div class="left">{{$section->section_name}}</div>
              <div class="right">
                <table class="table-width">
                @foreach($education as $edu) 
                  <tr>
                    <td><b>{{$edu->coursename}}</b></td>
                    <td align="right"><b>{{ date("d/m/y",strtotime($edu->startdate))}} - {{ date("d/m/y",strtotime($edu->enddate))}}</b></td>
                  </tr>
                  <tr>  
                    <td colspan="2">   
                    <span>{{$edu->institutename}}, {{$edu->add_line1}}@if($edu->add_line1 != '' && $edu->add_line2 != ''), @endif{{$edu->add_line2}}</span><br>
                    {{$edu->otherinfo}}</td>
                  </tr>
                @endforeach
                </table>
              </div>
            </div>
            <div class="clear"></div>            
          @endif
        @elseif ($section->type == 3)
          @if(sizeof($nysc)>0)
            <div class="section_cv">
              <div class="left">{{$section->section_name}}</div>
                  <div class="right">
                    <table class="table-width">
                    @foreach($nysc as $ny) 
                      <tr>
                        <td class="nysc-1"><b>{{$ny->ppa}}</b></td>
                        <td class="nysc-2"><b>Batch:</b>{{$ny->batch}}</td>
                        <td align="right"><b>Year:</b> {{$ny->year}}</td>
                      </tr>
                      <tr>  
                        <td colspan="2">{{$ny->otherinfo}}
                      </tr>
                    @endforeach
                    </table>
                  </div>
            </div>
             <div class="clear"></div>            
           @endif
          @elseif ($section->type == 4)
            @if(sizeof($language)>0)
              <div class="section_cv">
                <div class="left">{{$section->section_name}}</div>
                  <div class="right">
                    @foreach($language as $lang)
                      <div>
                        <table style="width:100%; font-size: 14px;">
                          <tr>
                            <td style="width:30%">
                              @if($lang->language_id == -1)
                                <b>{{$lang->language_name}}</b>
                              @else
                                <b>{{$lang->language}}</b>
                              @endif
                            </td>
                            <td style="width:30%; text-align:center">{{$lang->ability}}</td>
                            <td style="text-align:right">{{$lang->level}}</td>
                          </tr>
                        </table>
                      </div>
                    @endforeach
                  </div>
              </div>
              <div class="clear"></div>            
           @endif
         @endif
        @endforeach 
    </div> 
  </body>
</html>