<div class="container">
	<ul class="nav nav-tabs">
		<li><a href="{{url('/corper-admin/corpers/stats')}}" class="btn @if($main_tab == 1) blue @endif ">Corpers</a></li>
		<li><a href="{{url('/corper-admin/forums')}}" class="btn @if($main_tab == 2) blue @endif">Forums</a></li>
		<li><a href="{{url('/corper-admin/knowledge_stats')}}" class="btn @if($main_tab == 3) blue @endif">Knowledge Bank</a></li>
		<li><a href="{{url('/corper-admin/cvs')}}" class="btn @if($main_tab == 4) blue @endif">CV's</a></li>
	</ul>
</div>
<div class="container">
	@if($main_tab == 1 && $cat=="corper")
		<a href="{{url('/corper-admin/corpers/stats')}}" class="btn @if($sub_tab == 1) blue @endif">Stats</a>
		<a href="{{url('/corper-admin/users')}}" class="btn @if($sub_tab == 2) blue @endif">Users</a>
		<a href="{{url('/corper-admin/duplicate_users')}}" class="btn @if($sub_tab == 3) blue @endif">Duplicate Users</a>
	@endif
	@if($main_tab == 2 && $cat=="forum")
		<a href="{{url('/corper-admin/forums')}}" class="btn @if($sub_tab == 1) blue @endif">Stats</a>
		<a href="{{url('/corper-admin/forumTopics')}}" class="btn @if($sub_tab == 2) blue @endif">Topics</a>
	@endif
	@if($main_tab == 3 && $cat=="k_bank")
		<a href="{{url('/corper-admin/knowledge_stats')}}" class="btn @if($sub_tab == 1) blue @endif">Stats</a>
		
	@endif
	@if($main_tab == 4 && $cat=="cvs")
		<a href="{{url('/corper-admin/cvs')}}" class="btn @if($sub_tab == 1) blue @endif">Stats</a>
		
		
	@endif
</div>
