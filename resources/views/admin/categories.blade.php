@extends('layouts.admin-master')
@section('content')

	<!-- Page Content Holder -->

	<div id="content">
		<nav class="navbar navbar-default">
			<div class="container-fluid">

				<div class="navbar-header">
					<button type="button" id="sidebarCollapse" class="btn navbar-btn">

						<span><i class="fas fa-bars"></i></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Page</a></li>
						<li><a href="#">Page</a></li>
						<li><a href="#">Page</a></li>
						<li><a href="#">Page</a></li>
					</ul>
				</div>
			</div>
		</nav>



		<a href="create-category" class="btn btn-default">New Category</a>

		<section class="content-container">
			<div class="content-category-container">
				<header class="content-header">
					<span><h2>Categories</h2></span>
					<a href="" class="content-header-category-link">More &#62;</a>
				</header>
				<div class="container">
					<div class="col-sm-offset-2 col-sm-8">




						<!-- Current Tasks -->
						@if (count($categories) > 0)
							<div class="panel panel-default">

								<div class="panel-body">
									<table class="table table-striped task-table">
										<thead>
										<th>Title</th>
										<th>&nbsp;</th>

										</thead>
										<tbody>
										@foreach ($categories as $category)
											<tr>
												<td class="table-text"><div>{{ $category->title }}</div></td>

												<!-- Task Update Button -->
												<td>
													<a href="{{ url('admin/categories/'.$category->id .'/edit') }}" type="submit" class="btn btn-primary">
														<i class="fa fa-btn fa-edit"></i>Edit
													</a>
												</td>

												<!-- Task Delete Button -->
												<td>
													<form action="{{ url('admin/category/'.$category->id) }}" method="POST">
														{{ csrf_field() }}
														{{ method_field('DELETE') }}

														<button type="submit" class="btn btn-danger">
															<i class="fa fa-btn fa-trash"></i>Delete
														</button>
													</form>
												</td>
											</tr>
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						@endif
					</div>
				</div>

			</div>
		</section>
	</div>

@endsection
