<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style1.css">
</head>
<body>

<section id="section1">
<div class="container col-md-6" style="padding-top: 20px" id="hero1">
        <div class="card shadow" id="hero2">
            <div class="card-body" id="hero3">
                <form action="/edits" method="Post" enctype="multipart/form-data"> 
                    @csrf
                    <div class="mb-3">
                        <h2>Employee ID: {{$data['id']}}</h2>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value = "{{$data['id']}}">
                    </div>
                    <div class="mb-3">
                        <label for="Name" class="form-label">Employee Name</label>
                        <input name="Name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Name" value="{{ $data['Name'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="Age" class="form-label">Employee Age</label>
                        <input name="Age" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Age" value = "{{$data['Age']}}">


                    </div>
                    <div class="mb-3">
                        <label for="Address" class="form-label">Employee Address</label>
                        <input name="Address" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Address" value = "{{$data['Address']}}">
                    </div>
                    <div class="mb-3">
                        <label for="Phone" class="form-label">Phone Number</label>
                        <input name="Phone" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Phone" value = "{{$data['Phone']}}">
                    </div>

                    <a href="{{url('get-books')}}"><button type="submit" class="btn btn-success">Update</button></a>
                    <br>
                    <br>
                </form>
                <a href="{{url('get-books')}}"><button type="submit" class="btn btn-secondary">Cancel</button></a>
                <br>
                <br>
                <ul class="error" >
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</html>