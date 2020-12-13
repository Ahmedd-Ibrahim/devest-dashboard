@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Heeder
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($heeder, ['route' => ['heeders.update', $heeder->id], 'method' => 'patch']) !!}

                        @include('heeders.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection