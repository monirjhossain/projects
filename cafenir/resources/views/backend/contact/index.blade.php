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
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        </tr>
                    </thead>
                    @foreach ($contacts as $contact)
                    <tbody>
                        <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ $contact->message }}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection