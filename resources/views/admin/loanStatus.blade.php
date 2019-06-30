@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Lists </div>
                  <div class="card-body">
                           <h1>Hello, {{ $requests->count() }}</h1>
                                <table class="table table-striped">
                                <tr>
                                        <td>Id</td>
                                        <td>First Name</td>
                                        <td>Email</td>
                                        <td>Amount</td>
                                        <td>Status</td>
                                        <br>
                                </tr>
                                @foreach ($requests as $requests)
                                <tr>
                                <td>{{ $requests->id }}</td>
                                <td>{{ $requests->name }}</td>
                                <td>{{ $requests->email }}</td>
                                <td>{{ $requests->amount }}</td>
                                 @if($requests->approved!=Null)         
                                      <td>Recommend</td>  
                                @else
                                <td>
                                    <form method="POST" action="{{ route('admin.loanstatus') }}">
                                        @csrf
                                        <input type="hidden" name="approved" value="1" >
                                        <input type="hidden" name="email" value="{{ $requests->email }}" >
                                        <button type="submit">Approve</button>
                                    </form>  
                                </td>    
                                @endif
                                <br>
                                </tr>
                                @endforeach
                                </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!--
                        <form method="POST" action="{{ route('admin.loanstatus') }}">
                            <input type="hidden" name="approved" value="1" >
                            <input type="hidden" name="id" value="{{ $requests->id }}" >
                            <button type="submit">Approve</button>
                        </form>  
-->

