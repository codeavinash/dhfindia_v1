@extends('layouts.app')

@section('headerFiles')
    <link rel="stylesheet" href="{{ asset('css/conponents/makeNotification.css') }}">
@endsection

@section('mianContent')
    <div class="containerSection">

        <ul>
            <li><strong> make default notifications</strong></li>
            <li><a href="{{ route('admin.paymentNotification') }}">payment notification for all members</a></li>
        </ul>

        <form action="{{ route('admin.custumNotification') }}" method="post" id="notificationForm">

            @csrf

            <label for="type">type</label>
            <select name="userType" id="type">
                <option value="user">user</option>
                <option value="member">member</option>
            </select>

            <label for="link">provide link</label>
            <input type="text" name="link" id="link">

            <label for="text">notification text</label>
            <input type="text" name="notificationText" id="text">

            <button class="submitbrn">submit</button>
        </form>

        <table border="1">
            <tr>
                <th>type</th>
                <th>text</th>
                <th>option</th>
            </tr>
            @foreach ($notifications as $notification)
                <tr>
                    <td>{{ $notification->type}}</td>
                    <td>{{ $notification->notification}}</td>
                    <td><a href="{{ route('admin.deleteNotification',$notification->id) }}">delete</a></td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection