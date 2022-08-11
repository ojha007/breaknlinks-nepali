@extends('backend.layouts.master')
@section('header')
    Author
@stop
@section('subHeader')
    List of all guest and reporter
@stop
@section('content')

    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Create / Edit reporter or guest</h3>
        </div>
        @if($author)
            {!! Form::model($author,['route'=>['admin.authors.update',$author->id],'class'=>'form-horizontal','method'=>'PATCH']) !!}
        @else
            {!! Form::open(['route'=>'admin.authors.store','class'=>'form-horizontal']) !!}
        @endif
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('name',) !!}
                        {!! Form::text('name',null,['class'=>formControl('name',$errors),'required']) !!}
                        @error('name') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('type','Select author type') !!}
                        {!! Form::select('type',$types,null,['class'=>formControl('type',$errors),'placeholder'=>'Select Type']) !!}
                        @error('type') <span class="error invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('image') !!}
                        {!! Form::file('image',['accept'=>'image/png,image/jpg,image/jpeg','class'=>'form-control']) !!}
                        @error('image') <span class="error invalid-feedback">{{ $message }}</span> @enderror
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
            <h3 class="card-title">List of all reporters and guests.</h3>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-stripped">
                <thead>
                <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Image</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>
                @inject('button','App\Http\Services\TableButton')
                @foreach($authors as $key=>$author)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$author->name}}</td>
                        <td>{{ucfirst($author->type)}}</td>
                        <td></td>
                        <td>
                            {!! $button->editButton('admin.authors.edit',$author->id) !!}
                            {!! $button->deleteButton('admin.authors.destroy',$author->id) !!}
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
