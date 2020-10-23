@extends('layouts.app')

@section('headerFiles')
<link rel="stylesheet" href="{{ asset('css/pages/admin/uiOptions.css') }}">
<script src="{{ asset('js/pages/Admin/uioptions/showall.js') }}" defer></script>

@endsection

@section('mianContent')

<div id="csrf" class="no-display">{{ csrf_token() }}</div>


@foreach ($bannerImages as $image)
    <div class="backgoundImageStyle displayImgeBox" style="background-image:url('{{ asset($image->imageUrl) }}'); display:block ">
        <div class="deleteBtn f-jc-ac">
            <i class="im im-trash-can"></i>
            <span class="no-display">{{ $image->id }}</span>
        </div>
    </div>
@endforeach


<form action="/admin/uioptions/" method="post" class="no-display" id="submittingForm">
    <input type="hidden" name="_method" value="DELETE">
    @csrf
    <input type="text" name="bannerId" id="formId">
    
</form>


@endsection