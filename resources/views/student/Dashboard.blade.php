<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

    <!-- Header -->
    <header class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <h1>Student Details</h1>
        </div>
    </header>

    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>SiNo</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Date_Of_birth</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->Firstname }}</td>
                        <td>{{ $user->Lastname }}</td>
                        <td>{{ $user->Email }}</td>
                        <td>{{ $user->Password }}</td>
                        <td>{{ $user->Date_Of_birth }}</td>
                        <td>{{ $user->Status }}</td>
                        <td>
                            <a href="{{ route('StudentEdit', $user->id) }}" class="btn btn-info" role="button">Edit</a>
                            <a href="{{ route('delete', $user->id) }}" class="btn btn-danger" role="button">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <a href="{{ route('index') }}" class="btn btn-info my-3 ml-auto" role="button">Dashboard</a>

    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-light text-center">
        <p>&copy; 2024 student Details. All rights reserved.</p>
    </footer>
</body>

</html>
