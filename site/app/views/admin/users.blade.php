<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>SN</th>
				<th>Email</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Last Update Date</th>
			</tr>
		</thead>
		<tbody>
			<?php $sn = 0 ?>
			@foreach($users as $user)
				<tr>
					<td>{{++$sn}}</td>
					<td>{{$user->username}}</td>
					<td>{{$user->firstname}}</td>
					<td>{{$user->lastname}}</td>
					<td>{{$user->created_at}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>