@extends('admin')
@section('content')
    <div class="row px-5 pt-3 col-7 justify-content-center align-items-center">
        <div class="card my-1 mx-1">
            <div class="card-header p-1 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-uppercase font-weight-bold text-xxs ps-3">Edit Account</h6>
                </div>
                <div class="card mx-2 my-3 ">
                    <form class="px-3 py-4" method="post" action="/account/{{ $user->id }}">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email"
                                value="{{ $user->email }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="name" name="name" class="form-control" id="name"
                                value="{{ $user->name }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/account"><button type="button" class="btn btn-secondary">Cancel</button></a>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
