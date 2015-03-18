@extends ('templates/plantilla')

@section('contenido')

    @include('templates/menu')

    <div  class="row bajar-60">
        <div class="col-md-1">{{-- columna1 --}}</div>
        <div class="col-md-10">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Contrato persona fisica compra-venta </h3>
                </div>


                <table class="table">
                    <tr>
                        <th>No.De Contrato</th>
                        <th>Fecha de contrato</th>
                        <th>Vigencia de contrato</th>
                        <th>Tipo de contrato</th>
                        <th>Contrato</th>

                    </tr>
                    @foreach ($registros as $registro)
                        <tr>
                            <td>{{ $registro->no_contrato}}</td>
                            <td>{{ $registro->fecha_contrato}}</td>
                            <td>{{ $registro->vigencia_contrato}}</td>
                            <td>{{ $registro->tipo_contrato}}</td>
                            <td><a href="{{ url('/contratofisicacompra/'.$registro->no_contrato) }}" class="btn btn-success">Ver Contrato</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-1">{{--columna3--}}</div>
    </div>
    @stop
    </body>
    </html>