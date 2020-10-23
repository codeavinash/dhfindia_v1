@extends('layouts.app')

@section('headerFiles')

<link rel="stylesheet" href="{{ asset('css/pages/users/showSingalPost.css') }}">
@can('managePost')
    {{-- <script src="{{ asset('js/pages/Admin/Posts/delete.js') }}" defer></script> --}}
    <script defer>
        let deletepost = ()=>{
            $('#deleteForm').submit();
        }
    </script>
    @endcan

@endsection

@section('mianContent')

@if ($post == null)
    sorry no post found
@else

@if (Session::has('message'))
    <div class="notificationBox">
        {{ Session::get('message') }}

    </div>
@endif

@can('managePost')

    

    <form id="deleteForm" action="{{ route('adminpost.destroy',$post->id)}}" method="post" class="no-display">
        @csrf
        @method('DELETE')
    </form>

    <div class="toolsOptions">
        <a href="{{ route('adminpost.edit',$post->id) }}" class="f-jc-ac"><i class="im im-edit"></i>edit post</a>
        <span class="f-jc-ac" onclick="deletepost()"><i class="im im-trash-can"></i>delete post </span>
    </div>
@endcan


<div class="postContainer">
    <h1 class="headding"><img src="{{ asset('networkingFiles/svgs/logo.svg') }}" alt="">{{ $post->name }}</h1>
    <div class="bottomBorder"><div></div></div>
    <h4 class="shortdes">{{ $post->shortDescription }}</h4>
    <div class="titleImage backgoundImageStyle" style="background-image: url('{{ asset($post->thumbnailUrl) }}')"></div>
    <div class="likeBox"><a href="{{ route('user.addLike',$post->id) }}" id="likebtn" class="{{ $currentLike }} f-jc-ac"><i class="im im-facebook-like"></i> like {{ count($likes) }}</a><a href="#form" class="f-jc-ac"><i class="im im-speech-bubble-comments"></i> comment</a></div>

    <div class="paracontainer">
        {!! $post->description !!}
    </div>

<form action="{{ route('user.addnewcomment',$post->id)}}" method="post" class="addComment" id="form">
    <div class="commentTitle">
        <i class="im im-speech-bubble-comments"></i> add new comment
    </div>
    @csrf
    <textarea name="commentBox"></textarea>
    <button name="submit">add comment</button>
</form>

    <div class="commentBox">
        <div class="commentTitle">
            <i class="im im-speech-bubble-comments"></i> {{ count($comments) }}  comments
        </div>
        <div class="comments">
            @if (count($comments) < 1)
            no comments found be first to add one
            @else
                @foreach ($comments as $comment)
                    @if ($comment->status == "approved")
                    <strong>{{ $comment->userName }}</strong>
                    <p>{{ $comment->userComment }}</p>
                    @endif
                @endforeach
            @endif
        </div>
    </div>

</div>
@endif


@endsection