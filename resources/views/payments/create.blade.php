@extends('layout')
@section('content')
    <div class="row p-4">
        <div class="col-md-9">
            <h4 class="text-uppercase">Nuevo Pago</h4>
        </div>
        <div class="col-md-3 text-end">
            <a href="{{ route('payments') }}" class="btn btn-secondary">Volver a Pagos</a>
        </div>
        <br>
        <br>
        <hr>
        <div class="col-md-12">
            {{-- MUESTRA ERRORES DE VALIDACION --}}
            @if ($errors->any())
                @php
                    $errorMessages = implode('<br>', $errors->all());
                    $error = 'Se encontraron los siguientes errores: <br>' . $errorMessages;
                @endphp
                <div class="alert alert-danger" role="alert">
                    {!! $error !!}
                </div>
            @endif

            {{-- MUESTRA ERRORES PERSONALIZADOS --}}
            @if (session('alert-error'))
                <div class="alert alert-danger" role="alert">
                    {!! session('alert-error') !!}
                </div>
            @endif
            
            <form action="{{ route('payments.store') }}" method="POST">

                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <input type="text" name="description" id="description" class="form-control"
                                placeholder="descripcion...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" name="price" id="price" class="form-control"
                                placeholder="precio...">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 p-2 text-center">
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection