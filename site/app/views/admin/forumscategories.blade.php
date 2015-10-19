@include('admin.top')
<div class="container">
	@if(Session::has('success'))
		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
			{{Session::get('success')}}
		</div>
	@endif
	<table class="table" style="margin-top:30px">
		<thead>
			<tr>
				<th>SN</th>
				<th>Topic Title</th>
				<th>Category</th>
				<th>Delete</th>
				
			</tr>
		</thead>
		<tbody>
			<?php $sn = 0 ?>
			@foreach($topics as $topic)
				<tr>
					<td>{{++$sn}}</td>
					<td>{{$topic->title}}</td>
					<td>{{$topic->category_name}}</td>
					<td><a href="{{url('corper-admin/deletetopic/'.$topic->id)}}">Delete</a></td>
					
				</tr>
			@endforeach
		</tbody>
	</table>
</div>