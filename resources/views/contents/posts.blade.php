@extends('admin')
@section('content')
    <div class="container-fluid px-3 pt-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-uppercase font-weight-bold text-xxs ps-3">Posts Table</h6>
                            <div class="card-body p-1 px-4 py-3"><button class="btn btn-success">Add</button></div>
                        </div>

                    </div>
                    <div class="card-body px-2 ">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs text-center font-weight-bolder  opacity-7 px-5">
                                            Title</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center  opacity-7 ps-2">
                                            Description</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            Author</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            Date</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td class="align-middle text-center">

                                                <h6 class="mb-1 text-wrap" style="">{{ $post->title }}</h6>

                                            </td>
                                            <td class="align-middle text-center">
                                                <p class="font-weight-bold mb-0 text-wrap " style="width:15rem">
                                                    {{ $post->description }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="d-flex justify-content-center"
                                                    style="width:10vh">{{ $post->author }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold"
                                                        style="width:10vh">{{ Carbon\Carbon::parse($post->created_at)->format('d F Y') }}</span>
                                                </div>
                                            </td>

                                            <td class="align-middle text-center" style="width:15rem">
                                                <div class="d-flex justify-content-center py-2"><button
                                                        class="btn btn-primary">View</button></div>
                                                <div class="d-flex justify-content-center py-2"><button
                                                        class="btn btn-warning">Edit</button></div>
                                                <div class="d-flex justify-content-center py-2"><button
                                                        class="btn btn-danger">Delete</button></div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
