<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style1.css">
</head>
<body>

    <!-- Buat database namanya perusahaan di local -->
    <!-- Connect ke database terlebih dahulu supaya bisa view Employee -->
    <!-- Nama database : perusahaan -->
    <!-- DB DATABASE diubah jadi perusahaan -->
    <!-- Lalu buat table perusahaans -->

    <div style="background-color:black;color:white;padding:20px;text-align:center">
        <h2>PT. Mexico Official Website</h2>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Home</a>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" href="#">View Employee</a>
        </div>
    </nav>

    <section id="section1">
<div class="container col-md-6" style="padding-top: 20px" id="hero">
        <div class="card shadow">
            <div class="card-header text-center"> </div>
                <div class="card-body">
                        <div style="text-align:center">
                            <h2>Employee List</h2>
                        </div>
                        <br>
                    <div class="col-md-6" style="">
                    <form action="" method="get" class="input-group row">
                        <div class="input-group" style="">
                            <input type="search" class="form-control" name="search" placeholder="Search by Name" value=""/>
                            <button type="submit" class="btn btn-primary">Search</button>
                         </div>
                    </form>
                        <br>
                        <form action="/createKaryawan" method="get" class="input-group row">
                            <button type="submit" class="btn btn-success">Add New</button>
                        </form>
                    <br>
                    </div>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($perusahaans as $usaha)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $usaha->Name }}</td>
                                <td>{{ $usaha->Age }}</td>
                                <td>{{ $usaha->Address }}</td>
                                <td>{{ $usaha->Phone }}</td>
                                <td>
                                    <a href="/edits/{{$usaha->id}}">
                                        <button type="submit" class="btn btn-success col-md">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="/delete/{{$usaha->id}}"><button type="submit" class="btn btn-danger col-md">Delete</button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>