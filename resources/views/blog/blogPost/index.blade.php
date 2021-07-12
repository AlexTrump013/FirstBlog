@extends('blog.blog_layout')

@section('content')

    {{Form::open([
             'route'	=>	['news.show', $post->id],
             'files'	=>	true,
             'method'	=>	'get'
        ])}}

    <div class="intro intro-single route bg-image" style="background-image: url(resources/blog/assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h2 class="intro-title mb-4">Blog Details</h2>
                </div>
            </div>
        </div>
    </div>

    <main id="main">
        <!-- ======= Blog Single Section ======= -->
        <section class="blog-wrapper sect-pt4" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="post-box">
                            <a href="{{$post->getImage()}}" data-gall="portfolioGallery" class="venobox">
                                <div class="work-img">
                                    <img src="{{$post->getImage()}}" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="post-meta">
                                <h1 class="article-title">{{$post->title}}</h1>
                            </div>
                            <div class="article-content">
                                <p>
                                    {{$post->content}}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="widget-sidebar sidebar-search">
                            <h5 class="sidebar-title">Search</h5>
                            <div class="sidebar-content">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for..."
                                               aria-label="Search for...">
                                        <span class="input-group-btn">
                                        <button class="btn btn-secondary btn-search" type="button">
                                            <span class="ion-android-search"></span>
                                         </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="widget-sidebar">
                            <h5 class="sidebar-title">Last News</h5>
                            <div class="sidebar-content">
                                @foreach($posts->take(4) as $post)
                                <ul class="list-sidebar">
                                    <li>
                                        <a href="{{ route('news.show', $post->id) }}">{{ $post->title}}</a>
                                    </li>
                                </ul>
                                @endforeach
                            </div>
                        </div>

                        <div class="widget-sidebar widget-tags">
                            <h5 class="sidebar-title">Tags</h5>
                            <div class="sidebar-content">
                                @foreach($tags2->chunk(10) as $row)
                                <ul>
                                    @foreach($row as $tag)
                                    <li>
                                        <a href="">{{ $tag->title }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{Form::close()}}
        </section><!-- End Blog Single Section -->
    </main><!-- End #main -->
    @endsection
