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
                            <span><h2>Create a new post</h2></span>
                            <a href="" class="content-header-category-link">More &#62;</a>
                        </header>
                        
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('admin/post')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Title</label>

                            <div class="col-sm-6">
                                <input type="text" name="title" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>


							 <label for="post-text" class="col-sm-3 control-label">Text</label>

                            <div class="col-sm-6">
								<textarea class="form-control" rows="5" id="post-text" name="text"></textarea>
                            </div>

							<label for="post-desc" class="col-sm-3 control-label">Description</label>

                            <div class="col-sm-6">
                                <input type="text" name="desc" id="post-desc" class="form-control" value="{{ old('task') }}">
                            </div>

                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>
		        </div>
			</section>

	  </div>
	</div>



@endsection
