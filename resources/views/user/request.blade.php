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
                   <form method="POST" action="{{ route('user.request') }}">
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
                        -->
                      <input type="hidden"id="name"  class="form-control"  name="name" value="{{ Auth::user()->name }}">
                      <input type="hidden"id="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                      <input type="hidden"id="branch"  class="form-control"  name="branch" value="{{ Auth::user()->branch }}">


                        <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>
                            <div class="col-md-6">
                             <input id="amount" class="form-control" name="amount" required>
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                             <div class="col-md-6">
                             <input id="description" type="textarea" class="form-control" name="description" required>
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

 