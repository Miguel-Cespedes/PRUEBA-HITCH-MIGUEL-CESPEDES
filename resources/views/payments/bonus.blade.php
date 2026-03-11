@extends('layout')
@section('content')
    <div class="card bg-light p-4">
        <h4 class="mb-4 text-uppercase">BONUS REST</h4>
        <div class="alert alert-info">
            <h4 class="alert-heading">Objetivo</h4>
            <p>El objetivo de este punto es que desarrolles una nueva ruta que obtenga datos desde una API pública y los muestres en una tabla dentro de una vista Blade. Esto te permitirá interactuar con APIs externas, procesar los datos y representarlos visualmente en tu aplicación Laravel.</p>
        </div>

        <div class="alert alert-secondary">
            <h4 class="alert-heading">Descripción</h4>
            <p>Utilizando el controlador llamado <code>BonusController</code>, que ya tiene la función <code>index()</code>, deberás implementar la lógica para obtener los datos desde la API externa y pasarlos a esta vista para visualizarlos en la tabla.</p>
            <h6>Requisitos:</h6>
            <ul>
                <li> En el controlador, utiliza <strong>Guzzle HTTP Client</strong> (Laravel lo incluye por defecto) o el cliente HTTP de Laravel para hacer la solicitud a la API pública.</li>
                <li> Endpoint de la API externa:  <a href="https://jsonplaceholder.typicode.com/users" target="_blank">https://jsonplaceholder.typicode.com/users'</a></li>
                <li> Tabla en la vista: Deberás mostrar los campos ID, Nombre, Email, Teléfono, y Compañía de cada usuario.</li>
            </ul>
        </div>
        <div class="col-md-12 mt-4">
            <h4 class="alert-heading">Resultado API Externa</h4>
            <hr>
      <table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">NOMBRE</th>
            <th class="text-center">EMAIL</th>
            <th class="text-center">TELÉFONO</th>
            <th class="text-center">COMPAÑÍA</th>
        </tr>
    </thead>

    <tbody>

    @foreach($users as $user)

        <tr>
            <td class="text-center">{{ $user['id'] }}</td>
            <td class="text-center">{{ $user['name'] }}</td>
            <td class="text-center">{{ $user['email'] }}</td>
            <td class="text-center">{{ $user['phone'] }}</td>
            <td class="text-center">{{ $user['company']['name'] }}</td>
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
