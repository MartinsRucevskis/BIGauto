<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="overflow-x: hidden">
<?php use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
$id = Auth::id();
$user = DB::select('SELECT * FROM users WHERE id='.$id);?>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-secondary">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Izvēlne</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start " id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                        <span class="ms-1 d-none d-sm-inline text-white">Sākums</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                        <span class="ms-1 d-none d-sm-inline text-white">Automašīnas</span>
                        </a>
                    </li>
                    <?php if ($user[0]->Limenis>=2) echo('
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                        <span class="ms-1 d-none d-sm-inline text-white">Lietotāji</span>
                        </a>
                    </li>') ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                        <span class="ms-1 d-none d-sm-inline text-white">Pasūtījumi</span>
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <span href="#" class="d-flex align-items-center text-white text-decoration-none" id="dropdownUser1" aria-expanded="false">
                        <img src={{$user[0]->Bilde}} alt="hugenerd" width="50" height="50" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">{{$user[0]->Vards." ".$user[0]->Uzvards}}</span>
                    </span>
                </div>
            </div>
        </div>
        <!-- <h1 class="display-1 text-center">Automašīnas</h1> -->
    
    <?php $count = 0 ?>
    <?php $cars = DB::select('SELECT * FROM cars')?>
    @foreach($cars as $car)
    @if($count % 4 == 0) <div class="row d-flex align-items-center justify-content-center p-0 m-0">
    @endif
    <?php $count++ ?>
    <div class="card m-3 p-0" style="width: 16rem; height:27rem">
        <img class="card-img-top img-responsive" style="height:37%; width:100%" src={{$car->Bilde}} alt={{$car->Razotajs." ".$car->Modelis }}>
        <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$car->Razotajs}}</li>
            <li class="list-group-item">{{$car->Modelis}}</li>
            <li class="list-group-item">{{$car->Gads}}</li>
            <li class="list-group-item">{{$car->Atrumkarba}}</li>
            <li class="list-group-item">{{$car->Cena." €"}}</li>
        </ul>
        <a href={{"http://localhost:8080/lielaisdarbs/public/car/".$car->id}} class="btn btn-primary stretched-link d-flex align-items-center justify-content-center">Reģidēt</a>
        </div>
    </div>

    @endforeach
    </div>
</div>
</body>
</html>