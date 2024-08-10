@extends('layouts.app')
@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
            <i class="bi-check-circle-fill"></i>
            <strong class="mx-2">Success!</strong> {{ session()->get('message') }}

        </div>
    @endif

    <div class="container">
        <div class="container text-center m-3">
            <h1 class="fw-bold"> {{ $post->title }}</h1>
        </div>

        <div class="container text-center pt-15 ">
            <div class="p-2"> By: <span class=" fst-italic  ">
                    {{ $post->user->name }}</span>
                on <span class=" fst-italic "> {{ date('d-m-y', strtotime($post->updated_at)) }}</span>
            </div>
            <div class="container">

                <img src="/images/{{ $post->image_path }}" alt="" width="500px" height="450">

                <p class=" container mt-3">
                    {{ $post->description }}
                </p>

            </div>


            @if (Auth::user() && Auth::user()->id == $post->user_id)
                <button type="button" class="btn btn-success mb-2" data-mdb-ripple-init>
                    <a href="/blog/{{ $post->slug }}/edit" class=" text-decoration-none text-white "> Edit Post</a>
                </button>

                <form action="/blog/{{ $post->slug }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger mb-2">Delete</button>
                </form>
            @endif
        </div>
    </div>
@endsection
