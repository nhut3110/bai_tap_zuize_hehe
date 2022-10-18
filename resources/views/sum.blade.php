<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum</title>
</head>
<body>
    <form method="post">
        @csrf 
        <div class="form-group">
            <input type="number" class="form-control" placeholder="0" name="numA">
        </div>
        <h3>+</h3>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="0" name="numB">
        </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="0" disabled value="<?php if (isset($sum)) echo $sum; ?>">
        </div>
    </form>
</body>
</html>