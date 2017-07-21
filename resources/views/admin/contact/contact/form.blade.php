<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    {!! Form::label('phone', 'Phone', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('other_phone') ? 'has-error' : ''}}">
    {!! Form::label('other_phone', 'Other Phone', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('other_phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('other_phone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('work_hour') ? 'has-error' : ''}}">
    {!! Form::label('work_hour', 'Work Hour', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('work_hour', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('work_hour', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('side_image') ? 'has-error' : ''}}">
    {!! Form::label('side_image', 'Side Image', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('side_image', null, ['class' => 'form-control']) !!}
        {!! $errors->first('side_image', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', 'Address', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('address', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
