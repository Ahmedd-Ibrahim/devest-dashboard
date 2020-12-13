<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $settings->id }}</p>
</div>

<!-- Facebook Link Field -->
<div class="form-group">
    {!! Form::label('facebook_link', 'Facebook Link:') !!}
    <p>{{ $settings->facebook_link }}</p>
</div>

<!-- Twitter Link Field -->
<div class="form-group">
    {!! Form::label('twitter_link', 'Twitter Link:') !!}
    <p>{{ $settings->twitter_link }}</p>
</div>

<!-- Insta Link Field -->
<div class="form-group">
    {!! Form::label('insta_link', 'Insta Link:') !!}
    <p>{{ $settings->insta_link }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('Email', 'Email:') !!}
    <p>{{ $settings->Email }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $settings->phone }}</p>
</div>

<!-- Description On Footer Field -->
<div class="form-group">
    {!! Form::label('Description_on_footer', 'Description On Footer:') !!}
    <p>{{ $settings->Description_on_footer }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $settings->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $settings->updated_at }}</p>
</div>

