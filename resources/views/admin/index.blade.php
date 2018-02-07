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



        <h2>Statistics</h2>



        <div class="panel panel-default">
            <div class="panel-body">
                <div class="horizontal statistic">
                    <div class="value">2,204</div>
                    <div class="label">Views</div>
                </div><!-- /.statistic -->
                <div class="horizontal statistic">
                    <div class="value">203</div>
                    <div class="label">Comments</div>
                </div><!-- /.statistic -->
                <div class="horizontal statistic">
                    <div class="value">500</div>
                    <div class="label">Blog Posts</div>
                </div><!-- /.statistic -->
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->




        <section class="content-container">
            <div class="content-category-container">
                <header class="content-header">
                    <span><h2>Latest posts</h2></span>
                    <a href="" class="content-header-category-link">More &#62;</a>
                </header>
                <div class="post-preview-container">
                    <div class="post-preview">
                        <div class="post-preview-image"></div>
                        <div class="post-preview-info">
                            <h6 class="post-preview-title">Entry Title</h6>
                            <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                            <div class="post-preview-buttons">
                                <a href="#" class="post-preview-button button-read">Read</a>
                                <a href="#" class="post-preview-button button-save">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="post-preview">
                        <div class="post-preview-image"></div>
                        <div class="post-preview-info">
                            <h6 class="post-preview-title">Entry Title</h6>
                            <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                            <div class="post-preview-buttons">
                                <a href="#" class="post-preview-button button-read">Read</a>
                                <a href="#" class="post-preview-button button-save">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="post-preview">
                        <div class="post-preview-image"></div>
                        <div class="post-preview-info">
                            <h6 class="post-preview-title">Entry Title</h6>
                            <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                            <div class="post-preview-buttons">
                                <a href="#" class="post-preview-button button-read">Read</a>
                                <a href="#" class="post-preview-button button-save">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="post-preview">
                        <div class="post-preview-image"></div>
                        <div class="post-preview-info">
                            <h6 class="post-preview-title">Entry Title</h6>
                            <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                            <div class="post-preview-buttons">
                                <a href="#" class="post-preview-button button-read">Read</a>
                                <a href="#" class="post-preview-button button-save">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </section>

        <div class="line"></div>

    </div>
    </div>




@endsection
