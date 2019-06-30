@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Balance : {{$sum}}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <h3>Balance : $sum</h3
                        </div>
                    @endif			
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
