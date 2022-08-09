<div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Enter Title','required',"style"=>"height:65px;font-size:25px"]) !!}
</div>
<div class="form-group">
    {!! Form::label('sub_title') !!}
    {!! Form::text('sub_title',null,['class'=>'form-control','placeholder'=>'Enter Sub Title']) !!}
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            {!! Form::label('report_id','Select Reporter') !!}
            {!! Form::select('report_id',[0=>'होइन',1=>'हो'],null,['class'=>'form-control select2','placeholder'=>'----Select Reporter----']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('guest_id','Select Guest') !!}
            {!! Form::select('guest_id',[0=>'होइन',1=>'हो'],null,['class'=>'form-control select2','placeholder'=>'----Select Guest----']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('date_line') !!}
    {!! Form::text('date_line',null,['class'=>'form-control','placeholder'=>'Date Line']) !!}
</div>





