<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('external_link') !!}
            {!! Form::text('external_link',null,['class'=>'form-control','placeholder'=>'Enter External Link']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('video_link') !!}
            {!! Form::text('video_link',null,['class'=>'form-control','placeholder'=>'Enter Youtube Link']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('sub_description') !!}
    {!! Form::textarea('sub_description',null,['class'=>'form-control','rows'=>'4']) !!}
</div>

<div class="form-group">
    {!! Form::label('description') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>
