@extends('layouts.app',['eventList'=> $eventList])

@section('haederFiles')
    <link rel="stylesheet" href="{{ asset('css/singlePost.css') }}">
@endsection

@section('mainContent')

    <div class="single-Post-main-container animatedParent">
        <div class="single-Post-thumbnail" style="background-image: url('{{ asset($post->thumbnailUrl) }}')"></div>

        <h1 class="single-post-title">{{ $post->name }}</h1>
        <div class="single-post-reach-container f ja ac">
            <a href=""><i class="im im-facebook-like"></i> like @if (count($likes))
                <strong>: {{ count($likes) }}</strong>
                @else
                
            @endif</a>
            <a href="#commentBox"><i class="im im-speech-bubble-comment"></i>comment @if (count($comments))
                <strong>: {{ count($comments) }}</strong>
                @else
                
            @endif</a>

        </div>

        <div class="p-text post-short-description animated flipInX">
            {{ $post->shortDescription }} 
        </div>

        <div class="p-text post-full-descriptino">
            {!! $post->description !!}
        </div>

        <div class="post-commet-spaec" id="commentBox">

        </div>

        <form action="{{ route('user.addnewcomment',$post->id)}}" method="post" class="single-post-addComment-container" id="form">
            <div class="single-post-comment-title">
                Leave a Comment
            </div>
            @csrf
            <textarea name="commentBox" class="single-post-comment-textarea"></textarea>
            <button name="submit" class="single-post-comment-submit">add comment</button>
        </form>

        <h4 class="single-post-comment-title">post comments :-</h4>

        <div class="single-post-comments-box">
            
        </div>
        <div class="single-post-comments-box">

        </div>

    </div>
    
@endsection