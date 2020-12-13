@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            In Fo About Company
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'inFoAboutCompanies.store', 'files' => true]) !!}

                        @include('in_fo_about_companies.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
