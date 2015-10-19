@include('admin.top')
<div class="container" style="margin-top:40px">
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
				Corpers Data
			</div>
		</div>
		<div class="portlet-body form">
			<div class="form-body">
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-8"><strong>Corpers Via FaceBook</strong></div>
						<div class="col-md-4"><strong>{{$reg_user}}</strong></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-8"><strong>Corpers Via Corper Registration</strong></div>
						<div class="col-md-4"><strong>{{$corper_registered_user}}</strong></div>
					</div>
				</div>
				<div class="row" style="margin-top:30px">
					<table class="table">
						<thead>
							<tr>
								<th>Serving Year</th>
								<th>Batch</th>
								<th>Count</th>
							</tr>
						</thead>
						<tbody>
							@foreach($user_groups as $group)
								<tr>
									<td>{{$group->serv_year}}</td>
									<td>{{$group->batch}}</td>
									<td>{{$group->count}}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

	
