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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>Monir Hossain</td>
                        <td>monirjhossain@gmail.com</td>
                        <td>0185625369</td>
                        <td>Narayanganj</td>
                        <td>5 July</td>
                        <td>Evening</td>
                        <td>Espresso Coffee</td>
                        <td>500 Cup</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection