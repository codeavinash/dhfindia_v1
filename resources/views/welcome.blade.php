@extends('layouts.app')

@section('headerFiles')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
<link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
<script src="{{ asset('js/pages/home.js') }}" defer></script>
@endsection

@section('mianContent')

<div class="swiper-container">
    <div class="swiper-wrapper">
        @if ($bannerimages)
        @foreach ($bannerimages as $image)
        <div class="swiper-slide" style="background-image: url('{{ asset($image->imageUrl) }}')"></div>
           @endforeach
            @else 
          <div class="swiper-slide">sorry no image found</div>
       @endif
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>

  <div class="fullwidthBox">
    <h2>title post image</h2>
    <div class="borderBottom">
      <div></div>
    </div>

    <div class="fullContentBox">
      <div class="fullImageBox" style="background-image: url('https://dinbandhuhelpfoundation.weebly.com/uploads/1/2/5/1/125115490/result-1598855569772_orig.jpg')">

      </div>
      <div class="fullTextBox">
          <h4>information short discription</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eius nobis animi maxime ullam ut doloremque fugit, quae vel molestiae harum. Aspernatur possimus, debitis magnam inventore tempore aperiam ipsum est.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore eius nobis animi maxime ullam ut doloremque fugit, quae vel molestiae harum. Aspernatur possimus, debitis magnam inventore tempore aperiam ipsum est.</p>
      </div>
    </div>
  </div>

  <div class="vissionMissionBox">
    <div>
      <h2>vission</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas suscipit autem earum? Fugiat repellat amet unde enim pariatur commodi nisi aut minima, praesentium eaque, nostrum magnam maiores voluptates incidunt itaque!</p>
    </div>
    <div>
      <h2>mission</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas suscipit autem earum? Fugiat repellat amet unde enim pariatur commodi nisi aut minima, praesentium eaque, nostrum magnam maiores voluptates incidunt itaque!</p>
    </div>
  </div>

  <div class="paralaxBox f-jc-ac">
      <h2> our tage line goes here</h2>
  </div>



  @if ($posts)
      @foreach ($posts as $post)
      <a href="{{ route('user.showSinglePost',$post->id) }}">
        <div class="postBox" style="background-image: linear-gradient(rgba(255, 255, 255, 0),black),url('{{ asset($post->thumbnailUrl) }}')">
          <div>
            <h2>{{ $post->name }}</h2>
            <p>{{ $post->shortDescription }}</p>
          </div>
          
        </div>
      </a>
      @endforeach
  @endif



@endsection