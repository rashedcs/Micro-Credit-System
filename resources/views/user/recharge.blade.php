@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Recharge Cash') }}</div>
                {{Session::get('success')}}

                <div class="card-body">
                    <form method="POST" action="{{ route('user.recharge') }}">
                        @csrf

                        <div class="form-group row">
                         <label for="card" class="col-md-4 col-form-label text-md-right">{{ __('Card') }}</label>
                            <div class="col-md-6">
                               <input name="card" type="text" class="form-control" id="card" placeholder="Card" required value="{{ old('card') }}">         
                           </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
