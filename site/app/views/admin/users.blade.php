@include('admin.top')
<div class="container  data-corper" >
	<div class="portlet main-data box blue">
		<div class="portlet-title">
			<div class="caption">
				All User Data
			</div>
		</div>
		<div class="portlet-body form">
			<div class="form-body">
				<div class="row table-corper">
					<table class="table">
						<tr>
							<th>SN</th>
							<th>Email</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Last Update Date</th>
						</tr>
						<div class="portlet-body form">
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
						</div>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

	

