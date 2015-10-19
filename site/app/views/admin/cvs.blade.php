@include('admin.top')
<div class="container" style="margin-top:40px">
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
				CVS Data
			</div>
		</div>
		<div class="portlet-body form">
			<div class="form-body">
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-8"><strong>Total Number of CV's Created</strong></div>
						<div class="col-md-4"><strong>{{$count}}</strong></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-8"><strong>Corperlife Member</strong></div>
						<div class="col-md-4"><strong>{{$member}}</strong></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-8"><strong>Non-Member</strong></div>
						<div class="col-md-4"><strong>{{$nonmember}}</strong></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	