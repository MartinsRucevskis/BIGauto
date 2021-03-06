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
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-secondary" >
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <p class=" nav-link d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <img src={{$user[0]->Bilde}} alt="hugenerd" width="50" height="50" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">{{$user[0]->Vards." ".$user[0]->Uzvards}}</span>
</p>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start " id="menu">
                    <li class="nav-item">
                        <a href="dashboard" class="nav-link align-middle px-0">
                        <span class="ms-1 d-none d-sm-inline text-white">Sākums</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="admincars" class="nav-link align-middle px-0">
                        <span class="ms-1 d-none d-sm-inline text-white">Automašīnas</span>
                        </a>
                    </li>
                    <?php if ($user[0]->Limenis>=2) echo('
                    <li class="nav-item">
                        <a href="users" class="nav-link align-middle px-0">
                        <span class="ms-1 d-none d-sm-inline text-white">Lietotāji</span>
                        </a>
                    </li>') ?>
                    <li class="nav-item">
                        <a href="orders" class="nav-link align-middle px-0">
                        <span class="ms-1 d-none d-sm-inline text-white">Pasūtījumi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout" class="nav-link align-middle px-0">
                        <span class="ms-1 d-none d-sm-inline text-white">IZIET!</span>
                        </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <!-- <h1 class="display-1 text-center">Automašīnas</h1> -->
        <div class="row d-flex align-items-center justify-content-center p-0 m-0">
        <a href={{"http://localhost:8080/lielaisdarbs/public/newcar/"}} style="border-radius:0;" class="btn btn-primary d-flex align-items-center justify-content-center">Jauns Auto</a>
    <?php $count = 0; $pirmalapa=0 ?>
    <?php $cars = DB::select('SELECT * FROM cars')?>
    @foreach($cars as $car)
    @if($count % 3 == 0) <div class="row d-flex align-items-center justify-content-center p-0 m-0">
    @endif
    <?php $count++?>
    <div class="card m-3 p-0" style="width: 18rem; height:37rem">
        <img class="card-img-top img-fluid" style="height:30%; width:100%" src={{$car->Bilde}} alt={{$car->Razotajs." ".$car->Modelis }}>
        <div class="card-body">
        <ul class="list-group list-group-flush">
            <?php if($car->Pirma_lapa==1 && $car->Pardots==0) $pirmalapa++ ?>
            <li class="list-group-item">{{$car->Razotajs}}</li>
            <li class="list-group-item">{{$car->Modelis}}</li>
            <li class="list-group-item">{{$car->Gads}}</li>
            <li class="list-group-item">{{$car->Atrumkarba}}</li>
            <li class="list-group-item">{{$car->Cena." €"}}</li>
            <li class="list-group-item"><?php if ($car->Pardots==0) echo('<b class="text-success">Ir pārdošanā</b>'); else echo('<b class="text-danger">Pārdots</b>')?></li>
            <li class="list-group-item"><?php if($car->Pardots==1 ) echo('<b class="text-danger">Pārdots, netiek rādīts</b>'); else if ($car->Pirma_lapa==0) echo('<b class="text-danger">Netiek rādīts pirmajā lapā</b>'); else if($car->Pirma_lapa==1 && $pirmalapa <=5 ) echo('<b class="text-success">Tiek rādīts pirmajā lapā</b>'); else echo('<b class="text-warning">Tiek rādīts, nav vieta</b>')?></li>
        </ul>
        <a href={{"http://localhost:8080/lielaisdarbs/public/editcar/".$car->id}} class="btn btn-primary d-flex align-items-center justify-content-center mt-3">Reģidēt</a>
        <a href={{"http://localhost:8080/lielaisdarbs/public/editcar/".$car->id."/delete"}} class="btn btn-danger d-flex align-items-center justify-content-center mt-1">Dzēst</a>    
    </div>
    </div>

    @endforeach
    </div>
</div>
</body>
</html>