@extends('layouts.admin')

@section('title',' Agregar Usuarios | System')
@section('pagtitle','Users Add | System')

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
            <div class="card-header card-header-info">
                <p class="card-category">Completa el Perfil</p>
                <h4 class="card-title">Perfil</h4>                
            </div>
            <div class="card-footer">
                    <form>
                    {{--  <div class="col-md-12">                          --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Usuario</label>
                                    <input type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Cédula</label>
                                    <input type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">RIF</label>
                                    <input type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Nombre</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Apellido</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Usuario</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">E-mail </label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">                                
                                    <label class="bmd-label-floating"> Descripción</label>
                                    <textarea class="form-control" rows="5"></textarea>                                   
                                </div>
                            </div>
                        </div>
                    {{--  </div>  --}}
                                               
                    
                    <button type="submit" class="btn btn-aceptar pull-right">Update Profile</button>
                    <button type="reset" class="btn btn-white pull-right">Reset</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection