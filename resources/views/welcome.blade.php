@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row gy-4">
            @forelse ($posts as $post)
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <img src="{{ $post->image }}" class="card-img-top" alt="">
                        </div>
                        <div class="card-body">
                            <h4>{{ $post->title }}</h4>
                            <div class="d-flex justify-content-between">
                                <strong>Author:{{ $post->user->name }}</strong>
                                <span>{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                            {{ Str::limit($post->description, 50) }}


                        </div>
                        <div class="card-footer">
                            <a href="" class="btn btn-primary d-block ">Read more..</a>
                        </div>
                    </div>
                </div>
            @empty
                No post found
            @endforelse

            <div class="col-12">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
