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
                            <span><h2>Editing</h2></span>
                            <a href="" class="content-header-category-link">More &#62;</a>
                        </header>
                        
                    	<!-- Display Validation Errors -->
                    	@include('common.errors')

                    	<!-- New Task Form admin/post/{{ $post['id'] }} -->
						<form action="/admin/post/{{ $post->id }}"  method="POST" class="form-horizontal">	
                        	{{ csrf_field() }}
							{{ method_field('PATCH') }}	
                        <!-- Post Name -->
                        <div class="form-group">
                        	<label for="task-name" class="col-sm-3 control-label">Title</label>

                            <div class="col-sm-6">
                                <input type="text" name="title" id="task-name" class="form-control" value="{{ $post['title'] }}">
                            </div>


							<label for="post-text" class="col-sm-3 control-label">Text</label>

                            <div class="col-sm-6">
								<textarea class="form-control" rows="5" id="post-text" name="text">{{ $post['text'] }}</textarea>
                            </div>


                        </div>

                        <!-- Update Post Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-save"></i> Update
                                </button>
                            </div>
                        </div>
                    </form>
		        </div>
			</section>

	  </div>
	</div>



@endsection
