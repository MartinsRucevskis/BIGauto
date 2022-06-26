<?php use Illuminate\Support\Facades\DB; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    form{margin-top: 1rem; margin-left: 30rem; margin-right: 30rem;}
    label{margin-top: 1rem;}


    </style>
</head>
<body>
{{View::make('header')}}
    <form method="Get" action="/lielaisdarbs/public/newcar/create" width="1000px">
    <div class="form-group">
        <label for="formGroupExampleInput">Ražotājs</label>
        <input type="text" name="Razotajs" class="form-control" id="formGroupExampleInput" placeholder="Auto Ražotājs" >

        <label for="formGroupExampleInput">Modelis</label>
        <input type="text" name="Modelis" class="form-control" id="formGroupExampleInput" placeholder="Auto modelis" >

        <label for="formGroupExampleInput">Gads</label>
        <input type="text" name="Gads" class="form-control" id="formGroupExampleInput" placeholder="Ražošanas gads" >

        <label for="formGroupExampleInput">Tilpums</label>
        <input type="text" name="Tilpums" class="form-control" id="formGroupExampleInput" placeholder="Auto motora tilpums" >

        <label for="formGroupExampleInput">Ātrumkārba</label>
        <input type="text" name="Atrumkarba" class="form-control" id="formGroupExampleInput" placeholder="Manuāla/Automāts">

        <label for="formGroupExampleInput">VinKods</label>
        <input type="text" name="VinKods" class="form-control" id="formGroupExampleInput" placeholder="Auto VIN kods" >
        
        <label for="formGroupExampleInput">Vietas</label>
        <input type="text" name="Vietas" class="form-control" id="formGroupExampleInput" placeholder="Vietu skaits" >
    
        <label for="formGroupExampleInput">Ātrumu skaits</label>
        <input type="text" name="Atrumu_skaits" class="form-control" id="formGroupExampleInput" placeholder="Ātrumkārbas ātrumu skaits" >
    
        <label for="formGroupExampleInput">Degviela</label>
        <input type="text" name="Degviela" class="form-control" id="formGroupExampleInput" placeholder="Bendzīns/dīzelis/elektrisks/hibrīds" >
    
        <label for="formGroupExampleInput">Cena</label>
        <input type="text" name="Cena" class="form-control" id="formGroupExampleInput" placeholder="Cena eiro" >

        <label for="formGroupExampleInput">Piedziņa</label>
        <input type="text" name="Piedzina" class="form-control" id="formGroupExampleInput" placeholder="Aizmugurējā/priekšējā/pilnpiedziņa" >

        <label for="formGroupExampleInput">Bilde</label>
        <input type="text" name="Bilde" class="form-control" id="formGroupExampleInput" placeholder="Links uz bildi, galā .jpg" >
    </div>
  <div class="form-group">
  <label for="exampleFormControlSelect1">Vai ir pārdošanā</label>
    <select class="form-control" name="Pardots" id="exampleFormControlSelect1" >
      <option value="0" >Jā</option>
      <option value="1" >Nē</option>
    </select>
    <label for="exampleFormControlSelect1">Vai tiek rādīts pirmajā lapā</label>
    <select class="form-control" name="Pirma_lapa" id="exampleFormControlSelect1">
      <option value="1" >Jā</option>
      <option value="0">Nē</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Apraksts</label>
    <textarea class="form-control" name="Apraksts" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary mt-3 mb-2">Izveidot</button>
</form>
        </div>
    </div>
    </div>
</div>    
</div>
{{View::make('footer')}}
</body>
</html>