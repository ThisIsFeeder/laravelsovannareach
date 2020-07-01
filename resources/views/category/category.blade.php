@extends('master')

@section('content-header')
	<!-- Content Header (Page header) -->
    <section class="content-header">
		<div class="container-fluid">
		  <div class="row mb-2">
			<div class="col-sm-6">
			  <h1>DataTables</h1>
			</div>
			<div class="col-sm-6">
			  <ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active">DataTables</li>
			  </ol>
			</div>
		  </div>
		</div><!-- /.container-fluid -->
	  </section>
@endsection

@section('content')
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
	  <div class="row">
		<div class="col-12">
		  <div class="card">
			<div class="card-header">
				<h3 class="card-title" style="padding-top: 0.5%">DataTable with default features</h3>
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">Add New</button>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="dataTables_length" id="example1_length">
								<label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
								</label>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 float-right"></div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
								<thead>
									<tr role="row">
										{{-- <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Name</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Description</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Parent</th>
										<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Action</th> --}}
										<th rowspan="1" colspan="1">Name</th>
										<th rowspan="1" colspan="1">Description</th>
										<th rowspan="1" colspan="1">Parent</th>
										<th rowspan="1" colspan="1">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($categories as $cat)
										<tr>
											<td>{{$cat->name}}</td>
											<td>{{$cat->description}}</td>
											<td>{{$cat->parentId}}</td>
											<td>
												<button class="btn btn-info" data-name="{{$cat->name}}" data-description="{{$cat->description}}" data-catid={{$cat->id}} data-toggle="modal" data-target="#edit">Edit</button>
												/
												<button class="btn btn-danger" data-catid={{$cat->id}} data-toggle="modal" data-target="#delete">Delete</button>
											</td>
										</tr>
									@endforeach
								</tbody>
								<tfoot>
									<tr>
										<th rowspan="1" colspan="1">Name</th>
										<th rowspan="1" colspan="1">Description</th>
										<th rowspan="1" colspan="1">Parent</th>
										<th rowspan="1" colspan="1">Action</th>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
			</div>
			<!-- /.card-body -->
		  </div>
		  <!-- /.card -->
		</div>
		<!-- /.col -->
	  </div>
	  <!-- /.row -->
	</div>
	<!-- /.container-fluid -->
  </section>
  <!-- /.content -->

<!-- Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="card card-primary">
				<div class="card-header">
				<h3 class="card-title">New Category</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form role="form" action="{{route('category.store')}}" method="post">
					{{csrf_field()}}
					@include('category.form')
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
				</form>
			</div>
		</div>
	  <!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<!-- Modal -->
<div class="modal fade" id="edit">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="card card-primary">
				<div class="card-header">
				<h3 class="card-title">Edit Category</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form role="form" action="{{route('category.update', 'test')}}" method="post">
					{{method_field('put')}}
					{{csrf_field()}}
					<div class="modal-body">
						<input type="hidden" name="catid" id="catid" value="">
						@include('category.form')
					</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
				</form>
			</div>
		</div>
	  <!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<!-- Modal -->
<div class="modal fade" id="delete">
	<div class="modal-dialog">
	  <div class="modal-content bg-danger">
		<div class="modal-header">
		  <h4 class="modal-title">Delete Confirmation</h4>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<form action="{{route('category.destroy','test')}}" method="post">
			{{method_field('delete')}}
			{{csrf_field()}}
			<div class="modal-body">
				<p>Are you sure you want to delete this?&hellip;</p>
				<input type="hidden" name="catid" id="catid" value="">
			</div>
		
			<div class="modal-footer justify-content-between">
			<button type="button" class="btn btn-outline-light" data-dismiss="modal">No, Cancel</button>
			<button type="submit" class="btn btn-outline-light">Yes, Delete</button>
			</div>	
		</form>
	  </div>
	  <!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
  </div>

@endsection