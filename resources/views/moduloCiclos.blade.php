@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" align="center">
                <div class="card-header">
                    <h3>{{ __('Desarrollo de Aplicaciones Web') }}</h3>
                </div>
                <div class="card-body">
                    <table>
                        <thead>
                        <tr>
                            <th>Id &nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th>Nombre &nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th>Especialidad_id &nbsp;&nbsp;&nbsp;&nbsp;</th>
                            <th>Ciclo_id &nbsp;&nbsp;&nbsp;&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                                 <!-- $registro contiene los módulos con ciclo_id = 6 -->
                            @foreach ($registro as $modulo)
                            <tr>
                                <td>{{ $modulo->id }} &nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>{{ $modulo->nombre }} &nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>{{ $modulo->especialidad_id }} &nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>{{ $modulo->ciclo_id }} &nbsp;&nbsp;&nbsp;&nbsp;</td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="/home" class="button medium scrolly">Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
