
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<body>
<div class="view-body">
    <ul>
        @foreach ($users as $user)
            <li>{{$user->id}}</li>
            <li>{{$user->fullName}}</li>
            <li>{{$user->address}}</li>
            <li>{{$user->password}}</li>
            <li>{{$user->vpassword}}</li>
            <li>{{$user->picfile}}</li>
            <li>{{$user->created_at}}</li>
            <li>{{$user->updated_at}}</li>
            <br>

        @endforeach
    </ul>
</div>
</body>
</html>