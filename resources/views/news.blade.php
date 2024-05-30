@extends('Layouts.master')

@section('static')
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- title -->
    <title>News</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">

</head>
<body>
    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Organic Information</p>
                        <h1>News Article</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- latest news -->
    <div class="latest-news mt-150 mb-150">
        <div class="container">
            <div class="row">
                @foreach($articles as $article)
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ $article['url'] }}" target="_blank">
                            <div class="latest-news-bg" style="background-image: url('{{ $article['urlToImage'] }}');"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ $article['url'] }}" target="_blank">{{ $article['title'] }}</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> {{ $article['author'] ?? 'Unknown' }}</span>
                                <span class="date"><i class="fas fa-calendar"></i> {{ \Carbon\Carbon::parse($article['publishedAt'])->format('d M, Y') }}</span>
                            </p>
                            <p class="excerpt">{{ \Illuminate\Support\Str::limit($article['description'], 150) }}</p>
                            <a href="{{ $article['url'] }}" target="_blank" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="pagination-wrap">
                                <ul>
                                    @if($currentPage > 1)
                                    <li><a href="{{ route('news', ['page' => $currentPage - 1]) }}">Prev</a></li>
                                    @endif
                                    @for($i = 1; $i <= $totalPages; $i++)
                                    <li><a class="{{ $i == $currentPage ? 'active' : '' }}" href="{{ route('news', ['page' => $i]) }}">{{ $i }}</a></li>
                                    @endfor
                                    @if($currentPage < $totalPages)
                                    <li><a href="{{ route('news', ['page' => $currentPage + 1]) }}">Next</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end latest news -->
@endsection