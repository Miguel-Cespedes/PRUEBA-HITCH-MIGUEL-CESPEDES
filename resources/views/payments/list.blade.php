@extends('layout')
@section('content')
    <div class="row p-4">
        <div class="col-md-9">
            <h4 class="text-uppercase">Listado de Pagos</h4>
        </div>
        <div class="col-md-3 text-end">
            <a href="{{ route('payments.create') }}" class="btn btn-primary">Crear Pago</a>
        </div>
        <br>
        <br>
        <hr>
        @if (session()->has('alert-success'))
            <div class="alert alert-success" role="alert">
                {!! session()->get('alert-success') !!}
            </div>
        @endif
        @if (session('alert-error'))
            <div class="alert alert-danger" role="alert">
                {!! session('alert-error') !!}
            </div>
        @endif
        <div class="col-md-12">
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">DESCRIPCION</th>
                        <th class="text-center">PRECIO</th>
                        <th class="text-center">ACCIÓN</th>
                    </tr>
                </thead>
             <tbody>

@foreach($payments as $payment)

<tr>
    <td class="text-center">{{ $payment->id }}</td>
    <td class="text-center">{{ $payment->description }}</td>
    <td class="text-center">{{ $payment->price }}</td>

    <td class="text-center">
        <div class="btn-group">

            <a href="{{ route('payments.edit', $payment->id) }}"
                class="btn btn-sm btn-warning">
                Editar
            </a>

            <form action="{{ route('payments.destroy', $payment->id) }}"
                method="POST"
                style="display:inline">

                @csrf
                @method('DELETE')

                <button type="submit"
                    class="btn btn-sm btn-danger">
                    Eliminar
                </button>

            </form>

        </div>
    </td>

</tr>

@endforeach

</tbody>
            </table>
        </div>
    </div>

    <script>
        $('#table').DataTable();
    </script>
@endsection
