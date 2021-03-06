@extends('layouts.dashboard_master')
@section('dashboard_content')
<div class="card">
    <div class="card-header">
        Reservations
    </div>
    <div class="cord-body">
        <div class="container col-md-12">
            <div class="wrapper wrapper-content">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Category</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                        <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->phone }}</td>
                        <td>{{ $reservation->address }}</td>
                        <td>{{ $reservation->date }}</td>
                        <td>{{ $reservation->time }}</td>
                        <td>{{ $reservation->category }}</td>
                        <td>{{ $reservation->quantity }}</td>
                        <td>{{ $reservation->message }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection