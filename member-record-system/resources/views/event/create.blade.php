@extends('layout.layout')
@section('title', 'create_event')
@section('content')
<div class="login-container">
        <div class="left-container">
            <img src="{{asset('images/event.png')}}" alt="createuser">
        </div>
        <div class="right-container">
        <h2>Add Event</h2>
        <form class='login-form' action="/store/event" method="POST">
            @csrf
            @method('POST')
            <label for="foremail">Name</label>
            <input type="text" name="name" placeholder="Enter Event Name" required>
            <input type="submit" value="Add Event">
        </form>
        </div>
    </div>
@endsection