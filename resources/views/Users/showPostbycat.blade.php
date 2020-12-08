@extends('layouts.app',['eventList'=> $eventList])

@section('haederFiles')
    <link rel="stylesheet" href="{{ asset('css/postByCat.css') }}">
@endsection

@section('mainContent')

    <div class="top-paralax-title-Contaienr" style="background-image: linear-gradient(rgba(0, 0, 0, 0.186),rgba(253, 253, 253, 0.96)),url('{{ asset('/images/titleBoxBackImage.jpg') }}')">
        <h1 class="top-paralax-title">{{ $postsCatName->name }}</h1>
    </div>


    @foreach ($posts as $post)
            <div class="single-post-display-container animatedParent">

                <div class="single-post-image-thumbnail animated fadeInDown" style="background-image: url('{{ asset('/images/titleBoxBackImage.jpg') }}')"></div>

                <div class="single-post-content-box">
                    <p class="post-like-count-display"> likes : <strong>{{ $post->likes }}</strong></p>
                    <h4 class="post-title">{{ $post->name }}</h4>
                    <strong class="post-short-descrption"><p>{{ $post->shortDescription }}</p></strong>
                    <a href="{{ route('user.showSinglePost',$post->id) }}" class="post-readMore-link f jc ac">read more</a>
                </div>
            </div>
    @endforeach

        {{ $posts->links() }}
@endsection