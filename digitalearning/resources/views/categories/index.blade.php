@extends('layouts.app')



@section('content')

@if(Auth::user()->role_id == 1)
    <section style="margin-top:10px;" class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('categories.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(Auth::user()->role_id == 2)
    <section style="margin-top:10px;" class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('categories.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endif
    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('categories.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    
@endsection

