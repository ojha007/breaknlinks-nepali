@extends('backend.layouts.master')
@section('title_postfix') |  News @endsection

@section('breadcrumb')
    Add News
@endsection
@section('content')
    {!! Form::open() !!}
    <div class="row">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Add News</h3>
                </div>
                <div class="card-body">
                    @include('backend.news.partials.form')
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-default">
                <div class="card-body">
                    @include('backend.news.partials.form2')
                </div>

            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-body">
                    @include('backend.news.partials.form3')
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-default">
                        <i class="fa fa-times"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-primary float-right">
                        <i class="fa fa-save"></i>
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

@endsection
