<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('external_link') !!}
            {!! Form::text('external_link',null,['class'=>formControl('external_link',$errors),'placeholder'=>'Enter External Link']) !!}
            @error('external_link') <span class="error invalid-feedback">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('video_link') !!}
            {!! Form::text('video_link',null,['class'=>formControl('video_link',$errors),'placeholder'=>'Enter Youtube Link']) !!}
            @error('video_link') <span class="error invalid-feedback">{{ $message }}</span> @enderror
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('sub_description') !!}
    {!! Form::textarea('sub_description',null,['class'=>formControl('sub_description',$errors),'rows'=>'4']) !!}
    @error('sub_description') <span class="error invalid-feedback">{{ $message }}</span> @enderror
</div>

<div class="form-group">
    {!! Form::label('description') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
    @error('description') <span class="error invalid-feedback">{{ $message }}</span> @enderror

</div>
