<?php use Illuminate\Support\Facades\DB; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>label{margin-top: 1rem;}</style>
</head>
<body>
{{View::make('header')}}
<div class="d-flex align-items-center justify-content-center">
    <?php $banda =  request()->route('id') ?>
    <?php $car = DB::select('SELECT * FROM cars WHERE pardots=0 AND id ='.$banda)?>
    <div>
    <img class="rounded" width="100%" height="100%" src= {{$car[0]->Bilde}}>

    <h1 class="mt-3">{{$car[0]->Razotajs." ".$car[0]->Modelis." ".$car[0]->Gads}}</h1>
    <hr class="my-12"/>
    <div class="container m-2">
    <div class="row">
        <div class="col-sm">
    <form method="Get" action="/lielaisdarbs/public/editcar/{{$car[0]->id}}/submit">
    <div class="form-group">
        <label for="formGroupExampleInput">Ražotājs</label>
        <input type="text" name="Razotajs" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$car[0]->Razotajs}}>

        <label for="formGroupExampleInput">Modelis</label>
        <input type="text" name="Modelis" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$car[0]->Modelis}}>

        <label for="formGroupExampleInput">Gads</label>
        <input type="text" name="Gads" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$car[0]->Gads}}>

        <label for="formGroupExampleInput">Tilpums</label>
        <input type="text" name="Tilpums" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$car[0]->Tilpums}}>

        <label for="formGroupExampleInput">Ātrumkārba</label>
        <input type="text" name="Atrumkarba" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$car[0]->Atrumkarba}}>

        <label for="formGroupExampleInput">VinKods</label>
        <input type="text" name="VinKods" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$car[0]->VinKods}}>
        
        <label for="formGroupExampleInput">Vietas</label>
        <input type="text" name="Vietas" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$car[0]->Vietas}}>
    
        <label for="formGroupExampleInput">Ātrumu skaits</label>
        <input type="text" name="Atrumu_skaits" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$car[0]->Atrumu_skaits}}>
    
        <label for="formGroupExampleInput">Degviela</label>
        <input type="text" name="Degviela" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$car[0]->Degviela}}>
    
        <label for="formGroupExampleInput">Cena</label>
        <input type="text" name="Cena" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$car[0]->Cena}}>

        <label for="formGroupExampleInput">Piedziņa</label>
        <input type="text" name="Piedzina" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$car[0]->Piedzina}}>

        <label for="formGroupExampleInput">Bilde</label>
        <input type="text" name="Bilde" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$car[0]->Bilde}}>
    </div>
  <div class="form-group">
  <label for="exampleFormControlSelect1">Vai ir pārdošanā</label>
    <select class="form-control" name="Pardots" id="exampleFormControlSelect1" value={{$car[0]->Pardots}}>
      <option value="0" <?php if($car[0]->Pardots == '0'){echo("selected");}?>>Jā</option>
      <option value="1" <?php if($car[0]->Pardots == '1'){echo("selected");}?>>Nē</option>
    </select>
    <label for="exampleFormControlSelect1">Vai tiek rādīts pirmajā lapā</label>
    <select class="form-control" name="Pirma_lapa" id="exampleFormControlSelect1" value={{$car[0]->Pirma_lapa}}>
      <option value="1" <?php if($car[0]->Pirma_lapa == '1'){echo("selected");}?>>Jā</option>
      <option value="0" <?php if($car[0]->Pirma_lapa == '0'){echo("selected");}?>>Nē</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Apraksts</label>
    <textarea class="form-control" name="Apraksts" id="exampleFormControlTextarea1" rows="3">{{$car[0]->Apraksts}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary mt-2">Veikt izmaiņas</button>
</form>
        </div>
    </div>
    </div>
</div>    
</div>
{{View::make('footer')}}
</body>
</html>