@extends('layout.layout')
@section('title', 'Dashboard')
@section('content')    
       <!-- Container Section -->
            <div class="content-title">
                <h2>Participants List</h2>
            </div>
                <h5 class="add_crud"><a href="/user/create">Add User</a></h5>
                <div class='scroll-table'>
                    <table>
                        <tr>
                           <th>Name</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Professional Summary</th>
                            <th>Action</th>
                        </tr>
                        @foreach($participants as $p)
                        <tr>
                            <td>{{$p->full_name}}</td>
                            <td>{{$p->age}}</td>
                            <td>{{$p->address}}</td>
                            <td>{{$p->phone}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->professional_summary}}</td>
                            <td>
                                <a href="{{$p->id}}/edit">Edit</a>
                                <form action="{{$p->id}}/delete" method="POST" onsubmit="return confirm('Are you sure you want to delete this participant?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
@endsection