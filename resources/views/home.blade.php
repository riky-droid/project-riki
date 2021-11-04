<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="antialiased">
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid justify-content-center">
            <a href="{{ route('home') }}">
                <h1 class="text-white">
                    Laravel 8
                </h1>
            </a>
        </div>
    </nav>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Display Data</a>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    Selection
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item" type="button">If</button></li>
                    <li><button class="dropdown-item" type="button">If Else</button></li>
                    <li><button class="dropdown-item" type="button">Switch</button></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                    Loop
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li><button class="dropdown-item" type="button">For Loop</button></li>
                    <li><button class="dropdown-item" type="button">While</button></li>
                    <li><button class="dropdown-item" type="button">Do While</button></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Continue & Break</a>
        </li>
    </ul>
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Welcome To Laravel</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </p>
                    <p>Mauris sed imperdiet dolor. Sed pulvinar urna non tortor mattis pulvinar. In sit amet pretium nisl.  </p>
                    <p>In commodo metus non neque commodo, vel sagittis orci placerat.  </p>
                    <p>Ut viverra facilisis convallis. Fusce lacinia dui elit, in faucibus ipsum facilisis ac.  </p>
                    <p>Morbi a eleifend ex. Donec congue tincidunt efficitur. Nunc in elit lectus. </p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
