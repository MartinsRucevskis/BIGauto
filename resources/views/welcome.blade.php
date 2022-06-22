<?php use Illuminate\Support\Facades\DB; ?>
<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden; ">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
{{View::make('header')}}
<div class="container" style="margin-left:-0.8vw;">
<div style="text-align: center;  position: absolute; left: 0; right: 0; margin-left: auto; margin-right: auto; width: 30vw; color:white; top:25%" >
<h1 class="display-1" style="font-weight:450;">BIG auto</h1>
<h1 class="lead" style="font-weight:450;">LIELIE auto, LIELIEM cilvēkiem</h1></div>
<img src="https://i.imgur.com/BRCEaOb.png"  style="width:100vw;">
</div>
<?php $car = DB::select('SELECT * FROM cars WHERE pirma_lapa=1 AND pardots=0 LIMIT 5;')?>
<?php $count = 0 ?>
    @foreach($car as $car)
    @if($count % 5 == 0) <div class="row d-flex align-items-center justify-content-center p-0 m-0">
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
        <a href={{"http://localhost:8080/lielaisdarbs/public/car/".$car->id}} class="btn btn-primary stretched-link d-flex align-items-center justify-content-center">Apskatīt</a>
        </div>
    </div>
    @endforeach
    </div>
    <div class="col-md-12 text-center">
    <a class="btn btn-secondary btn-lg btn-block mb-5 mt-4" style="width:40% ;" href="http://localhost:8080/lielaisdarbs/public/cars" role="button">Apskatīt vairāk</a>
    </div>
{{View::make('footer')}}
</body>
</html>