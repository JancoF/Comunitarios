@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-primary" role="alert">
                        This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                      </div>
                        </div>
                    @endif

                    <div class="alert alert-danger" role="alert">
                        This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
