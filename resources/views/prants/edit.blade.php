@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prant
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($prant, ['route' => ['prants.update', $prant->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('prants.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection