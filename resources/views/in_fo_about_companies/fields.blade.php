<!-- Sub Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_title', 'Sub Title:') !!}
    {!! Form::text('sub_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Who Are We Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('who_are_we_title', 'Who Are We Title:') !!}
    {!! Form::text('who_are_we_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Who Are We Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description_who_are_we', 'Description Who Are We:') !!}
    {!! Form::text('description_who_are_we', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo Who Are We Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo_who_are_we', 'Photo Who Are We:') !!}
    {!! Form::file('photo_who_are_we') !!}
</div>
<div class="clearfix"></div>

<!-- How We Work Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('how_we_work_title', 'How We Work Title:') !!}
    {!! Form::text('how_we_work_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description How We Work Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description_how_we_work', 'Description How We Work:') !!}
    {!! Form::text('description_how_we_work', null, ['class' => 'form-control']) !!}
</div>

<!-- Photo How We Work Field -->
<div class="form-group col-sm-6">
    {!! Form::label('photo_how_we_work', 'Photo How We Work:') !!}
    {!! Form::file('photo_how_we_work') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('inFoAboutCompanies.index') }}" class="btn btn-default">Cancel</a>
</div>
