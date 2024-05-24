@extends ('layouts.navbar')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset = "UTF-8">
        <meta http-equiv = "X-UA_Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/1d8d68cd8a.js" crossorigin="anonymous"></script>
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap Datepicker CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <!-- Bootstrap Datepicker JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Add Book</title>
</head>
<body>
<div class = "">
        <div class ="row">
            <div class = "col">
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add Book</p>
            <form class="mx-1 mx-md-4" method = "POST" action = "{{route('admin.add')}}">
                    @csrf
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-book fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name ="bname" placeholder="Book Name"/>
                      <label class="form-label" for="form3Example1c"></label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" name ="author" placeholder="Author"/>
                      <label class="form-label" for="form3Example1c"></label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-regular fa-calendar fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="datepicker" class="form-control" name ="pdate" placeholder="Date"/>
                    </div>
                  </div>
                  

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-Money fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example4c" class="form-control" name ="cost" placeholder="Cost"/>
                      <label class="form-label" for="form3Example4c"></label>
                    </div>
                  </div>

                  

            

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4 ">
                    <button type="submit" class="btn btn-primary btn-lg">Add</button>
                  </div>

                </form>
              </div>
              
                        </div>
                    </div>
</body>
<script>
    $(document).ready(function(){
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd', // Format date as YYYY-MM-DD
            autoclose: true // Close the datepicker when a date is selected
        });
    });
</script>

</html>

@endsection