<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>registration</h1>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <form action="{{ route('StudentUpdate',$student->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>First Name</label>
                        <br>
                        <input type="text" class="form-control" name="Fname" value="{{ $student->Firstname }}"
                            placeholder="Enter Name">
                        @error('Fname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Last Name</label>
                        <br>
                        <input type="text" class="form-control" name="Lname" value="{{ $student->Lastname }}"
                            placeholder="Enter Last Name">
                        @error('Lname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <label>Email </label>
                    <br>
                    <input type="email" class="form-control" name="Email" value="{{ $student->Email }}"
                        placeholder="Enter email">
                    @error('Email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <br>
                    <div class="form-group">
                        <label>Password</label><br>
                        <input type="password" class="form-control" name="Password" value="{{ $student->Password }}"
                            placeholder="Password">
                        @error('Password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Date_Of_Birth</label>
                        <br>
                        <input type="date" class="form-control" name="dob" value="{{ $student->Date_Of_birth }}"
                            placeholder="Enter Date Of Birth">
                        @error('dob')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="Status" class="form-control" value="{{ $student->Status }}">
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                        @error('Status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <br>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
