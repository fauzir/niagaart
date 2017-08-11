<div class="form-group {{ $errors->has('banner_image') ? 'has-error' : ''}}">
    {!! Form::label('banner_image', 'Banner Image*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('banner_image', null, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
</div><div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('image', null, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
</div><div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tagline') ? 'has-error' : ''}}">
    {!! Form::label('tagline', 'Tagline*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('tagline', null, ['class' => 'form-control', 'maxlength' => '124', 'required' => 'required']) !!}
        {!! $errors->first('tagline', '<p class="help-block">:message</p>') !!}
        <p align="right">max 124 characters</p>
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control ckeditor', 'required' => 'required']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    {!! Form::label('type', 'Type*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      <select class="form-control" name="type">
          <option value="interior">Interior Design</option>
          <option value="other">Other Interior</option>
      </select>
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('publish') ? 'has-error' : ''}}">
    {!! Form::label('publish', 'Publish*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      <select class="form-control" name="publish">
          <option value="yes">Yes</option>
          <option value="no">No</option>
      </select>
        <p>* cannot be blank</p>
        {!! $errors->first('publish', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
