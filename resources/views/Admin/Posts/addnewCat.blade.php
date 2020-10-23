@extends('layouts.app')
@section('headerFiles')
<link rel="stylesheet" href="{{ asset('css/pages/admin/postCat.css') }}">
@endsection
@section('mianContent')
<form action="{{ route('adminPostcat.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">enter name of category</label>
    <input type="text" name="name" id="name" required>
    <label for="thumbnailUrl">add a new thumbnail</label>
    <input type="file" name="thumbnailUrl" id="thumbnailUrl">
    <div class="imageBox no-display">
    </div>
    <label for="shortDescription">Enter short Description</label>
    <input type="text" name="shortDescription" id="shortDescription">
    <button name="submit" class="submitBtn">
        create
    </button>
</form>
@endsection