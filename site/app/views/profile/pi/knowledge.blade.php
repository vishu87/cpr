@include('profile.adv')
<div class="portlet light">
  <div class="portlet-body">
    <ul class="nav nav-tabs profile-tab">
      <li @if($tab == 1) class="active" @endif>
        <a href="#tab_1_1" data-toggle="tab">
        Knowledge Bank </a>
      </li>
      <li @if($tab == 2) class="active" @endif>
        <a href="#tab_1_2" data-toggle="tab">
        Ask a question? </a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade @if($tab == 1) active in @endif" id="tab_1_1">
        <div class="row">
          <form class="form-horizontal" style="padding:5px 15px;">
            <div class="form-group">
              <div class="col-sm-6">
                <input type="text" name="query" class="form-control" id="query" placeholder="Search" value="{{$query}}">
              </div>
               <div class="col-sm-6">
                <button class="btn blue">Search!</button>
                @if($query != '')
                  <a href="{{url('/knowledge')}}" class="btn red">Clear Search</a>
                @endif
              </div>
            </div>
          </form>
        </div>
        @if($query == '')
        <div class="portlet-body">
          <ul class="nav nav-pills">
            <?php $count = 1; ?>
            @foreach($categories as $category)
            <li @if($count == 1) class="active" @endif>
              <a href="#tab_2_{{$count}}" data-toggle="tab">
              {{$category->category}}</a>
            </li>
            <?php $count++; ?>
            @endforeach
            <li @if($count == 1) class="active" @endif>
              <a href="#tab_2_{{$count}}" data-toggle="tab">
              Terms &amp; Definitions</a>
            </li>
          </ul>
          <div class="tab-content">
            <?php $count = 1; $old_category = 0; $i = 0; ?>
            <div class="tab-pane active in" id="tab_2_{{$count}}">
              <div class="qus_ans">
              @foreach($questions as $question)
                @if($question->category_id != $old_category && $i != 0)
                <?php $count++ ?>
                  </div></div>
                  <div class="tab-pane fade" id="tab_2_{{$count}}">
                    <div class="qus_ans">
                @endif
                <div class="qus">{{$question->question}}</div>
                <div class="ans">
                  <ul>
                    <li>
                      {{$question->answer}}
                    </li>
                  </ul>
                </div>
                <?php $old_category = $question->category_id; ?>
                <?php $i++ ?>
              @endforeach
              </div>
              </div>
              <div class="tab-pane fade" id="tab_2_{{++$count}}">
                <div class="qus_ans">
                  <div class="terms">
                    <ul>
                      @foreach($terms as $term)
                      <li><b>{{$term->term}}</b>:-  {{$term->definition}}</li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @else
          @foreach($term_results as $term_result)
              <div class="qus">{{$term_result->term}}</div>
                <div class="ans">
                  <ul>
                    <li>
                      {{$term_result->definition}}
                    </li>
                  </ul>
              </div>
            @endforeach
            @foreach($query_results as $query_result)
              <div class="qus">{{$query_result->question}}</div>
                <div class="ans">
                  <ul>
                    <li>
                      {{$query_result->answer}}
                    </li>
                  </ul>
              </div>
            @endforeach
            @if((sizeof($term_results)+sizeof($query_results)) == 0)
              Sorry! No results found for {{$query}}.
            @endif
          @endif
      </div>
      <div class="tab-pane fade @if($tab == 2) active in @endif " id="tab_1_2">
        {{Form::open(array('url'=>'/knowledge/askquestion','method' => 'POST','class'=>'form-horizontal'))}}
          <div class="form-body">
            @if(Session::has('mail-send'))
              <div class="alert alert-success">{{Session::get('mail-send')}}</div>
            @endif
            <div class="form-group">
              {{ Form::label('', 'Your Name', array('class' => 'col-md-3 control-label')) }}                   
              <div class="col-md-9">
                {{Form::text('name',Auth::user()->firstname.' '.Auth::user()->lastname,array("class"=>"form-control"))}}
                <span class="error">{{$errors->first('name')}}</span>
              </div>
            </div>

            <div class="form-group">
              {{ Form::label('', 'Your Message', array('class' => 'col-md-3 control-label')) }}                   
              <div class="col-md-9">
                {{Form::textarea('message','',array("class"=>"form-control"))}}
                <span class="error">{{$errors->first('message')}}</span>
              </div>
            </div>

            <div class="form-group">
              {{ Form::label('', '', array('class' => 'col-md-3 control-label')) }}                   
              <div class="col-md-9">
                {{Form::submit('Submit',array("class"=>"btn blue"))}}
              </div>
            </div>
          </div>
        {{Form::close()}}
      </div>
    </div>
  </div>
</div>