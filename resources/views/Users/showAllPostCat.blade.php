@extends('layouts.app')

@section('headerFiles')

<link rel="stylesheet" href="{{ asset('css/pages/users/showallCat.css') }}">
@can('managePost')
    <script src="{{ asset('js/pages/Admin/Posts/delete.js') }}" defer></script>
@endcan

@endsection

@section('mianContent')



@can('managePost')
    <a href="{{ route('adminPostcat.create') }}" class="f-jc-ac addCatBtn"><i class="im im-plus-circle"></i>add new category</a>
    <a href="{{ route('adminpost.create') }}" class="f-jc-ac addCatBtn"><i class="im im-plus-circle"></i>add new post</a>
    
    @if (Session::has('message'))
            <div class="message f-jc-ac">
                {{ Session::get('message') }}
            </div>
        @endif
    @endcan



@if (count($postCat) == 0)
<div class="notificationBox f-jc-ac">
@can('managePost')
    <i class="im im-frown-o"></i> no category found add some
    @else
    <i class="im im-frown-o"></i> sorry nothing to show
@endcan
</div>
@else
<div class="BoxContainer f-ja-ac">
@foreach ($postCat as $cat)
    <div class="catBox backgoundImageStyle" style="background-image: linear-gradient(rgba(0, 0, 0, 0),black),url('@if($cat->thumbnailUrl){{asset($cat->thumbnailUrl)}}@else https://user-images.githubusercontent.com/194400/49531010-48dad180-f8b1-11e8-8d89-1e61320e1d82.png @endif')">
        <div class="desBox">
            <h4>{{ $cat->name }}</h4>
            <p>{{ substr($cat->shortDescription, 0,  80) }}...</p>
        </div>
        <a href="{{ route('user.showPostbycat',$cat->id) }}"></a>
        @can('managePost')
            <div class="moreBtnBox">
                <a href="{{ route('adminPostcat.edit',$cat->id) }}" class="f-jc-ac success"><i class="im im-edit"></i></a>
                <span class="f-jc-ac danger deleteBtn"><i class="im im-trash-can"></i><p class="no-display">{{ $cat->id }}</p></span>
            </div>
        @endcan
    </div>
@endforeach
</div>

@can('managePost')
    <form action="" method="post" class="no-display" id="deleteCat">
        @method('DELETE')
        @csrf
    </form>
@endcan

@endif



@endsection