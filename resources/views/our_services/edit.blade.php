@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Our Services
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ourServices, ['route' => ['ourServices.update', $ourServices->id], 'method' => 'patch']) !!}

                        @include('our_services.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection