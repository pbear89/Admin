@extends('layouts.admin')

@section('title',' Inicio | System')
@section('pagtitle',' Home | System')

@section('content')

<div class="row">
    <div class="col-md-10 col-sm-12">
        <div class="card card-stats">
{{--              
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                </div>
                <p class="card-category">Usuario</p>
                <h3 class="card-title">Formulario
                    <small>/ Usuarios</small>
                </h3>
            </div>  --}}
            <div class="card-header card-header-primary">
                <p class="card-category">Completa el Perfil</p>
                <h4 class="card-title">Perfil</h4>                
            </div>
            <div class="card-footer">
                    
                    {{--  <div class="col-md-12">                          --}}
                        <div class="row">
                            
                        </div>
                    {{--  </div>  --}}
                                               
                    
                    <button type="submit" class="btn btn-aceptar pull-right">Update Profile</button>
                    <button type="reset" class="btn btn-default pull-right">Reset</button>
                    <div class="clearfix"></div>
                
            </div>
        </div>
    </div>
</div>

@endsection