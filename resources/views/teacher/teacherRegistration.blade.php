<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('registration')}}/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('registration')}}/css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form  action="{{route('teacherStore')}}" method="post" class="appointment-form" id="appointment-form">
                @csrf
                <h2>Teachers Registration Form</h2>
                <div class="form-group-1">

                    <input type="text" name="Name" placeholder="Name"  />
                    @error('Name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                    <input type="email" name="Email" placeholder="Email"  />
                    @error('Email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                    <input type="password" name="Password" placeholder="Password" />
                    @error('Password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                    <input type="text" name="Department" placeholder="Department" />
                    @error('Department')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                    <input type="text" name="Phone" placeholder="Phone Number"/>
                @error('Phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Register" />
                </div>

            </form>
        </div>

    </div>

    <!-- JS
    <script src="{{asset('registration')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('registration')}}/js/main.js"></script>
    -->
</body>
</html>
