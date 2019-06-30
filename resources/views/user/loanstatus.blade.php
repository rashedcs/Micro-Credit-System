@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Lists </div>

                <div class="card-body">
                    <tr>
                    <td>First Name</td>
                    <br>
                    </tr>
                    <tr>
                    <td>{{ $requests->name }}</td>
                    <br>
                    </tr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



