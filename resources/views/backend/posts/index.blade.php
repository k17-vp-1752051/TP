@extends('master') 
@section('title', 'All posts') 

@section('content')
    <div class="container col-md-8 col-md-offset-2"> 
        <div class="panel panel-default"> 
            <div class="panel-heading"> 
                <h2> All Reservations History </h2> 
            </div> 
            @if (session('status')) 
                <div class="alert alert-success"> 
                    {{ session('status') }} 
                </div> 
            @endif 
            @if ($posts->isEmpty()) 
                <!-- <p> There is no Reservations.</p>  -->
            @else
                <!-- <table class="table"> 
                    <thead> 
                        <tr> 
                            <th>ID</th> 
                            <th>Title</th> 
                            <th>Slug</th> 
                            <th>Created At</th> 
                            <th>Updated At</th>
                        </tr> 
                    </thead> 
                <tbody> 
                @foreach($posts as $post)
                    <tr>
                        <td>{!! $post->id !!}</td> 
                        <td> 
                        <a href="{!! action('Admin\PostsController@edit', $post->id) !!}">{!! $post->title !!} </a>
                        </td> 
                        <td>{!! $post->slug !!}</td> 
                        <td>{!! $post->created_at !!}</td> 
                        <td>{!! $post->updated_at !!}</td> 
                    </tr> 
                @endforeach 
                </tbody> 
            </table>  -->
            @endif

            <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">People</th>
                <th scope="col">Date-Time</th>
                <th scope="col">Restaurant</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>4</td>
                <td>27/9/2020 - 17:30</td>
                <td>KFC 99 Ngo Quyen Street, 11 Ward, 5 District</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>2</td>
                <td>27/9/2020 - 20:30</td>
                <td>Starbucks 141 Nguyen Hue Street, Ben Nghe Ward, 1 District</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>5</td>
                <td>27/9/2020 - 18:00</td>
                <td>The Coffee House 86 Cao Thang Street, 4 Ward, 3 District</td>
                </tr>
            </tbody>
            </table> 
        </div> 
    </div>
@endsection