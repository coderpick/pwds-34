@extends('layouts.backend.master')
@section('content')
    <div class="page-heading">
        <h1 class="page-title">Category</h1>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Category Create</div>
                <a class="btn btn-danger" href="{{ route('admin.categories.index') }}">Back to list</a>
            </div>
            <div class="ibox-body">

                <form action="{{ route('admin.categories.update', $category->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="category"> Name</label>
                        <input class="form-control" type="text" id="category" name="category"
                            value="{{ $category->name ?? old('category') }}">
                        @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="slug"> Slug</label>
                        <input class="form-control" type="text" id="slug" name="slug"
                            value="{{ $category->slug ?? old('slug') }}">
                        @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('custom_js')
    <script>
        $(document).ready(function() {
            $('#category').keyup(function() {
                var category = $(this).val();
                var slug = category.replace(/\s+/g, '-').toLowerCase();
                $('#slug').val(slug);
            })
        })
    </script>
@endpush
