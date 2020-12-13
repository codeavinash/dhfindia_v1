@extends('layouts.app',['eventList'=> $eventList])

@section('haederFiles')
    <!-- adding page specific style and javascript -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="{{ asset('js/index.js') }}" defer></script>
@endsection

@section('mainContent')

<div class="swiper-container">
  <div class="swiper-wrapper">

    @foreach ($bannerimages as $image)
    <div class="swiper-slide" style="background-image: url('{{ asset($image->imageUrl) }}');"></div>
    @endforeach

</div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>

  <ul class="no-dislplay ThumbnailList">

    @foreach ($bannerimages as $image)
    <li>{{ asset($image->imageUrl) }} </li>
    @endforeach

      
  </ul>
</div>


<div class="Overflow-main-card-container f jc ac" style="background-image: linear-gradient(rgba(255, 166, 0, 0.678),rgba(255, 166, 0, 0.678)),url('{{ asset('images/backgroundimageOne.jpg') }}');">
  <div class="Overflow-main-container f ja ab animatedParent">
      <div class="overflow-Card animated fadeInUpShort" >
          <div class="Icon-Container f jc ac">
              <img src="{{ asset('images/donation image one.svg') }}" alt="" srcset="">
          </div>
          <h2>vission</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, numquam officiis! 
              Harum distinctio sequi sunt molestiae dicta doloribus repudiandae esse at!</p>


      </div>
      <div class="overflow-Card animated fadeInUpShort" >
          <div class="Icon-Container f jc ac">
              <img src="{{ asset('images/donation image second.svg') }}" alt="" srcset="">
          </div>
          <h2>mission</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, numquam officiis! 
              Harum distinctio sequi sunt molestiae dicta doloribus repudiandae esse at!</p>


      </div>

      <div class="overflow-Card animated fadeInUpShort" >
          <div class="Icon-Container f jc ac">
              <img src="{{ asset('images/donation image three.svg') }}" alt="" srcset="">
          </div>
          <h2>donation</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, numquam officiis! 
              Harum distinctio sequi sunt molestiae dicta doloribus repudiandae esse at!</p>
      </div>
      
  </div>
</div>

<div class="three-welcome-post-container">
      <div class="three-welcome-post-content-container f ja ac animatedParent" >
          <div class="Three-Imge-Grid-Container animated bounceInLeft delay-250">
              <div class="Big-Imge-Container" style="background-image: url('https://dinbandhuhelpfoundation.weebly.com/uploads/1/2/5/1/125115490/img-20190414-131127_orig.jpg');"></div>
              <div style="background-image: url('https://dinbandhuhelpfoundation.weebly.com/uploads/1/2/5/1/125115490/img-20190330-124428_orig.jpg');"></div>
              <div style="background-image: url('https://dinbandhuhelpfoundation.weebly.com/uploads/1/2/5/1/125115490/img-20190409-154530_orig.jpg');"></div>
          </div>
          <div class="three-text-box-container animated bounceInRight delay-250">
              <h1>welcome to <strong>dinbandhu</strong> help foundation</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus accusamus, iusto explicabo libero pariatur commodi esse veritatis totam molestiae, itaque, rerum doloribus sunt alias consectetur facilis nostrum corporis omnis quod.</p>
              <a href="{{ route('aboutus') }}" class="f jc ac">read more</a>
          </div>
      </div>
</div>

<div class="OurCause-section-container animatedParent">

  <h2 class="animated fadeInDownShort delay-750">our <strong>recent</strong> post</h2>
  <div class="Title-splitter f jc ac animated fadeInDownShort delay-750">
      <div></div>
      <img src="{{ asset('images/headingSplitter.svg') }}" alt="" srcset="">
      <div></div>
  </div>

  <p class="cause-short-desscription animated fadeInDownShort delay-750">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus unde ut cumque fugiat mollitia dignissimos repellendus voluptatibus, ipsa, ducimus, optio officiis velit commodi explicabo dolorem laudantium voluptate esse? Odit, in.
  </p>

  <div class="post-Swipre-container animated fadeInDownShort delay-750">
      <div class="swiper-wrapper">
          

          @foreach ($posts as $post)
            <div class="swiper-slide postBoxes">
            <div class="post-image-container" style="background-image: linear-gradient(rgba(0, 0, 0, 0),#ffffff),url('{{ asset($post->thumbnailUrl) }}');"></div>
            <div class="Post-text-container">
                <strong>likes : <span>{{ $post->likes }}</span></strong>
                <h3>{{ $post->name }}</h3>
                <p class="Post-Small-Description">{{ $post->shortDescription }}</p>
                <a href="{{ route('user.showSinglePost',$post->id) }}" class=" f jc ac Slide-Post-read-Btn">read more</a>
            </div>
            </div>
          @endforeach

          
        <!-- Add Pagination -->
        <div class="post-pagination"></div>
  </div>
