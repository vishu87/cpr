<html>
<head>
  <style type="text/css">
  @page {
    margin: 23px auto 40px auto;
  }
  .container_cv{
    font-size: 14px;
    width: 700px;
    margin: 0 auto;
    font-family: Georgia, serif !important;
    padding: 20px 0;
  }

  .cv-name{
      font-size: 36px;
      font-weight: bold;
      text-transform: uppercase;
      text-align: center;
      color:#888;
  }
  .text5{
    font-weight: bold;
    font-size: 28px;
    margin: 0 0 5px 0;
    color:#555;
    text-align: center;
  }
  .container_cv hr{
      margin-top: 0px;
      border-width: 1px;
      border-color: #555;
  }

  .section_cv{
    margin-top: 50px;
  }
   .cv-image{
      width: 22% !important;
      text-align: left;
      display: inline-block;
    float: left;
    }
    .cv-image img{
      width: 150px;
      height: 150px;
      border: 2px solid #EEE;
      padding: 2px;
    }
  .left{
    width: 35%;
    display: inline-block;
    float: left;
  }
  .right{
    display: inline-block;
    float: right;
    text-align: right;
    min-width: 100px;
  }
  .center{
    display: inline-block;
    text-align: center;
    width: 292px;
  }
  .cv-detail-1{
    display: inline-block;
    text-align: center;
    width: 45%;
    float: left;
  }
  .cv-detail-2{
    float: left;
    text-align: right;
    width: 33%;
  }
  .left-1{
    width: 51%;
    display: inline-block;
  }
  .right-1{
    width: 49%;
    display: inline-block;
    float: right;
    text-align: right;
  }
  .data-inner{
    clear: both;
  }
  .cont-inner{
    margin-top: 10px;
  }
  .clear{
    clear: both;
    height: 0;
  }
  .bold{
    font-weight: bold;
  }
  .text1{
    font-size: 16px;
  }
  .text2{
    font-size: 18px;
  }
  .text3{
    font-style: italic;
  }
  .nysc-1{
    float: left;
    width: 40%;
  }
  .lang-1{
    width: 40%;
    display: inline-block;
    float: left;
  }
  .lang-2{
    width: 30%;
    float: left;
    display: inline-block;
  }
  .lang-2{
    width: 30% !important;
    float: left;
  }
   ul{
    margin-top: 8px;
    margin-bottom: 8px;
  }
    
  </style>
