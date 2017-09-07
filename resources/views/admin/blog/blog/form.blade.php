<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    {!! Form::label('category', 'Category', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      <select class="form-control" name="category">
        @foreach ($categories as $category)
          <option value="{{ $category->category }}">{{ $category->category }}</option>
        @endforeach
      </select>
        {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('image', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    {!! Form::label('content', 'Content', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
        <textarea name="contenteditor" rows="8" cols="80"  required="true">{{ $blog->content }}</textarea>
    </div>
</div>
<div class="form-group">
    {!! Form::label('tag', 'Tag', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      <input type="text" name="tag" value="{{ $rel }}" id="taginput" class="form-control">
    </div>
</div><div class="form-group {{ $errors->has('lang') ? 'has-error' : ''}}">
    {!! Form::label('lang', 'Language*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      <select class="form-control" name="lang">
          <option value="en">English</option>
          <option value="id">Indonesia</option>
      </select>
        {!! $errors->first('publish', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('comment') ? 'has-error' : ''}}">
    {!! Form::label('comment', 'Comment', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <select class="form-control" name="comment">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('published') ? 'has-error' : ''}}">
    {!! Form::label('published', 'Published', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('published', '1') !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('published', '0', true) !!} No</label>
</div>
        {!! $errors->first('published', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('published_at') ? 'has-error' : ''}}">
    {!! Form::label('published_at', 'Published at (Scheduled Post)', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <input type="date" name="published_at" class="form-control"><br>
        Hour : <input type="number" name="hour" min="0" max="24" value="0">
        Minute : <input type="number" name="minute" min="0" max="59" value="0">
        {!! $errors->first('published_at', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<input type="hidden" name="author" value="{{ Auth::user()->name }}">


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
