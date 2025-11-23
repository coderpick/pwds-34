@extends('layouts.app.master')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title mb-0">Users</h4>
                        </div>
                        <div>
                            <a href="{{ route('users.index') }}" class="btn btn-warning">Back to User</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </section>
@endsection
