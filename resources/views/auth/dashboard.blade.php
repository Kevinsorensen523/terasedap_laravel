@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in!
                    </div>
                @endif                
            </div>
            <button onclick="window.location.href='/add-food-item'" class="btn btn-primary">
                Go to Add Food Item
            </button>
            <button onclick="window.location.href='/categories'" class="btn btn-warning">
                Go to Category CRUD
            </button>
        </div>
    </div>    
</div>

@endsection