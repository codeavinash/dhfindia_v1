<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add new poast | dinbandhu help foundatoin</title>
<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" ></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js" ></script>

<script defer>
    $(document).ready(function() {
    $('#summernote').summernote();
    });
</script>

<link rel="stylesheet" href="{{ asset('css/pages/admin/addnewPost.css') }}">

</head>
<body>
    

    <a href="{{ url()->previous() }}" class="backBtn">back</a>

@if (count($postCat) == 0)

<div class="notificaton">
    no category found add category before  adding a new post
</div>
    
@else
<div class="fomrContainer">
    <div class="headding">
        create new post
    </div>

    <form action="{{ route('adminpost.store') }}" method="post" enctype="multipart/form-data" >
        @csrf
        <label for="cat"> select a catagory</label>
        <select name="category" required> 
            @foreach ($postCat as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>

        <label for="title">enter title </label>
        <input type="text" name="name" id="title">
    
        <label for="shortDescription">enter short description</label>
        <input type="text" name="shortDescription" id="shortDescription" required>
    
        <label for="thumbnailUrl">add a new thumbnail</label>
        <input type="file" name="thumbnailUrl" id="thumbnailUrl" required>

        {{-- <div class="imageBoxPreview">

        </div> --}}
    
        <label for="summernote">add description</label>
        <textarea name="description" id="summernote" cols="30" rows="10" required></textarea>

        <button>submit</button>
    </form>

</div>

@endif
</body>
</html>