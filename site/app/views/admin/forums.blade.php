@include('admin.top')
<div class="container  data-corper" >
	<div class="portlet main-data box blue">
		<div class="portlet-title">
			<div class="caption">
				Forums
			</div>
		</div>
		<div class="portlet-body form">
			<div class="form-body">
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-8"><h4>Total Number of Topics</h4></div>
						<div class="col-md-4"><h4>{{$count}}</h4></div>
					</div>
					<div class="col-md-6">
						<div class="col-md-8"><h4>Total Number of Categories</h4></div>
						<div class="col-md-4"><h4>{{$count_cat}}</h4></div>
					</div>
				</div>
				<div class="row table-corper">
					<table class="table " >
						<thead>
							<tr>
								<th>SN</th>
								<th>Category</th>
								<th>Topic Title</th>
								</tr>
						</thead>
						<tbody>
							<?php $sn = 0 ?>
							@foreach($cat_topic as $topic)
								<tr>
									<td>{{++$sn}}</td>
									<td>{{$topic->category_name}}</td>
									<td>{{$topic->title}}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

	
