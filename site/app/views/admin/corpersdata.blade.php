@include('admin.top')
<div class="container data-corper" >
	<div class="portlet box blue main-data">
		<div class="portlet-title">
			<div class="caption">
				Corpers Data
			</div>
		</div>
		<div class="portlet-body form">
			<div class="form-body">
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-8"><h4>Corpers Via FaceBook</h4></div>
						<div class="col-md-4"><h4>{{$reg_user}}</h4></div>
					</div>
					<div class="col-md-6">
						<div class="col-md-8"><h4>Corpers Via Corper Registration</h4></div>
						<div class="col-md-4"><h4>{{$corper_registered_user}}</h4></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-8"><h4>Male Member</h4></div>
						<div class="col-md-4"><h4>{{$male}}</h4></div>
					</div>
					<div class="col-md-6">
						<div class="col-md-8"><h4>Female Member</h4></div>
						<div class="col-md-4"><h4>{{$female}}</h4></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-8"><h4>Undefined Gender</h4></div>
						<div class="col-md-4"><h4>{{$undefined}}</h4></div>
					</div>
				</div>
				<div class="row table-corper">
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

	
