<div class="container-fluid data-container">
	<div class="container top-menu">
		<ul class="nav nav-pills" style="margin-bottom:0">
			<li><a href="{{url('/corper-admin/corpers/stats')}}" class="btn @if($main_tab == 1) white_pill @endif ">Corpers</a></li>
			<li><a href="{{url('/corper-admin/forums')}}" class="btn @if($main_tab == 2) white_pill @endif">Forums</a></li>
			<li><a href="{{url('/corper-admin/knowledge_stats')}}" class="btn @if($main_tab == 3) white_pill @endif">Knowledge Bank</a></li>
			<li><a href="{{url('/corper-admin/cvs')}}" class="btn @if($main_tab == 4) white_pill @endif">CV's</a></li>
		</ul>
	</div>
</div>

<div class="container top-menu">
	@if($main_tab == 1 && $cat=="corper")
		<ul class="nav nav-pills" style="margin-bottom:0">
			<li><a href="{{url('/corper-admin/corpers/stats')}}" class="btn @if($sub_tab == 1) blue @endif">Stats</a></li>
			<li><a href="{{url('/corper-admin/users')}}" class="btn @if($sub_tab == 2) blue @endif">Users</a></li>
			<li><a href="{{url('/corper-admin/duplicate_users')}}" class="btn @if($sub_tab == 3) blue @endif">Duplicate Users</a></li>
		</ul>
	@endif
	@if($main_tab == 2 && $cat=="forum")
		<ul class="nav nav-pills" style="margin-bottom:0">
			<li><a href="{{url('/corper-admin/forums')}}" class="btn @if($sub_tab == 1) blue @endif">Stats</a></li>
			<li><a href="{{url('/corper-admin/forumTopics')}}" class="btn @if($sub_tab == 2) blue @endif">Topics</a></li>
		</ul>
	@endif
	@if($main_tab == 3 && $cat=="k_bank")
		<ul class="nav nav-pills" style="margin-bottom:0">
			<li><a href="{{url('/corper-admin/knowledge_stats')}}" class="btn @if($sub_tab == 1) blue @endif">Stats</a></li>
		</ul>
	@endif
	@if($main_tab == 4 && $cat=="cvs")
		<ul class="nav nav-pills" style="margin-bottom:0">
			<li><a href="{{url('/corper-admin/cvs')}}" class="btn @if($sub_tab == 1) blue @endif">Stats</a></li>
		</ul>
	@endif
</div>
