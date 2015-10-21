@include('admin.top')
<div class="container data-corper">
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
				CVS Breakdown
			</div>
		</div>
		<div class="portlet-body form">
			<div class="form-body">
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-8"><strong>Total Number of Corperlife Members</strong></div>
						<div class="col-md-4"><strong>{{$member}}</strong></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-8"><strong>Total Non-Members</strong></div>
						<div class="col-md-4"><strong>{{$nonmember}}</strong></div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

	
