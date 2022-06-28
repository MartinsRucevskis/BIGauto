<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIGauto</title>
</head>
<body>
    {{View::make('header')}}
    <h1 class="display-1 text-center">Automašīnas</h1>
    
    <div class="border-top my-3"></div>
    <?php $count = 0 ?>
    @foreach($cars as $car)
    @if($car->Pardots==0)
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
    @if($count % 5 == 0) </div>
    @endif
    @endif
    @endforeach
        {{View::make('footer')}}
    
</body>
</html>