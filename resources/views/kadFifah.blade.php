@extends('default.default')
@section('content')

<h1>Sup</h1>    
           

<div data-scroll-container>
    <div data-scroll-section>
        <h1 data-scroll>Hey</h1>
        <p data-scroll>👋</p>
    </div>
    <div data-scroll-section>
        <h2 data-scroll data-scroll-speed="1">What's up?</h2>
        <p data-scroll data-scroll-speed="2">😬</p>
    </div>
</div>
{{--             
            @foreach ($posts as $post)
                <h2>{{$post->title}}</h2>
            @endforeach --}}
    
@endsection