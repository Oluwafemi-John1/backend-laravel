<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script defer async src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
    <h1>{{ $user }}, This is Home, Home sweet home</h1>

    {{-- Loop in Laravel --}}
    <ol>
        @foreach ($students as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ol>

    {{-- Form --}}
    <div class="col-lg-5 col-md-8 col-10 mx-auto mt-lg-5 mt-3 rounded-3 shadow p-lg-4 p-2">
        <form action="/register" method="POST">
            @csrf
            <h3 class="text-center bg-amber-800">Sign up</h3>
            <div class="form-group my-2">
                <label for="" class="fw-bold">Full Name:</label>
                <input type="text" class="form-control shadow-none" placeholder="Oluwarantimi Peace" name="full_name">
            </div>
            <div class="form-group my-2">
                <label for="" class="fw-bold">Email Address:</label>
                <input type="text" class="form-control shadow-none" placeholder="oluwarantimipeace@gmail.com" name="email">
            </div>
            <div class="form-group my-2">
                <label for="" class="fw-bold">Password:</label>
                <input type="text" class="form-control shadow-none" placeholder="*********" name="password">
            </div>
            <div class="form-group my-3">
                <button type="submit" class="btn btn-dark w-100">Register</button>
            </div>
        </form>
    </div>
</body>

</html>
