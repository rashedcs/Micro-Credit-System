@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                         <h1>Hello, {{ $name }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
