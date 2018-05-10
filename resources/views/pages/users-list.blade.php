@extends('layouts.admin')

@section('title','Usuarios | System')
@section('pagtitle','Users | System')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card card-stats">
            <div class="card-header card-header-info">
                <h4 class="card-title mt-0"> Table on Plain Background</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-footer">
                <div class="table-responsive">                    
                    <table class="table table-hover">
                        <thead class="">
                            <th class="col1">ID</th>
                            <th class="col2">Nombre y Apellido</th>
                            <th class="col3">Cargo</th>
                            <th class="col4">Nivel Acceso</th>
                            <th class="col5">Movimientos</th>
                            <th class="col6">Options</th>                           
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dakota Rice</td>
                                <td>Niger</td>
                                <td>Oud-Turnhout</td>
                                <td>$36,738</td>
                                <td>
                                    <button class="btn btn-aceptar" title="Ver"><i class="far fa-eye"></i></button>
                                    <button class="btn btn-warning" title="Editar"><i class="far fa-edit"></i></button>
                                    <button class="btn btn-danger" title="Eliminar"><i class="fas fa-eraser"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    Minerva Hooper
                                </td>
                                <td>
                                    Curaçao
                                </td>
                                <td>
                                    Sinaai-Waas
                                </td>
                                <td>
                                    $23,789
                                </td>
                                <td>
                                    <button class="btn btn-aceptar" title="Ver"><i class="far fa-eye"></i></button>
                                    <button class="btn btn-warning" title="Editar"><i class="far fa-edit"></i></button>
                                    <button class="btn btn-danger" title="Eliminar"><i class="fas fa-eraser"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3
                                </td>
                                <td>
                                    Sage Rodriguez
                                </td>
                                <td>
                                    Netherlands
                                </td>
                                <td>
                                    Baileux
                                </td>
                                <td>
                                    $56,142
                                </td>
                                <td>
                                    <button class="btn btn-aceptar" title="Ver"><i class="far fa-eye"></i></button>
                                    <button class="btn btn-warning" title="Editar"><i class="far fa-edit"></i></button>
                                    <button class="btn btn-danger" title="Eliminar"><i class="fas fa-eraser"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4
                                </td>
                                <td>
                                    Philip Chaney
                                </td>
                                <td>
                                    Korea, South
                                </td>
                                <td>
                                    Overland Park
                                </td>
                                <td>
                                    $38,735
                                </td>
                                <td>
                                    <button class="btn btn-aceptar" title="Ver"><i class="far fa-eye"></i></button>
                                    <button class="btn btn-warning" title="Editar"><i class="far fa-edit"></i></button>
                                    <button class="btn btn-danger" title="Eliminar"><i class="fas fa-eraser"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    5
                                </td>
                                <td>
                                    Doris Greene
                                </td>
                                <td>
                                    Malawi
                                </td>
                                <td>
                                    Feldkirchen in Kärnten
                                </td>
                                <td>
                                    $63,542
                                </td>
                                <td>
                                    <button class="btn btn-aceptar" title="Ver"><i class="far fa-eye"></i></button>
                                    <button class="btn btn-warning" title="Editar"><i class="far fa-edit"></i></button>
                                    <button class="btn btn-danger" title="Eliminar"><i class="fas fa-eraser"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6
                                </td>
                                <td>
                                    Mason Porter
                                </td>
                                <td>
                                    Chile
                                </td>
                                <td>
                                    Gloucester
                                </td>
                                <td>
                                    $78,615
                                </td>
                                <td>
                                    <button class="btn btn-aceptar" title="Ver"><i class="far fa-eye"></i></button>
                                    <button class="btn btn-warning" title="Editar"><i class="far fa-edit"></i></button>
                                    <button class="btn btn-danger" title="Eliminar"><i class="fas fa-eraser"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection