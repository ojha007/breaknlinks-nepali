@extends('backend.layouts.master')
@section('header')
    Category
@stop
@section('subHeader')
    List of News Category
@stop
@section('content')

    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Create / Edit Category</h3>
        </div>
        @if($category)

            {!! Form::model($category,['route'=>['admin.categories.update',$category->id],'class'=>'form-horizontal']) !!}
        @else
            {!! Form::open(['route'=>'admin.categories.store','class'=>'form-horizontal']) !!}
        @endif
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('title',) !!}
                        {!! Form::text('title',null,['class'=>formControl('title',$errors),'required']) !!}
                        @error('title') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('slug') !!}
                        {!! Form::text('slug',null,['class'=>formControl('slug',$errors),'required']) !!}
                        <span class="text-info">Use (-) if required (Eg: national-news,hot-news)</span>
                        @error('slug') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('parent_id','Select Parent Category') !!}
                        {!! Form::select('parent_id',$parentCategories,null,['class'=>formControl('parent_id',$errors),'placeholder'=>'Select Parent Category']) !!}
                        @error('parent_id') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-danger" type="button">
                <i class="fa fa-times"></i>
                Reset
            </button>
            <button class="btn btn-success" type="submit">
                <i class="fa fa-save"></i>
                Submit
            </button>
        </div>
        {!! Form::close() !!}
    </div>


    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">List of all news category</h3>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-stripped">
                <thead>
                <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Parent Category</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>
                @inject('button','App\Http\Services\TableButton')
                @foreach($allCategories as $key=>$category)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$category->title}}</td>
                        <td>{{$category->parentCategory()->exists() ? $category->parentCategory->title : ''}}</td>
                        <td>
                            {!! $button->editButton('admin.categories.edit',$category->id) !!}
                            {!! $button->deleteButton('admin.categories.destroy',$category->id) !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">

        </div>
    </div>

@endsection
