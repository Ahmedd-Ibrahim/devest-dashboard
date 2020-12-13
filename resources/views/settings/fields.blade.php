<!-- Facebook Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook_link', 'Facebook Link:') !!}
    {!! Form::text('facebook_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Twitter Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twitter_link', 'Twitter Link:') !!}
    {!! Form::text('twitter_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Insta Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('insta_link', 'Insta Link:') !!}
    {!! Form::text('insta_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::email('Email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::number('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Description On Footer Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Description_on_footer', 'Description On Footer:') !!}
    {!! Form::textarea('Description_on_footer', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('settings.index') }}" class="btn btn-default">Cancel</a>
</div>
