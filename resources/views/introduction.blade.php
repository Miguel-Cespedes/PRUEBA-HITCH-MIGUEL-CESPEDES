<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.6/css/dataTables.dataTables.min.css">
    <script src="stylesheet" href="//cdn.datatables.net/2.1.6/js/dataTables.min.js"></script>
</head>

<body>
    <div class="container" style="text-align: justify">
        <div class="row mt-3">
            <div class="col-md-2">
               @include('main')
            </div>
            <div class="col-md-10">
                <div class="card bg-light p-4">
                    <h4 class="mb-4 text-uppercase">Prueba Técnica: Implementación CRUD de Pagos</h4>

                    <div class="alert alert-info">
                        <h4 class="alert-heading">Objetivo</h4>
                        <p>El objetivo de esta prueba técnica es que completes la funcionalidad de un CRUD (Crear, Leer,
                            Actualizar, Eliminar) para una tabla de pagos en un proyecto básico de Laravel. Se te
                            proporciona una estructura inicial del proyecto, y tu tarea será completar las
                            funcionalidades faltantes para gestionar los pagos.</p>
                    </div>

                    <div class="alert alert-secondary">
                        <h4 class="alert-heading">Descripción del Proyecto</h4>
                        <p>Ya existe un controlador básico llamado <code>PaymentsController</code>, que tiene las
                            siguientes funciones:</p>
                        <ul>
                            <li><code>index()</code>: Para mostrar la lista de pagos.</li>
                            <li><code>create()</code>: Para mostrar el formulario de creación de pagos.</li>
                        </ul>
                        <p>Debes completar el CRUD siguiendo los pasos indicados a continuación.</p>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            Paso 1: Configuración de la Base de Datos (MySQL o SQLite)
                        </div>
                        <div class="card-body">
                            <p>Como parte de esta prueba, tendrás la flexibilidad de elegir entre usar
                                <strong>MySQL</strong> o <strong>SQLite</strong> como tu base de datos. A continuación,
                                se
                                detallan los pasos para configurar cada opción.
                            </p>

                            <div class="accordion" id="databaseSetupAccordion">
                                <!-- Opción A: MySQL -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingMySQL">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseMySQL" aria-expanded="true"
                                            aria-controls="collapseMySQL">
                                            <b>Opción A: Usar MySQL como Base de Datos</b>
                                        </button>
                                    </h2>
                                    <div id="collapseMySQL" class="accordion-collapse collapse show"
                                        aria-labelledby="headingMySQL" data-bs-parent="#databaseSetupAccordion">
                                        <div class="accordion-body">
                                            <p><strong>Asegurarte de que MySQL esté instalado y corriendo</strong> en
                                                tu
                                                máquina (por ejemplo, a través de <em>XAMPP</em> o <em>WAMP</em>).</p>

                                            <h5>1. Crear la base de datos:</h5>
                                            <ul>
                                                <li>Abre tu cliente MySQL o phpMyAdmin.</li>
                                                <li>Crea una base de datos nueva para tu proyecto, por ejemplo:
                                                    <code>prueba_tecnica</code>.
                                                </li>
                                            </ul>

                                            <h5>2. Configurar el archivo <code>.env</code>:</h5>
                                            <p>Abre el archivo <code>.env</code> en la raíz de tu proyecto Laravel y
                                                asegúrate de configurar los parámetros de conexión para MySQL:</p>
                                            <pre><code>DB_CONNECTION=mysql<br>DB_HOST=127.0.0.1<br>DB_PORT=3306<br>DB_DATABASE=prueba_tecnica<br>DB_USERNAME=tu_usuario<br>DB_PASSWORD=tu_contraseña</code></pre>
                                            <p>Estos valores deben coincidir con tu configuración de MySQL (nombre de la
                                                base de datos, usuario y contraseña).</p>
                                                <h5>3. Verificar la Configuración:</h5>
                                                <p>Para verificar que todo está bien, crea e intenta correr una migración y revisa
                                                    si
                                                    la base de datos <code>prueba_tecnica </code> de MYSQL es modificada con las
                                                    tablas
                                                    creadas.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Opción B: SQLite -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSQLite">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSQLite"
                                            aria-expanded="false" aria-controls="collapseSQLite">
                                            <b>Opción B: Usar SQLite como Base de Datos</b>
                                        </button>
                                    </h2>
                                    <div id="collapseSQLite" class="accordion-collapse collapse"
                                        aria-labelledby="headingSQLite" data-bs-parent="#databaseSetupAccordion">
                                        <div class="accordion-body">
                                            <p><strong>SQLite</strong> es una base de datos ligera que no requiere
                                                instalación de un servidor de base de datos. Es ideal para pruebas y
                                                desarrollo rápido.</p>

                                            <h5>1. Crear el archivo de base de datos SQLite:</h5>
                                            <ul>
                                                <li>En la raíz de tu proyecto Laravel, navega a la carpeta
                                                    <code>database/</code>.
                                                </li>
                                                <li>Crea un archivo vacío llamado <code>database.sqlite</code>. Puedes
                                                    hacerlo manualmente:</li>
                                                <ul>
                                                    <li><strong>Método 1:</strong> Crea un archivo vacío desde el
                                                        explorador
                                                        de archivos en
                                                        <code>ruta-proyecto\prueba-tecnica-laravel\database\</code> y
                                                        nómbralo <code>database.sqlite</code>.
                                                    </li>
                                                    <li><strong>Método 2 (usando PowerShell):</strong> Ejecuta el
                                                        siguiente
                                                        comando en PowerShell dentro de la carpeta
                                                        <code>database</code>:
                                                    </li>
                                                    <pre><code>New-Item -Path .\database\database.sqlite -ItemType File</code></pre>
                                                </ul>
                                            </ul>

                                            <h5>2. Configurar el archivo <code>.env</code>:</h5>
                                            <p>Abre el archivo <code>.env</code> en la raíz de tu proyecto y ajusta la
                                                configuración para usar SQLite:</p>
                                            <pre><code>
                                                DB_CONNECTION=sqlite
                                                DB_DATABASE=database\database.sqlite
                                            </code>
                                        </pre>

                                            <h5>3. Verificar la Configuración:</h5>
                                            <p>Para verificar que todo está bien, crea e intenta correr una migración y revisa
                                                si
                                                la base de datos <code>database.sqlite</code> es modificada con las
                                                tablas
                                                creadas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            Paso 2: Crear la Migración y el Modelo
                        </div>
                        <div class="card-body">
                            <p>Deberás crear una migración para la tabla <code>payments</code> que contenga los campos
                                necesarios para registrar un pago. Los campos requeridos son:</p>
                            <ul>
                                <li>Un identificador único. <code>id INT AUTO_INCREMENT PK</code></li>
                                <li>Una descripción del pago. <code>description VARCHAR(255)</code></li>
                                <li>Un precio para el pago. <code>price INT</code></li>
                            </ul>
                            <p>Una vez que hayas creado la migración, también deberás generar el modelo
                                <code>Payment</code>, asegurándote de que esté correctamente configurado para trabajar
                                con la tabla <code>payments</code>.
                            </p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            Paso 3: Completar la Funcionalidad del Listado (index)
                        </div>
                        <div class="card-body">
                            <p>En el método <code>index()</code> del controlador, deberás obtener todos los pagos
                                registrados en la base de datos y mostrarlos en la vista correspondiente. Esta vista
                                (<code>list.blade.php</code>) deberá mostrar los pagos dentro de la tabla existente, incluyendo opciones
                                para editar y eliminar cada pago.</p>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            Paso 4: Implementar la Funcionalidad de Creación
                        </div>
                        <div class="card-body">
                            <p>Debes completar la funcionalidad para permitir que los usuarios creen nuevos pagos a
                                través de un formulario en la vista correspondiente (<code>create.blade.php</code>).</p>
                            <ul>
                                <li>Deberás validar los campos (<code>description</code> y <code>price</code>) cuando se envíen los datos del formulario.
                                </li>
                                <li>En caso de que la validación falle, deberás redirigir de nuevo al formulario de
                                    creación, mostrando el mensaje de error correspondiente.</li>
                                <li>Si la validación es exitosa, se debe crear el pago en la base de datos.</li>
                                <li>Si la creación es exitosa, redirige al listado de pagos mostrando un mensaje de éxito. En caso de error, retorna al formulario de creación con el mensaje de error correspondiente.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            Paso 5: Implementar la Funcionalidad de Edición
                        </div>
                        <div class="card-body">
                            <p>Deberás implementar la funcionalidad para que los usuarios puedan editar un pago
                                existente a
                                través de un formulario en la vista correspondiente (<code>edit.blade.php</code>).</p>
                            <ul>
                                <li>Crear un método  (<code>método edit</code>) que permita mostrar el formulario de edición con los datos del pago
                                    actual.</li>
                                <li>Asegúrate de que el formulario muestre los valores actuales del pago que se está
                                    editando.</li>
                                <li>Implementa la lógica para que, una vez enviados los datos editados, se validen y se
                                    actualice el pago en la base de datos.  (<code>método update</code>)</li>
                                <li>En caso de éxito, redirige al listado de pagos con un mensaje de éxito. Si ocurre
                                    algún error, redirige al formulario de edición mostrando el mensaje de error.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            Paso 6: Implementar la Funcionalidad de Eliminación 
                        </div>
                        <div class="card-body">
                            <p>Deberás implementar la funcionalidad para que los usuarios puedan eliminar un pago.  (<code>método destroy</code>)</p>
                            <ul>
                                <li>Asegúrate de que el sistema verifique que el pago existe antes de intentar
                                    eliminarlo.</li>
                                <li>Si el pago existe, elimina el registro de la base de datos y redirige al listado de
                                    pagos con un mensaje de éxito.</li>
                                <li>Si el pago no existe, muestra un mensaje de error indicando que el registro no fue
                                    encontrado.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            Paso 7: Manejo de Notificaciones
                        </div>
                        <div class="card-body">
                            <p>Durante todo el proceso de creación, edición y eliminación, es importante que se utilicen
                                notificaciones para informar al usuario sobre el resultado de la acción que ha
                                realizado. Puedes utilizar las siguientes claves para los mensajes:</p>
                            <ul>
                                <li><code>alert-success</code>: Para notificaciones de éxito (cuando una operación se
                                    realiza correctamente).</li>
                                <li><code>alert-error</code>: Para notificaciones de error (cuando ocurre algún
                                    problema).</li>
                            </ul>
                            <pre> ej. <code>return route('users')->with('alert-success', 'usuario creado correctamente');</code></pre>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            Paso 8: Asegurarse de las Rutas y Navegación
                        </div>
                        <div class="card-body">
                            <p>Finalmente, deberás asegurarte de que el flujo entre las diferentes vistas funcione
                                correctamente, permitiendo a los usuarios:</p>
                            <ul>
                                <li>Ver el listado de pagos.</li>
                                <li>Crear nuevos pagos.</li>
                                <li>Editar pagos existentes.</li>
                                <li>Eliminar pagos.</li>
                            </ul>
                            <p>Asegúrate de que las rutas para cada una de estas acciones estén correctamente definidas
                                y que los enlaces o botones en las vistas permitan a los usuarios navegar entre las
                                distintas funcionalidades de manera intuitiva.</p>
                        </div>
                    </div>

                    <div class="alert alert-warning">
                        <h4 class="alert-heading">Conclusión</h4>
                        <p>Al completar esta prueba técnica, deberás haber implementado un CRUD completo para la gestión
                            de pagos, asegurándote de validar correctamente los datos, mostrar mensajes de notificación
                            al usuario y permitir la navegación fluida entre las diferentes partes del sistema. No
                            olvides verificar que todas las operaciones (crear, leer, actualizar, eliminar) funcionen
                            correctamente antes de finalizar tu desarrollo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
