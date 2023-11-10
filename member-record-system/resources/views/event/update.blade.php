@extends('layout.layout')
@section('title', 'Create User Page')
@section('content')
        <div class="main-update-content">
            <div class="left-update-content">
                <img src="{{asset('images/create_user.png')}}" alt="create_user">
            </div>
            <div class="middle-update-content">
                <h2 class='create_user'>Update Event</h2>
                <form class='add_user' action="/event/{{$event->id}}/update" method="POST">
                @csrf
                @method('POST')
                    <label for="forname">Event</label>
                    <input type="text" name="event" placeholder="Enter Firstname" value="{{$event->event}}" required>
                    <input type="submit" value="Update">
                </form>
            </div>
            <div class="right-update-content">
                <img src="{{asset('images/create1.png')}}" alt="create_user">
            </div>
        </div>
@endsection
   