<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="row">
                <h4>Test Online</h4><hr>
                <div class="table table-hover">
                    <thead>
                        <!-- <th>Name</th>
                        <th>Email</th> -->
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td>{{ $LoggedUserInfor['name'] }}</td>
                            <td>{{ $LoggedUserInfor['email'] }}</td> -->
                            <td><a href="{{ route('auth.logout') }}">Log Out</a></td>
                        </tr>
                    </tbody>
                </div>
        </div>
    </div>

<h1>User Login</h1>
<form action="login" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter user name"> <br> <br>
    <input type="password" name="password" placeholder="enter password"> <br> <br>
    <button type="submit">Login</button>
</form>
</body>
</html>

