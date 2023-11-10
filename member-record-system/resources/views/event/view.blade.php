@extends('layout.layout')
@section('title', 'Event List')
@section('content')    
       <!-- Container Section -->
            <div class="content-title">
                <h2>Events List</h2>
            </div>
                <h5 class="add_crud"><a href="/event/create">Add Event</a></h5>
                <div class='scroll-table'>
                    <table>
                        <tr>
                            <th>Events Name</th>
                            <th>Action</th>
                        </tr>
                        @foreach($events as $p)
                        <tr>
                            <td>{{$p->event}}</td>
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