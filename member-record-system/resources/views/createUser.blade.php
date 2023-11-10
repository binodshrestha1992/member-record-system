@extends('layout.layout')
@section('title', 'Create User Page')
@section('content')
        <div class="main-content">
            <div class="left-content">
            <h2 class='create_user'>Create User </h2>
        <form class='add_user' action="/user/add" method="POST">
            @csrf
            @method('POST')
            <label for="forname">FirstName</label>
            <input type="text" name="first_name" placeholder="Enter FirstName" required>
            <label for="forname">LastName</label>
            <input type="text" name="last_name" placeholder="Enter LastName" required>
            <label for="foremail">Email</label>
            <input type="text" name="email" placeholder="Enter Email" required>
            <label for="foremail">Age</label>
            <input type="age" name="age" placeholder="Enter Age" required>
            <label for="foremail">Phone</label>
            <input type="integer" name="phone" placeholder="Enter Contact Number" required>
            <label for="foremail">Address</label>
            <input type="text" name="address" placeholder="Enter Address" required>
            <label for="foremail">Professional Summary</label>
            <textarea cols="5" rows="5" name="professional_summary" required></textarea>
            <input type="submit" value="Add">
        </form>
            </div>
            <div class="right-content">
                <img src="{{asset('images/create.png')}}" alt="create_user">
            </div>
        </div>
        
@endsection
   