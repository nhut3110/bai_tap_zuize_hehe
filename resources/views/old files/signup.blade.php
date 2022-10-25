<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <form method="post" class="form-control" style="width: 900px">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input name="name" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="">Age</label>
            <input name="age" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="">Date</label>
            <input name="date" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input name="phone" class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="">Web</label>
            <input name="web" class="form-control" type="url">
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input name="address" class="form-control" type="text">
        </div>
        <div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error )
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-outline-primary btn-lg my-2">Sign up</button>
        <div class="display-infor">
            @if(isset($user))
                <p>Name: {{$user['name']}}</p>
                <p>Age: {{$user['age']}}</p>
                <p>Date: {{$user['date']}}</p>
                <p>Phone: {{$user['phone']}}</p>
                <p>Website: {{$user['web']}}</p>
                <p>Address: {{$user['address']}}</p>
            @endif
        </div>
    </form>
</body>
</html>
