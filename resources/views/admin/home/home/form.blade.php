<div class="form-group {{ $errors->has('welcome_text') ? 'has-error' : ''}}">
    {!! Form::label('welcome_text', 'Welcome Text', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('welcome_text', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('welcome_text', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('company_description') ? 'has-error' : ''}}">
    {!! Form::label('company_description', 'Company Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('company_description', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('company_description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {{-- <input type="button" value="Update" onclick="submitForms()" /> --}}
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
