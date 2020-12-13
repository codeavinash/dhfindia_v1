@extends('layouts.app')

@section('haederFiles')
    <link rel="stylesheet" href="{{ asset('css/postByCat.css') }}">

    @can('managePost')
        <script src="{{ asset('js/Admin/deleteForm.js') }}" defer></script>
    @endcan

@endsection

@section('mainContent')

    <div class="top-paralax-title-Contaienr" style="background-image: linear-gradient(rgba(0, 0, 0, 0.186),rgba(253, 253, 253, 0.96)),url('{{ asset('/images/titleBoxBackImage.jpg') }}')">
        <h1 class="top-paralax-title">{{ $postsCatName->name }}</h1>
        <p class="top-paralax-short-d">{{ $postsCatName->shortDescription }}</p>
    </div>

    @can('managePost')
                   <form action="admin/post/" method="post" id="deletePostForm" style="display: none;">
                       @csrf
                       @method('DELETE');
                   </form>


                   @if (Session::has('PostDeletedsuccess'))
                       <div class="notification-box-post f ac">
                            post deleted successfully
                       </div>
                   @endif
    @endcan

    @foreach ($posts as $post)
            <div class="single-post-display-container animatedParent">

                <div class="single-post-image-thumbnail animated fadeInDown f jc ac" style="background-image: url('{{ asset($post->thumbnailUrl) }}')">
                
                    @can('managePost')
                    <div class="admin-options f jb ac">
                        <a href="{{ route('adminpost.update',$post->id) }}" class="admin-btns-post f jc ac update"><i class="im im-sync"></i>update post</a>
                        <a class="admin-btns-post f jc ac delete"><i class="im im-trash-can"></i>delete post <span style="display: none;">{{ $post->id }}</span></a>
                    </div>
                    @endcan

                </div>

                <div class="single-post-content-box">
                    <p class="post-like-count-display"> likes  <strong>@if ($post->likes)
                       : {{ $post->likes }}
                    @endif</strong></p>
                    <p class="post-like-count-display"> comments  <strong>@if ($post->comments)
                        : {{$post->comments}}
                    @endif</strong></p>
                    <h4 class="post-title">{{ $post->name }}</h4>   
                    <strong class="post-short-descrption"><p>{{ $post->shortDescription }}</p></strong>
                    <a href="{{ route('user.showSinglePost',$post->id) }}" class="post-readMore-link f jc ac">read more</a>
                </div>
            </div>
    @endforeach

        {{ $posts->links() }}
@endsection