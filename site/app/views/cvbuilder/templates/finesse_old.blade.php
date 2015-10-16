<html>
<head>

  <style type="text/css">
  @page {
    margin: 23px auto auto auto;
  }
 @font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: normal;
  src: local('Open Sans'), local('OpenSans'), url(http://themes.googleusercontent.com/static/fonts/opensans/v7/yYRnAC2KygoXnEC8IdU0gQLUuEpTyoUstqEm5AMlJo4.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: bold;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(http://themes.googleusercontent.com/static/fonts/opensans/v7/k3k702ZOKiLJc3WVjuplzMDdSZkkecOE1hvV7ZHvhyU.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: normal;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(http://themes.googleusercontent.com/static/fonts/opensans/v7/O4NhV7_qs9r9seTo7fnsVCZ2oysoEQEeKwjgmXLRnTc.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: bold;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(http://themes.googleusercontent.com/static/fonts/opensans/v7/PRmiXeptR36kaC0GEAetxrQhS7CD3GIaelOwHPAPh9w.ttf) format('truetype');
}
  .container_cv{
    font-size: 14px;
    width: 740px;
    margin: 0 auto;
    line-height: 1.2;
    font-weight: normal;
    font-family: 'Open Sans';
  }
  .container_cv span{
    line-height: 1.2;
    text-align: justify;
    margin: 0px;
  }
  .cv-name{
      font-size: 36px;
      font-weight: bold;
      text-transform: uppercase;
      color:#888;
      width: 370px !important;
      float: left;
  }
  .text5{
    font-weight: bold;
    font-size: 28px;
    margin: 0 0 5px 0;
    color:#555;
  }
  .container_cv hr{
      margin-top: 0px;
      border-width: 3px;
      border-color: #8E8E8E;
  }
  .main-head{
    width: 740px;
  }
  .section_cv{
    margin-top: 20px;
  }
    .cv-image{
      width: 370px !important;
      float: left;
      text-align: right;
    }
     .cv-image img{
      width: 120px;
      height: auto;
      border: 2px solid #EEE;
      padding: 2px;
    }
  .left{
    width: 51%;
    display: inline-block;
    float: left;
  }
  .right{
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
   .con{
      width: 100px;
      float: left;
      font-weight: 700; 
      padding: 0 0 8px 0;
      margin-right: 20px;
  }
  .cont{
    width: 620px;
    float: left;
  }
   .nysc-1{
    float: left;
    width: 40%;
  }  
   .cont-1{
    display: inline-block;
    width: 50%;

  }
  .cont-2{
    display: inline-block;
    float: right;
    width: 49%;
    text-align: right;
  }
  .lang-1{
    width: 40% !important;
    float: left;
  }
  .lang-2{
    width: 30% !important;
    float: left;
  }
  </style>
</head>
  <body>
    <div class="container_cv">
      <div class="section_cv">
        <div class="cv-name">{{$cv->full_name}}</div>
         @if($cv->show_profile_pic == 1)
          <div class="cv-image">{{HTML::image($cv->profile_image,'cv picture')}}</div>
        @endif
      </div>
      <div class="clear"></div>
        <hr> 
          <div class="section_cv">            
            <div class="con">Personal Information</div>
            <div class="cont">
              <div class="cont-1">@if($cv->add_line1 != '' || $cv->add_line2 != '' )<b>Address:</b>{{$cv->add_line1}}@if($cv->add_line1 != '' && $cv->add_line2 != ''), @endif{{$cv->add_line2}}<br>@endif
                @if($cv->email)<b>E-mail:</b> {{$cv->email}}<br>@endif
                @if($cv->website)<b>Website:</b> {{$cv->website}}<br>@endif
                @if($cv->phone)<b>Phone:</b> {{$cv->phone_num}}@endif</div>
              <div class="cont-2"> @if($cv->state)<b>State of Origin:</b> {{$cv->state}}<br>@endif               
               @if($cv->religion)
                 <b>Religion:</b> {{$cv->religion}} {{$cv->religion_text}}           
                 <br>
               @endif
               @if($cv->local_government)<b>Local Government:</b> {{$cv->local_government}}@endif</div>
            </div>
         </div>
         <div class="clear"></div>
         @foreach($sections as $section)
          @if($section->type == 0)
            @if($section->content !== '')
            <div class="section_cv">
              <div class="text5">{{$section->section_name}}</div>
               <hr>
              <span>{{$section->content}}</span>
            </div>        
            @endif
                    @elseif($section->type == 1)
            @if(sizeof($workex)>0)
              <div class="section_cv">
                <div class="text5">{{$section->section_name}}</div> 
                <hr>    
                @foreach($workex as $work)
                <div class="cont-inner">
                  <div class="left"><span class="bold text2">{{$work->company}}, {{$work->location}}</span></div>
                  <div class="right"><span class="bold text3">{{ date("d/m/y",strtotime($work->startdate))}} - {{ date("d/m/y",strtotime($work->enddate))}}</span></div>        
                  <div class="data-inner">
                    <span class="bold text1">{{$work->title}}</span><br>
                    {{$work->otherinfo}}       
                  </div>
                </div>
                 @endforeach
              </div>
            @endif
             @elseif ($section->type == 2)
           @if(sizeof($education)>0)
              <div class="section_cv">
                <div class="text5">{{$section->section_name}}</div>          
                <hr>
                  @foreach($education as $edu)
                  <div class="cont-inner">
                    <div class="left"><span class="bold text2">{{$edu->coursename}}</span></div>
                    <div class="right"><span class="bold text3">{{$edu->startdate}} - {{$edu->enddate}}</span></div>
                    <div class="data-inner">
                    <span class="bold text1">{{ date("d/m/y",strtotime($edu->startdate))}} - {{ date("d/m/y",strtotime($edu->enddate))}}</span><br>
                    {{$edu->otherinfo}}
                    </div>
                  </div>    
                @endforeach
                </div> 
            @endif
                    @elseif ($section->type == 3)
             @if(sizeof($nysc)>0)
             <div class="section_cv">
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
          @endif
              @elseif ($section->type == 4)
             @if(sizeof($language)>0)
             <div class="section_cv">
              <div class="text5">{{$section->section_name}}</div>
              <hr>
            <div class="main-head">
              @foreach($language as $lang)
                <div class="lang-1"><b>{{$lang->language}}</b></div>
                @if($lang->language_id == -1)
                 <div class="lang-1"><b>{{$lang->language_name}}</b></div>
                @endif                    
                <div class="lang-2">{{$lang->ability}}</div>
                <div align="right">{{$lang->level}}</div>
              @endforeach
            </div> 
             </div>  
          @endif

              @endif
        @endforeach   
    </div>
  </body>
</html>