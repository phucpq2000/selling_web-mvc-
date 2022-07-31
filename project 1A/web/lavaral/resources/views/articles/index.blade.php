@extends('layouts.app')
@section('content')
<ul>
    @foreach($articles as $article)
        <li>{{$article->title}}</li>
        <ol>
        @foreach($article->tags as $tag)
        <li>Tag name: {{$tag->name}}</li>
        @endforeach
        </ol>

        @endforeach
</ul>
    
@endsection