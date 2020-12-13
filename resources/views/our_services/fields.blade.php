<!-- Section Icon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('section_icon', 'Section Icon:') !!}
    {!! Form::text('section_icon', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>
<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description_hidden', 'Description [hidden]:') !!}
    {!! Form::text('description_hidden', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ourServices.index') }}" class="btn btn-default">Cancel</a>
</div>
