<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $ourServices->id }}</p>
</div>

<!-- Section Icon Field -->
<div class="form-group">
    {!! Form::label('section_icon', 'Section Icon:') !!}
    <p>{{ $ourServices->section_icon }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $ourServices->title }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $ourServices->description }}</p>
</div>

<!-- Description Hidden Field -->
<div class="form-group">
    {!! Form::label('description_hidden', 'Description Hidden:') !!}
    <p>{{ $ourServices->description_hidden }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ourServices->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ourServices->updated_at }}</p>
</div>

