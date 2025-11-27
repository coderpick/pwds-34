@extends('layouts.backend.master')
@section('content')
    <div class="page-heading">
        <h1 class="page-title">Category</h1>
    </div>
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Category</div>
                <a class="btn btn-primary" href="{{ route('admin.categories.create') }}">Add New</a>
            </div>
            <div class="ibox-body">
                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($categories as $key=> $category)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->created_at->diffForHumans() }}</td>
                                <td>
                                    <a class="btn btn-info"
                                        href="{{ route('admin.categories.edit', $category->id) }}">Edit</a>
                                    <a class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @empty
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link href="{{ asset('assets/backend/vendors/DataTables/datatables.min.css') }}" rel="stylesheet" />
@endpush

@push('custom_css')
    <style>

    </style>
@endpush
@push('js')
    <script src="{{ asset('assets/backend/vendors/DataTables/datatables.min.js') }}" type="text/javascript"></script>
@endpush
@push('custom_js')
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
@endpush