</div>

<div class="Center-Achivment-Box" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.8)),url('{{ asset('images/backgroundimageTow.jpg') }}');">

  <div class="Achivemnt-Counter-container f ja ac animatedParent">
      <div class="f ja ac fc animated fadeInUp">
          <img src="{{ asset('images/smileFace.svg') }}" alt="" srcset="">
          <span class="Counter">{{ $homeData->donators }}</span>
          <h4>Hap<span>py Dona</span>tors</h4>
      </div>
      <div class="f ja ac fc animated fadeInUp delay-250">
          <img src="{{ asset('images/RocketLaunch.svg') }}" alt="" srcset="">
          <span class="Counter">{{ $homeData->mission }}</span>
          <h4>Suc<span>cess Miss</span>ion</h4>
      </div>
      <div class="f ja ac fc animated fadeInUp delay-500">
          <img src="{{ asset('images/personMask.svg') }}" alt="" srcset="">
          <span class="Counter">{{ $homeData->volenter }}</span>
          <h4>Volu<span>nteer Reac</span>hed</h4>
      </div>
  </div>

</div>

<div class="contact-us-container backgroundImage f jc ac" style="background-image: linear-gradient(rgba(0, 0, 0, 0.885),rgba(0, 0, 0, 0.885)),url('{{ asset('images/titleBoxBackImage.jpg') }}')">
        <div class="form-container">
                <div class="form-title f jc ac">contact us</div>
                <form action="{{ route('user.contactUsSubmit') }}" method="POST" class="contactUs-form-Box">
                    @if (Session::has('contactsus'))
                        <p class="contact-added">
                            we will reply you as soon as possible
                        </p>
                    @endif

                    

                    @csrf
                    <label for="userFullName">full name : @error('name')
                        <strong class="red">{{ $message }}</strong>
                        @enderror</label>
                    <input type="text" name="name" id="userFullName" required>
        
                    <label for="mobileNumber">mobile number :
                        @error('number')
                        <strong class="red">{{ $message }}</strong>
                        @enderror</label>
                    <input type="number" name="number" id="mobileNumber" required>
        
                    <label for="textMessage">message :@error('message')
                        <strong class="red">{{ $message }}</strong>
                        @enderror</label>
                    <textarea name="message" id="textMessage" required></textarea>
        
                    <button class="contactUs-form-btn">submit</button>
        
                </form>
        </div>
</div>

<div class="OurCause-section-container">

  <h2>image <strong>gallery</strong></h2>
  <div class="Title-splitter f jc ac">
      <div></div>
      <img src="{{ asset('images/headingSplitter.svg') }}" alt="" srcset="">
      <div></div>
  </div>

  <p class="cause-short-desscription">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus unde ut cumque fugiat mollitia dignissimos repellendus voluptatibus, ipsa, ducimus, optio officiis velit commodi explicabo dolorem laudantium voluptate esse? Odit, in.
  </p>

  <div class="image-galary-swip-container">
      <div class="swiper-wrapper">
        @foreach ($imageGalary as $image)
        <div class="swiper-slide" style="background-image:url({{ $image->imageUrl }})"></div>
        @endforeach

      </div>
      <!-- Add Pagination -->
      <div class="image-swap-pagination"></div>
    </div>
</div>

  <div class="PoweredBy-Container f jc ac">
      <div class="PoweredBy-heading-Container f jc ac">
          <h5>powered by</h5>
      </div>
      <div class="poweredby-slider-container">
          <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="https://www.flaticon.com/svg/static/icons/svg/731/731985.svg" alt=""></div>
              <div class="swiper-slide"><img src="https://www.flaticon.com/svg/static/icons/svg/2905/2905064.svg" alt=""></div>
              <div class="swiper-slide"><img src="https://www.flaticon.com/svg/static/icons/svg/2905/2905064.svg" alt=""></div>
              <div class="swiper-slide"><img src="https://www.flaticon.com/svg/static/icons/svg/2640/2640740.svg" alt=""></div>
              <div class="swiper-slide"><img src="https://www.flaticon.com/svg/static/icons/svg/2640/2640740.svg" alt=""></div>
              <div class="swiper-slide"><img src="https://www.flaticon.com/svg/static/icons/svg/2640/2640740.svg" alt=""></div>
              
            </div>
            <!-- Add Pagination -->
            <div class="powered-by-pagination"></div>
      </div>

  </div> 

  <div class="total-visitor-container f jc ac">
        total visitors : {{ $homeData->totalVisitos }}
  </div>
@endsection