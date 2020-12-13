
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create new post catagory | dinbandhu help foundation </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Admin/postOoptionst.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" defer></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js" defer></script>

<script src="{{ asset('js/Admin/postOption.js') }}" defer></script>

</head>
<body> 

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h2 class="display-4">Add new post</h2>
          <p class="lead">add post to any catagory by selecting that catagory</p>
          <p class="lead">kindly compress the image befour uploading <a href="https://compressjpeg.com/" target="_blank">click here to compress</a></p>
        </div>
    </div>

    @if (Session::has('postSussess'))
        <div class="alert alert-success" role="alert" style="width: 80%;margin:0 auto;">
        post updated successfully
        </div>
    @endif
    

    <form action="{{ route('adminpost.update',$post->id) }}" method="post" enctype="multipart/form-data" class="postCat-container">
        @csrf
        
        @method('PUT')


        <div class="form-group">
            <label for="postname">post title</label>
            <input type="text" name="name" id="postname" class="form-control" value="{{ $post->name }}" required>
        </div>

        <div class="form-group">
            <label >Short Description</label>
            <input type="text" name="shortDescription" class="form-control" value="{{ $post->shortDescription }}" required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">upload thumbnail</label>
            <input type="file" name="thumbnailUrl" class="form-control-file file-input" id="exampleFormControlFile1" >
        </div>


        <div class="image-preview-container f ja ac">
            <div class="image-preview-box f">
                <img src="{{ asset('images/imagepreviewBox.png') }}" alt="" class="mobile-preview">
                <div class="image-preview-mobile preview-here-one backgroundImage" style="background-image: url('{{ $post->thumbnailUrl }}')">

                </div>
            </div>
            <div class="image-preview-box">

                <img src="{{ asset('images/imagepreviewBoxSecond.png') }}" alt="" class="desktop-preview">
                <div class="image-preview-desktop preview-here-two backgroundImage" style="background-image: url('{{ $post->thumbnailUrl }}')">

                </div>

            </div>
        </div>

        <label for="summernote">add description</label>
        <textarea name="description" id="summernote" cols="30" rows="10" required>{{ $post->description }}</textarea>

        <button type="submit" class="submit-btn btn btn-primary">create</button>
    </form>


    
</body>
</html>