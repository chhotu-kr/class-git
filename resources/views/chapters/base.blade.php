<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #8BC6EC;
    background-image: linear-gradient(135deg, #8BC6EC 0%, #9599E2 100%);
    ">
        <div class="container">
            <a href="" class="navbar-brand text-white">Coaching Center</a>
            <form action="" class="d-flex">
                <input type="text" class="form-control" size="60">
                <button class=" btn btn-info"><i class="bi bi-search"></i></button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class=" nav-link text-white fw-bold">Home</a></li>
                <li class="nav-item"><a href="{{route('insert')}}" class=" nav-link text-white fw-bold">Insert</a></li>
                <li class="nav-item"><a href="" class=" nav-link text-white fw-bold">Course</a></li>
                <li class="nav-item"><a href="" class=" nav-link text-white fw-bold">Login</a></li>
             
            </ul>
        </div>
    </nav>
    @section('chhotu')
    
        
    @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
</body>
</html>