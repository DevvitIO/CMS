@extends('layouts.admin-master')
@section('content')

    <!-- Page Content Holder -->
    <div class="wrapper">
        @include('partials.public-header')

    		<!-- The Post -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>{{$post->title}}</h1>
						<p>{{ $post->text}}</p>
					</div>
				</div>
			</div>

    </div

@endsection