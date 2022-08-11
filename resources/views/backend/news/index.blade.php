@extends('backend.layouts.master')
@section('title_postfix') | News @endsection

@section('breadcrumb')

@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                {!! Form::open(['method'=>'GET']) !!}
                <div class="card-header">
                    <h3 class="card-title">Filter</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            {!! Form::label('category_id','Select Category') !!}
                            {!! Form::select('category_id',$categories,request()->get('category_id'),
                                        ['class'=>'form-control select2','placeholder'=>'Select Category']) !!}
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-info btn-sm" type="submit">
                        <i class="fa fa-filter"></i>
                        Filter
                    </button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">All news are listed here.</h3>
                    <div class="card-tools pull-right">
                        <a href="{{route('admin.news.create')}}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>View Count</th>
                            <th>Author</th>
                            <th>Publish Date</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        @inject('button','App\Http\Services\TableButton')
                        @foreach($allNews as $news)
                            <tr>
                                <td>{{$news->title}}</td>
                                <td>{{$news->category}}</td>
                                <td>{{$news->view_count}}</td>
                                <td>
                                    <p>Created By : {{$news->created_by}}</p>
                                    @if($news->updated_by)
                                        <p>Updated By : {{$news->updated_by}}</p>
                                    @endif
                                    @if($news->deleted_by)
                                        <p>Deleted By :{{$news->deleted_by}}</p>
                                    @endif
                                </td>
                                <td>{{$news->publish_date}}</td>
                                <td>
                                    @if(request()->routeIs('admin.news.archive'))
                                        {!! $button->restoreButton('admin.news.restore',$news->id) !!}
                                    @else

                                        {!! $button->editButton('admin.news.edit',$news->id) !!}
                                        {!! $button->deleteButton('admin.news.destroy',$news->id) !!}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
@endsection
