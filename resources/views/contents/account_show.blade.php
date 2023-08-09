@extends('admin')
@section('content')
    <div class="row px-5 pt-3 col-7 justify-content-center align-items-center">
        <div class="col-10">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

        </div>
        <div class="card my-1 mx-1">

            <div class="card-header p-1 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-uppercase font-weight-bold text-xxs ps-3">Account Details</h6>
                </div>

            </div>
            <img class="rounded mx-auto my-3 img-thumbnail" alt="profile" src="https://source.unsplash.com/random/300x300">

            <div class="card-body mx-2 my-3 text-center">
                <h6>{{ $user->name }}</h6>
                <p>{{ $user->email }}</p>
            </div>
        </div>
    </div>
@endsection
