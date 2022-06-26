<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
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
    @if(count($orders) > 1)
        <?php $count = 0?>
        
        @foreach($orders as $order)
        <div class="card m-3" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title">{{$order->Razotajs." ".$order->Modelis}}</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$order->Vards." ".$order->Uzvards}}</li>
            <li class="list-group-item">{{"Budžets: ".$order->Budzets}}</li>
            <li class="list-group-item">{{"Vēlamā krāsa: ".$order->Krasa}}</li>
            <li class="list-group-item">Tel: {{$order->Numurs}}</li>
            <li class="list-group-item">E-pasts: {{$order->Epasts}}</li>
        </ul>
        <div class="card-body">
            <form action="acceptorder" class="row m-2">
                <button type="submit"  class="btn btn-success">Pieņemt</button>
                <input type="hidden" name="email" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$order->Epasts}}>
            </form>
            <form action="declineorder" class="row m-2" >
                <button type="submit"  class="btn btn-warning">Atteikt</button>
                <input type="hidden" name="email" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$order->Epasts}}>
            </form>
            <form action="orders/destroy/{{$order->id}}" method="get" class="row m-2">
                <button type="submit"  class="btn btn-danger">Dzēst</button>
            </form>
  </div>
</div>
        @endforeach
    @else   
        <p> Neka nav</p>
    @endif
    </div>
</div>
</body>
</html>