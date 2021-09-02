<!Doctype html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

<div class="formgroup container">
    <div class="main">
        <div class="main-head">
            <h1>Submitted Form</h1>
        </div>
        <div class="form-body">
            <form method="post"  class="myform" action="">
                @csrf
                <div class="mb-3">
                    <label class="label">UserName</label>
                    <input disabled class="form-control" type="text" name="full-name" value="{{$fullName}}">
                </div>

                <div class="mb-3">
                    <label class="label">Address</label>
                    <input disabled class="form-control" type="text" name="full-name" value="{{$address}}">
                </div>
                
                <div class="mb-3">
                    <label class="label">Password</label>
                    <input disabled class="form-control" type="text" name="password"  value="{{$password}}">
                </div>

                <div class="mb-3">
                    <label class="label">Verify Password</label>
                    <input disabled class="form-control" type="text" name="password"  value="{{$vpassword}}">
                </div>

                <div class="mb-3">
                    <label class="label">Profile</label>
                    <img src="{{url("/storage/$path")}}">
                </div>
            </form>

        </div>

    </div>
</div>
</body>
</html>