@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body ">
                        @foreach ($posts as $post)
                            <div class="post border mb-3">
                                <h1>{{ $post->title }}</h1>
                                <p>{{ $post->description }}</p>
                                <p>Post By: {{ $post->user?->name }}</p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
