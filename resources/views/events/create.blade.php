@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Create New Event') }}</h1>
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
                        <div class="card-body">
                            <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="event_name">{{ __('Event Name') }}</label>
                                    <input id="event_name" type="text"
                                           class="form-control @error('event_name') is-invalid @enderror"
                                           name="event_name"
                                           value="{{ old('event_name') }}">
                                    @error('event_name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="event_description">{{ __('Event Description') }}</label>
                                    <textarea id="event_description"
                                              class="form-control @error('event_description') is-invalid @enderror"
                                              name="event_description">{{ old('event_description') }}</textarea>
                                    @error('event_description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="location">{{ __('Location') }}</label>
                                    <input id="location" type="text"
                                           class="form-control @error('location') is-invalid @enderror"
                                           name="location" value="{{ old('location') }}">
                                    @error('location')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="images">{{ __('Image') }}</label>
                                    <input id="images" type="file"
                                           class="form-control @error('images') is-invalid @enderror" name="images"
                                    >
                                    @error('images')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
