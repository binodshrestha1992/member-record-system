@extends('layout.layout')
@section('title', 'Create User Page')
@section('content')
        <div class="main-update-content">
            <div class="left-update-content">
                <img src="{{asset('images/create_user.png')}}" alt="create_user">
            </div>
            <div class="middle-update-content">
                <h2 class='create_user'>Update User</h2>
                <form class='add_user' action="/user/{{$participant->id}}/update" method="POST">
                @csrf
                @method('POST')
                    <label for="forname">FirstName</label>
                    <input type="text" name="first_name" placeholder="Enter Firstname" value="{{$participant->first_name}}" required>
                    <label for="forname">LastName</label>
                    <input type="text" name="last_name" placeholder="Enter Lastname" value="{{$participant->last_name}}" required>
                    <label for="foremail">Email</label>
                    <input type="text" name="email" placeholder="Enter Email" value="{{$participant->email}}" required>
                    <label for="foremail">Age</label>
                    <input type="age" name="age" placeholder="Enter Age in Number" value="{{$participant->age}}" required>
                    <label for="foremail">Phone</label>
                    <input type="integer" name="phone" placeholder="Enter phone" value="{{$participant->phone}}" required>
                    <label for="foremail">Address</label>
                    <input type="text" name="address" placeholder="Enter address" value="{{$participant->address}}" required>
                    <label for="foremail">Professional Summary</label>
                    <textarea cols="5" rows="5" name="professional_summary" required>{{$participant->professional_summary}}</textarea>
                    <input type="submit" value="Update">
                </form>
            </div>
            <div class="right-update-content">
                <img src="{{asset('images/create1.png')}}" alt="create_user">
            </div>
        </div>
@endsection
   