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

		<section class="content-container">
			<div class="content-category-container">
				<header class="content-header">
					<span><h2>Users</h2></span>
					<a href="" class="content-header-category-link">More &#62;</a>
				</header>
				<div class="container">
					<table>
						<thead>
						<tr>
							<th> id</th>
							<th> name</th>
							<th> email  </th>
							<th> role </th>
							<th> created_at</th>
							<th> updated_at </th>
							<th> api_token </th>
							<th> admin </th>
						</tr>
						</thead>
						<tbody>
						@foreach($users as $user)
							<tr>
								<td> {{$user->id}} </td>
								<td> {{$user->name}} </td>
								<td> {{$user->email}} </td>
								<td> {{$user->role}} </td>
								<td> {{$user->created_at}} </td>
								<td> {{$user->updated_at}} </td>
								<td> {{$user->api_token}} </td>
								<td> {{$user->admin}} </td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</section>

	</div>
	</div>
@endsection
