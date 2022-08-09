@extends('backend.layouts.master')
@section('title_postfix') | News @endsection

@section('breadcrumb')

@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">All news are listed here.</h3>
                    <div class="card-tools pull-right">
                        <a href="" class="btn btn-primary">
                            <i class="fa fa-plus"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body"></div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
