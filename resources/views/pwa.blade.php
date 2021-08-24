<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>BASF Untuk Petani Indonesia | BASF Crop Solution Indonesia</title>

    <link rel="manifest" href="manifest.json">
</head>

<body>
    {{-- <h1>BASF Untuk Petani Indonesia | BASF Crop Solution Indonesia</h1> --}}
    <div class="container-fluid text-center">
        <div class="card">
            <img src="img/icon-192x192.png" class="card-img-top img-fluid img-thumbnail" style="width: 25%;margin:auto;"
                alt="icon-192x192.png">
            <div class="card-body">
                <h5 class="card-title">BASF Untuk Petani Indonesia | BASF Crop Solution Indonesia</h5>
                <a href="https://inovasiuntukindonesia.com/" class="btn btn-primary">Click to continue</a>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="js/file01.js"></script>
    <script>
        jQuery(document).ready(function($) {
            if ('serviceWorker' in navigator) {
                window.addEventListener('load', function() {
                    navigator.serviceWorker.register('/sw.js').then(function(registration) {
                        // Registration was successful
                        console.log('ServiceWorker registration successful with scope: ',
                            registration.scope);
                    }, function(err) {
                        // registration failed :(
                        console.log('ServiceWorker registration failed: ', err);
                    });
                });
            }
        });
    </script>
</body>

</html>
