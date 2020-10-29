@extends('layouts.app')
@section('headerFiles')
<link rel="stylesheet" href="{{ asset('css/pages/admin/postCat.css') }}">
<script src="{{ asset('js/imagepreview.js') }}" defer></script>

@endsection
@section('mianContent')
<form action="{{ route('adminPostcat.update',$cat->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <label for="name">enter name of category</label>
    <input type="text" name="name" id="name" value="{{ $cat->name }}" required>
    <label for="thumbnailUrl">add a new thumbnail</label>
    <input type="file" name="thumbnailUrl" id="thumbnailUrl" class="imageInputField">
    <div class="imageBox backgoundImageStyle" style="background-image: url('{{ asset($cat->thumbnailUrl) }}')">
    </div>
    <label for="shortDescription">Enter short Description</label>
    <input type="text" name="shortDescription" id="shortDescription" value="{{ $cat->shortDescription }}">
    <button name="submit" class="submitBtn">
        update
    </button>
</form>
@endsection