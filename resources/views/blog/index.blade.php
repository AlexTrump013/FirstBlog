@extends('blog/blog_layout')

@section('content')

    <!-- ======= Intro Section ======= -->
    <div id="home" class="intro route bg-image" style="background-image: url(resources/blog/assets/img/intro-bg.jpg)">
        <div class="overlay-itro"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <!--<p class="display-6 color-d">Hello, world!</p>-->
                        <h1 class="intro-title mb-4">My first blog</h1>
                            <p class="intro-subtitle">
                            <span class="text-slider-items">Web Developer,Back-And Developer,PHP Developer</span>
                            <strong class="text-slider"></strong>
                    </p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div><!-- End Intro Section -->

    <main id="main">

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            NEWS
                        </h3>
                        <p class="subtitle-a">
                            =+=+=+some text=+=+=+
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>

            @foreach($posts->chunk(3) as $row)
                <div class="row" >
                @foreach($row as $post)
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="{{ route('news.show', $post->id) }}">
                                    <img src="{{$post->getImage()}}"  width="348" height="250">
                                </a>
                            </div>

                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">{{ $post->getTagsTitles() }}</h6>
                                    </div>
                                </div>
                                <div class="block">
                                    <div class="truncate">
                                        <h3 class="card-title" class="truncate-text">
                                            <a href="{{ route('news.show', $post->id) }}">{{ $post->title }}</a>
                                        </h3>
                                    </div>
                                </div>
                                <p class="card-description" class="clip">
                                <div class="truncate">
                                    <p>
                                        {{ $post->content}}
                                    </p>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        Категория: {{ $post->getCategoryTitle()}}
                                    </a>
                                </div>
                                <div class="post-date">
                                    {{ $post->date}}
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
                </div>
        @endforeach



    @endsection
