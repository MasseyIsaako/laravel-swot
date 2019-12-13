@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <ul class="style1">
                    @foreach ($articles as $article)
                        <li class="first">
                            <h3><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3>
                            <p>{{ $article->excerpt }}</p>
                            <p><img src="/images/banner.jpg" alt="" class="image image-full" /></p>
                        </li>
                    @endforeach
                </ul>
            </div>
    </div>
@endsection
