<div class="form-group">
    {!! Form::label('publish_date') !!}
    {!! Form::date('publish_date',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('category_id','Select Category') !!}
    {!! Form::select('is_anchor',[0=>'होइन',1=>'हो'],null,['class'=>'form-control select2','placeholder'=>'-----Select Category----']) !!}
</div>


<div class="form-group">
    {!! Form::label('banner_image') !!}
    {!! Form::file('image',['accept'=>'image/png,image/jpg,image/jpeg','image/webp']) !!}
</div>
<div class="form-group">
    {!! Form::label('image_description') !!}
    {!! Form::text('image_description',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    <div class="custom-control custom-switch">
        <input class="custom-control-input" type="checkbox" id="is_anchor" name="is_anchor" value="1">
        <label for="is_anchor" class="custom-control-label">Is Anchor News</label>
    </div>
</div>
<div class="form-group">
    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="is_special" value="1">
        <label class="custom-control-label" for="is_special">Is Special News</label>
    </div>
</div>
