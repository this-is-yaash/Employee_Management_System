<html lang="en">
    <head>

    </head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Create</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <body>
        <style>
            h1{
                color: rgb(60, 47, 148);
                text-align: left;
                font-size: 50px;
                font-weight:lighter;
                font-family: 'Trebuchet MS', sans-serif;
            }
        </style>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="d-flex align-items-center justify-content-center h-100"><!-- align-items-center(align vertical)justify-content-center(align horizontal) -->
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit Employee</h1>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <form method="POST" action="{{url('dashboard'. $user_info->id)}}">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <div class="mb-3">
                                <label for="exampleInputName1" class="form-label">Name</label>
                                <input type="text" value="{{$user_info->employee_name}}" name="employee_name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
                              </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email</label>
                              <input type="text" value="{{$user_info->email}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputDesignation"  class="form-label">Designation</label>
                                <select class="form-select" aria-label="Default select example" value="{{$user_info->designation}}" id="exampleInputDesignation1" name="designation">
                                        <option >{{$user_info->designation}}</option>
                                        <option>Web Developer</option>
                                        <option>Tester</option>
                                        <option>Android Developer</option>
                                        <option>iOS Developer</option>
                                  </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPhoneNumber1" class="form-label">Phone Number</label>
                                <input type="text" name="phone_number" value="{{$user_info->phone_number}}" class="form-control" id="exampleInputPhoneNumber1" aria-describedby="phHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputSalary1" class="form-label">Salary</label>
                                <input type="text" name="salary" class="form-control" value="{{$user_info->salary}}" id="exampleInputSalary1" aria-describedby="phHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAge" class="form-label">Age</label>
                                <input type="text" name="age" class="form-control" value="{{$user_info->age}}" id="exampleInputAge1" aria-describedby="ageHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputAge" class="form-label">DOB</label>
                                <input type="text" name="dob" class="form-control" value="{{$user_info->dob}}"id="exampleInputDOB1" aria-describedby="dobHelp">
                            </div>
                                <button type="submit" value="update" class="btn btn-secondary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>