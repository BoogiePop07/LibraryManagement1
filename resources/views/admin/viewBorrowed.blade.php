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
<div class="row justify-content-center">
            <div class="col-md-10 ">
            <h1 class="text-center pt-5">Borrowed Books</h1>
            <br>
                <div class="table-responsive">
                     <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Book Name</th>
                                <th scope="col">Published Date</th>
                                <th scope="col">Author</th>
                                <th scope="col">Cost</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach($books as $book)
                            <tr>
                                <td>{{$book->book_name}}</td>
                                <td>{{ $book->publish_date}}</td>
                                <td>{{$book->author}}</td>
                                <td>{{$book->cost}}</td>

                                <td>
                         
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
</body>

</html>

@endsection
