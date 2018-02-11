@extends('layouts.admin-master')
@section('content')

    <!-- Page Content Holder -->
    <div class="wrapper">
        @include('partials.public-header')

		<div class="container-fluid">
    		<!-- Post Loop -->
                @if (count($posts) > 0)

					@foreach ($posts as $post)
						<div class="row">
							<div class="col-md-6">

                                <!-- Post Title -->
								<h2 class="table-text"><div>{{ $post->title }}</div></h2>

                                <!-- Post Body -->
								<p class="table-body"><div>{{ str_limit($post->text, 50) }}</div></p>\
								
								<button class="read-more-post">{{ route('blog.post', ['id' => array_search($post, $posts)]) }}</button>

							</div>
						</div>
                    @endforeach
                                          
				@endif
		</div>
		
    </div

@endsection