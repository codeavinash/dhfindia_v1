@extends('layouts.app')

@section('headerFiles')
<link rel="stylesheet" href="{{ asset('css/pages/admin/uiOptions.css') }}">
<script src="{{ asset('js/pages/Admin/uiOptions.js') }}" defer></script>
@endsection

@section('mianContent')

<div class="containerBox">
    <form action="{{ route('adminuioptions.store') }}" method="post" enctype="multipart/form-data" accept="image/x-png,image/gif,image/jpeg">
        @csrf
        <label for="bannerImge" class="UploadBtn f-jc-ac"><i class="im im-cloud-upload"></i>upload new
        </label>
        <input type="file" name="bannerImge" class="no-display" id="bannerImge">
        <div id="imagePreViewBox" class="backgoundImageStyle"></div>
        <button name="submit" class="submitBtn">submit</button>
    </form>
</div>

@endsection