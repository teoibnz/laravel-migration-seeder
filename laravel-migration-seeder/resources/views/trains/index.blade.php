@extends("layouts.main")

@section("main-content")
<table class="table p-3">
    <thead>
        <tr>
        <th scope="col">Company Name</th>
        <th scope="col">Departure Fromn</th>
        <th scope="col">Arrive In</th>
        <th scope="col">Departure at </th>
        <th scope="col">Arrive at </th>
        <th scope="col">Train N.</th>
        <th scope="col">Numbers of Carriages </th>
        <th scope="col">in time</th>
        <th scope="col">Deleted</th>
        <th scope="col">Departure Date</th>
        
        </tr>
    </thead>
    <tbody>
        @foreach($trains as $train)
        <tr>
            <th scope="row">{{ $train->id }} </th>
            <td> {{$train->company_name}} </td>
            <td>{{$train->departures_station}}</td>
            <td>{{$train->arrivals_station}}</td>
            <td>{{$train->departures_time}}</td>
            <td>{{$train->arrivals_time}}</td>
            <td>{{$train->train_code}}</td>
            <td>{{$train->number_of_carriages}}</td>
            <td>{{$train->is_in_time}}</td>
            <td>{{$train->is_deleted}}</td>
            <td>{{$train->departures_date}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection