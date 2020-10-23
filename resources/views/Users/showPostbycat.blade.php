@extends('layouts.app')

@section('headerFiles')

<link rel="stylesheet" href="{{ asset('css/pages/users/showallPost.css') }}">
@can('managePost')
    {{-- <script src="{{ asset('js/pages/Admin/Posts/delete.js') }}" defer></script> --}}
@endcan

@endsection

@section('mianContent')

<div class='container f-jb-ac'>
    @foreach ($posts as $post)
        <div class="postBox backgoundImageStyle" style="background-image: linear-gradient(rgba(0, 0, 0, 0),black),url('{{ asset($post->thumbnailUrl) }}')">
            <div class="contentBox">
                <h4>{{ $post->name }}</h4>
                <p>{{ substr($post->shortDescription, 0,  80) }}...</p>
            </div>
            <a href="{{ route('user.showSinglePost',$post->id) }}"></a>
        </div>
    @endforeach
    
</div>

@endsection