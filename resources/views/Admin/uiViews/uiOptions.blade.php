@extends('layouts.app')

@section('headerFiles')
<link rel="stylesheet" href="{{ asset('css/pages/admin/uiOptions.css') }}">
@endsection

@section('mianContent')

<div class="containerBox">
    <h4>home bannet options</h4>
    <div class="buttoncontainer f-ja-ac">
        <a href="{{ route('adminuioptions.create') }}">add a new banner</a>
        <a href="{{ route('admin.showallimage') }}">show all banner</a>
    </div>

</div>



@endsection