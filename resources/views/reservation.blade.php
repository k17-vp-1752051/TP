@extends('master') 
@section('title', 'View all tickets') 

@section('content')
    <div class="container col-md-8 col-md-offset-2">  
        <div class="panel panel-default"> 
            <div class="panel-heading"> 
                <h2> Reservation History </h2> 
            </div>
            @if (session('status')) 
                <div class="alert alert-success"> 
                    {{ session('status') }} 
                </div> 
            @endif

            <table class="table"> 
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Time</th>
            <th>People</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reservations as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td><a href="/admin/reservations/{{$row->id}}">{{$row->id}}</a></td>
            <td>{{$row->user_name}}</td>
            <td>{{$row->time}}</td>
        </tr>
        @endforeach
    </tbody>
            </table> 
           
        </div>
    </div>
@endsection

