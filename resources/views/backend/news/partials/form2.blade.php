<div class="form-group">
    {!! Form::label('publish_date') !!}
    {!! Form::dateTimeLocal('publish_date',null,['class'=>formControl('publish_date',$errors)]) !!}
    @error('publish_date') <span class="error invalid-feedback">{{ $message }}</span> @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id','Select Category') !!}
    {!! Form::select('category_id',$categories,null,['class'=>formControl('category_id',$errors).' select2','placeholder'=>'-----Select Category----']) !!}
    @error('category_id') <span class="error invalid-feedback">{{ $message }}</span> @enderror
</div>


<div class="form-group">
    {!! Form::label('banner_image') !!}
    {!! Form::file('image',['accept'=>'image/png,image/jpg,image/jpeg','image/webp']) !!}
    @error('image') <span class="error invalid-feedback">{{ $message }}</span> @enderror
</div>
<div class="form-group">
    {!! Form::label('image_description') !!}
    {!! Form::text('image_description',null,['class'=>formControl('image_description',$errors)]) !!}
    @error('image_description') <span class="error invalid-feedback">{{ $message }}</span> @enderror
</div>
<div class="form-group">
    <div class="custom-control custom-switch">
        <input type="hidden" name="is_anchor" value="0">
        {!! Form::checkbox('is_anchor','1',null,['class'=>'custom-control-input','id'=>'is_anchor']) !!}
        <label for="is_anchor" class="custom-control-label">Is Anchor News</label>
        @error('is_anchor') <span class="error invalid-feedback">{{ $message }}</span> @enderror
    </div>
</div>
<div class="form-group">
    <div class="custom-control custom-switch">
        <input type="hidden" name="is_special" value="0">
        {!! Form::checkbox('is_special','1',null,['class'=>'custom-control-input','id'=>'is_special']) !!}
        <label class="custom-control-label" for="is_special">Is Special News</label>
        @error('is_special') <span class="error invalid-feedback">{{ $message }}</span> @enderror
    </div>
</div>
