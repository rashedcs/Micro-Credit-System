@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    <h2>{{Session::get('success')}}</h2> 
                </div>

                <div class="card-body">
                   <form method="POST" action="{{ route('user.deposite') }}">
                        @csrf
                      <!--
                        <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                           <input type="hidden"id="name" class="form-control" name="name" value="{{ Auth::user()->name }}">
                            </div>
                        </div>

                       <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                          <div class="col-md-6">
                          <input type="hidden"id="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                          </div>
                        </div>

                                              <input type="hidden"id="year"  class="form-control"  name="year" value="{{ now()->year }}">
                        -->
                      <input type="hidden"id="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                      <input type="hidden"id="branch"  class="form-control"  name="branch" value="{{ Auth::user()->branch }}">



                        <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>
                            <div class="col-md-6">
                             <input id="amount" class="form-control" name="amount" readonly value="1000"  required>
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Month') }}</label>
                            <div class="col-md-6">
                      				<input id="month"  class="form-control"  name="month" readonly  value="{{ now()->month }}">
                            </div>
                        </div>


                        <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>
                            <div class="col-md-6">
                      				<input id="year"  class="form-control"  name="year" readonly  value="{{ now()->year }}">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!--

-->

 