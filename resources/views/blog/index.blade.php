@extends('layouts.app')
@section('content')
    @if (session()->has('message'))
        <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
            <i class="bi-exclamation-octagon-fill"></i>
            <strong class="mx-2">Success!</strong>
            {{ session()->get('message') }}
        </div>
    @endif

    <x-title></x-title>

    @if (Auth::check())
        <button type="button" class=" mx-5 btn btn-secondary" data-mdb-ripple-init>
            <a href="/blog/create" class=" text-decoration-none text-white ">
                Create anew Post
            </a>
        </button>
        <hr>
    @endif

    @foreach ($posts as $post)
        <div clas="container">
            <div class="row  px-5">

                <div class="col-md-4 mb-4 d-block ">
                    <div class="bg-image hover-overlay shadow-1-strong rounded " data-mdb-ripple-init
                        data-mdb-ripple-color="light">
                        <img src="/images/{{ $post->image_path }}" class="img-fluid" width="600px" height="90vh" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>


                <div class="col-md-4 mb-4">
                    <h2>
                        {{ $post->title }}
                    </h2>
                    <div>
                        By:
                        <span>{{ $post->user->name }}
                            on {{ date('d-m-y', strtotime($post->updated_at)) }}</span>
                        <p>
                            {{ $post->description }}
                        </p>
                        <button type="button" class="btn btn-secondary" data-mdb-ripple-init>
                            <a href="/blog/{{ $post->slug }}" class=" text-decoration-none text-white ">
                                Read more</a> </button>
                    </div>
                </div>


            </div>

        </div>
        <hr>
    @endforeach
@endsection











{{-- //for tests --}}
<!-- <div class="container fluid ">
   <div>
       <img src="/images/{{ $post->image_path }}" alt="" width="300px" >
    </div>
    <div>
        <h2>
            {{ $post->title }}
        </h2>
    </div>
    <div>
        By:
     {{ $post->user->name }}
     on {{ date('d-m-y', strtotime($post->updated_at)) }}
        <p>
           {{ $post->description }}
        </p>
        <a href="/blog/{{ $post->slug }}">Read more</a>
    </div> -->
