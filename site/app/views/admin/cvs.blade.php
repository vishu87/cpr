@include('admin.top')
<div class="container  data-corper">
	<div class="portlet box main-data blue">
		<div class="portlet-title">
			<div class="caption">
				CVS Data
			</div>
		</div>
		<div class="portlet-body form">
			<div class="form-body">
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-8"><h4>Total Number of CV's Created</h4></div>
						<div class="col-md-4"><h4>{{$count}}</h4></div>
					</div>
					<div class="col-md-6">
						<div class="col-md-8"><h4>Corperlife Member</h4></div>
						<div class="col-md-4"><h4>{{$member}}</h4></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-8"><h4>Non-Member</h4></div>
						<div class="col-md-4"><h4>{{$nonmember}}</h4></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	
