<?php use Illuminate\Support\Facades\DB; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
{{View::make('header')}}
<div class="d-flex align-items-center justify-content-center">
    <?php $banda =  request()->route('id') ?>
    <?php $car = DB::select('SELECT * FROM cars WHERE pardots=0 AND id ='.$banda)?>
    <div>
    <img class="rounded mt-2" width="1100px" height="600px" src= {{$car[0]->Bilde}}>

    <h1 class="mt-3">{{$car[0]->Razotajs." ".$car[0]->Modelis." ".$car[0]->Gads}}</h1>
    <hr class="my-12"/>
    <div class="container m-2">
    <div class="row">
        <div class="col-sm">
        <ul>
            <li>Tilpums : {{$car[0]->Tilpums." ".$car[0]->Degviela}}</li>
            <li>Ātrumkārba : {{$car[0]->Atrumkarba.", ".$car[0]->Atrumu_skaits." ātrumi"}}</li>
            <li>VIN : {{$car[0]->VinKods}}</li>
            <li>Vietas : {{$car[0]->Vietas}}</li>
            <li>Piedziņa : {{$car[0]->Piedzina}}</li>
        </ul>
        </div>
        <div class="col-sm">
            <p>{{$car[0]->Apraksts}}</p>
        </div>
    </div>
    </div>
</div>    
</div>
{{View::make('footer')}}
</body>
</html>