<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.6/css/dataTables.dataTables.min.css">
    <script src="//cdn.datatables.net/2.1.6/js/dataTables.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-2">
                @include('main')
            </div>
            <div class="col-md-10">
                <div class="card bg-light">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
   
</body>

</html>
