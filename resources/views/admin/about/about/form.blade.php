<div class="form-group {{ $errors->has('opening_image') ? 'has-error' : ''}}">
    {!! Form::label('opening_image', 'Image', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('opening_image', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('opening_image', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('opening_text') ? 'has-error' : ''}}">
    {!! Form::label('opening_text', 'Opening Text', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('opening_text', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('opening_text', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
