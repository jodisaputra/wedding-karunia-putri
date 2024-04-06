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
                    <h1 class="m-0">{{ __('Events') }}</h1>
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
                            <a href="{{ route('events.create') }}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-plus-circle"></i> Create New Event</a>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Location</th>
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
                    ajax: "{{ route('events.index') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                        {data: 'event_name', name: 'event_name'},
                        {data: 'event_description', name: 'event_description'},
                        {data: 'location', name: 'location'},
                        {
                            data: 'images',
                            name: 'images',
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
