<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        #form {
            margin-top: 50px;
            margin-left: 300px;
            width: 60%;
        }

        .table,
        #search {
            margin-top: 30px;
            margin-left: 280px;
            width: 60%;
        }
    </style>
</head>

<body>
    <form id="form" action="itemCreate" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="address" name="address">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary">Primary</button>
    </form>


    <form action="searchItem" method="POST">
        @csrf
        <div class="row justify-content-start" id="search">
            <div class="col-4">
                <input type="text" class="form-control" name="search">
            </div>
            <div class="col-4">
                <button class="btn btn-outline-primary">Search</button>
            </div>
        </div>
    </form>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->Id}}</th>
                <td>{{$user->Name}}</td>
                <td>{{$user->Email}}</td>
                <td>{{$user->Address}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>