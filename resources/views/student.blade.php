<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Student Management System</title>
</head>
<body>
@include('navbar')

<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Student Management System</h1>
    </div>
</div>
@if($layout=='index')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include('studentslist')
            </section>
            <section class="col"></section>
        </div>

    </div>
@elseif($layout=='create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include('studentslist')
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img
                        src="https://cdn.pixabay.com/photo/2016/11/14/03/16/book-1822474_960_720.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the informations of the new student</h5>
                        <form action="{{ url('/store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="first_name" type="text" class="form-control"
                                       placeholder="Enter the first name"
                                       required>
                            </div>

                            <div class="form-group">
                                <label>second Name</label>
                                <input name="last_name" type="text" class="form-control" placeholder="Enter last name"
                                       required>
                            </div>

                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control" placeholder="Enter the Age" required>
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control"
                                       placeholder="Enter Sepeciality"
                                       required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input name="phone" type="tel" class="form-control" placeholder="Enter phone"
                                       pattern="[0-9]{2}[0-9]{3}[0-9]{2}[0-9]{2}" required>
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout=='show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include('studentslist')
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout=='edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include('studentslist')
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img
                        src="https://cdn.pixabay.com/photo/2016/11/14/03/16/book-1822474_960_720.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update informations of student</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>First Name</label>
                                <input value="{{$student->first_name}}" name="first_name" type="text"
                                       class="form-control"
                                       placeholder="Enter the first name" required>
                            </div>

                            <div class="form-group">
                                <label>second Name</label>
                                <input value="{{$student->last_name}}" name="last_name" type="text" class="form-control"
                                       placeholder="Enter second name" required>
                            </div>

                            <div class="form-group">
                                <label>Age</label>
                                <input value="{{$student->age}}" name="age" type="text" class="form-control"
                                       placeholder="Enter the Age" required>
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input value="{{$student->specaility}}" name="speciality" type="text"
                                       class="form-control"
                                       placeholder="Enter Sepeciality" required>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input value="{{$student->phone}}" name="phone" type="tel" class="form-control"
                                       placeholder="Enter phone" pattern="[0-9]{2}[0-9]{3}[0-9]{2}[0-9]{2}" required>
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endif
<footer></footer>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>
