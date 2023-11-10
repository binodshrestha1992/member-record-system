@extends('layout.layout')
@section('title', 'Create User Page')
@section('content')
<div class="login-container">
        <div class="left-container">
            <img src="{{asset('images/event.png')}}" alt="createuser">
        </div>
        <div class="right-container">
        <h2>CONTACT </h2>
        <form class='login-form' action="/login" method="POST">
            @csrf
            @method('POST')
            <label for="forname">Name</label>
            <input type="text" name="name" placeholder="Enter Name">
            <label for="foremail">Email</label>
            <input type="text" name="email" placeholder="Enter Email">
            <label for="forsubject">Subject</label>
            <input type="text" name="subject" placeholder="Enter Subject">
            <label for="formessage">Message</label>
            <textarea rows="5" cols="5"></textarea>
            <input type="submit" value="Send Message">
        </form>
        </div>
    </div>
        
@endsection
   