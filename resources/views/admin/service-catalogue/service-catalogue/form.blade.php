<div class="form-group {{ $errors->has('image_header') ? 'has-error' : ''}}">
    {!! Form::label('image_header', 'Image Header', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('image_header', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('image_header', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('opening_title') ? 'has-error' : ''}}">
    {!! Form::label('opening_title', 'Opening Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('opening_title', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('opening_title', '<p class="help-block">:message</p>') !!}
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
