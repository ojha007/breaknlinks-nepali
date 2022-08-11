<div class="form-group ">
    {!! Form::label('title') !!}
    {!! Form::text('title',null,['class'=>formControl('title',$errors),'placeholder'=>'Enter Title','required',"style"=>"height:65px;font-size:25px"]) !!}
    @error('title') <span class="error invalid-feedback">{{ $message }}</span> @enderror
</div>
<div class="form-group">
    {!! Form::label('sub_title') !!}
    {!! Form::text('sub_title',null,['class'=>formControl('sub_title',$errors),'placeholder'=>'Enter Sub Title']) !!}
    @error('sub_title') <span class="error invalid-feedback">{{ $message }}</span> @enderror
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            {!! Form::label('reporter_id','Select Reporter') !!}
            {!! Form::select('reporter_id',$reporters,null,['class'=>formControl('reporter_id',$errors),' select2','placeholder'=>'----Select Reporter----']) !!}
            @error('reporter_id') <span class="error invalid-feedback">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-6">
            {!! Form::label('guest_id','Select Guest') !!}
            {!! Form::select('guest_id',$guests,null,['class'=>formControl('guest_id',$errors).' select2','placeholder'=>'----Select Guest----']) !!}
            @error('guest_id') <span class="error invalid-feedback">{{ $message }}</span> @enderror
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('date_line') !!}
    {!! Form::text('date_line',null,['class'=>formControl('date_line',$errors),'placeholder'=>'Date Line']) !!}
    @error('date_line') <span class="error invalid-feedback">{{ $message }}</span> @enderror
</div>





