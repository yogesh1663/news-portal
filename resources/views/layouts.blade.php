@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Sidebar
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="{{ route('category.index') }}" class="list-group-item">Categories</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
@endsection
