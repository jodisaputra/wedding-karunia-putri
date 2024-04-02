@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css') }}/dataTables.bootstrap4.css">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Users') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('stories.create') }}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-plus-circle"></i> Create New Story</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Moment Date</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@push('scripts')
    <script src="{{ asset('js/dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(document).ready(function () {
            $.noConflict();
            $('#example').DataTable(
                {
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('stories.index') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                        {data: 'title', name: 'title'},
                        {data: 'description', name: 'description'},
                        {data: 'moment_date', name: 'moment_date'},
                        {
                            data: 'image',
                            name: 'image',
                            render: function (data, type, full, meta) {
                                return '<img src="{{ asset('storage/') }}/' + data + '" style="max-width:100px;max-height:100px">';
                            }
                        },
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                }
            );
            $('#example').parent().addClass('table-responsive');
        });
    </script>
@endpush