</head>
  <body>
    <div class="container_cv">
        <div class="cv-name">{{$cv->full_name}}</div> 
          <div class="section_cv">
            <table style="width:100%">
              <tr>
                @if($cv->show_profile_pic == 1)
                  <td align="left">
                    {{HTML::image($cv->profile_image,'cv picture',array("style"=>"width:120px; height:auto; border:2px solid #EEE; padding:2px;"))}}
                  </td>
                @endif
                <td   align="left">
                  @if($cv->add_line1 != '' || $cv->add_line2 != '' )<span class="bold text1">Address:</span> {{$cv->add_line1}}@if($cv->add_line1 != '' && $cv->add_line2 != ''), @endif{{$cv->add_line2}}<br>@endif
                  @if($cv->email)<span class="bold text1">E-mail:</span> {{$cv->email}} <br>@endif
                  @if($cv->website)<span class="bold text1">Website:</span> {{$cv->website}}<br>@endif
                  @if($cv->phone_num)<span class="bold text1">Phone:</span> {{$cv->phone_num}}@endif</td>
                <td  align="right">                   
                  @if($cv->dob)<span class="bold text1">DOB</span> {{$cv->dob}}<br>@endif
                  @if($cv->marital_status != 0)<span class="bold text1">Marital Status:</span> {{$marital_status_vals[$cv->marital_status]}}<br>@endif
                  @if($cv->state)<span class="bold text1">State of Origin:</span> {{$cv->state}}<br>@endif
                   @if($cv->religion != 0 || ($cv->religion == -1 && $cv->religion_text != ''))<span class="bold text1">Religion:</span> {{$cv->religion_name}} {{$cv->religion_text}} <br>@endif
                  @if($cv->local_government)<span class="bold text1">Local Government:</span> {{$cv->local_government}}@endif
                </td>                
              </tr>
            </table>          
          </div>
           <div class="clear"></div>
        @foreach($sections as $section)
          @if($section->type == 0)
            @if($section->content !== '')
            <div class="section_cv">
              <div class="text5">{{$section->section_name}}</div>
               <hr>
              <p>{{$section->content}}</p>
            </div> 
            <div class="clear"></div>       
            @endif

          @elseif($section->type == 1)
            @if(sizeof($workex)>0)
              <div class="section_cv">
                <div class="text5">{{$section->section_name}}</div> 
                <hr>    
                @foreach($workex as $work)
                <div class="cont-inner">
                  <div class="left-1"><span class="bold text2">{{$work->company}}, {{$work->location}}</span></div>
                  <div class="right-1" style="width:40%;"><span class="bold text3">{{ date("d/m/y",strtotime($work->startdate))}} - {{ date("d/m/y",strtotime($work->enddate))}}</span></div>        
                  <div>
                    <span class="bold text1">{{$work->title}}</span><br>
                    {{$work->otherinfo}}       
                  </div>
                </div>
                 @endforeach
              </div>
             <div class="clear"></div>
            @endif

          @elseif ($section->type == 2)
           @if(sizeof($education)>0)
              <div class="section_cv">
                <div class="text5">{{$section->section_name}}</div>          
                <hr>
                  @foreach($education as $edu)
                  <div class="cont-inner">
                    <div class="left-1"><span class="bold text2">{{$edu->coursename}}</span></div>
                    <div class="right-1" style="width:40%;"><span class="bold text3">{{ date("d/m/y",strtotime($edu->startdate))}} - {{ date("d/m/y",strtotime($edu->enddate))}}</span></div>
                    <div>
                    <span class="bold text1">{{$edu->institutename}}, {{$edu->add_line1}}@if($edu->add_line1 != '' && $edu->add_line2 != ''), @endif{{$edu->add_line2}}</span><br>
                    {{$edu->otherinfo}}
                    </div>
                  </div>    
                @endforeach
                </div> 
                <div class="clear"></div>
            @endif
          @elseif ($section->type == 3)
             @if(sizeof($nysc)>0)
             <div class="section_cv" style="margin-bottom:20px;">
              <div class="text5">{{$section->section_name}}</div>
              <hr>
            @foreach($nysc as $ny)
             <div class="cont-inner">
                  <div class="nysc-1"><span class="bold text1">{{$ny->ppa}}</span></div>
                  <div class="lang-2"><span class="bold text1">Batch: {{$ny->batch}}</span></div>
                  <div align="right"><span class="bold text3">Year: {{$ny->year}}</span></div>
                  <div class="data-inner">
                    {{$ny->otherinfo}}
                    </div>
                </div>
            @endforeach 
             </div>
             <div class="clear"></div>
          @endif
             @elseif ($section->type == 4)
             @if(sizeof($language)>0)
             <div class="section_cv">
              <div class="text5">{{$section->section_name}}</div>
              <hr>
            @foreach($language as $lang)
              <div class="cont-inner-1">
                <div class="lang-1"><b>{{$lang->language}}</b></div>
                    @if($lang->language_id == -1)
                     <div class="lang-1"><b>{{$lang->language_name}}</b></div>
                    @endif                    
                <div class="lang-2"><span class="bold text3">{{$lang->ability}}</span></div>
                <div align="right"><span class="bold text3">{{$lang->level}}</span></div>              
              </div>
            @endforeach
             </div>
            <div class="clear"></div>
          @endif
        @endif
        @endforeach   
    </div>
  </body>
</html>
