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
    <form method="Get" action="/lielaisdarbs/public/newuser/create" >
    <div class="form-group">
        <label for="formGroupExampleInput">Vārds</label>
        <input type="text" name="Vards" class="form-control" id="formGroupExampleInput" placeholder="Vārds" >

        <label for="formGroupExampleInput">Uzvārds</label>
        <input type="text" name="Uzvards" class="form-control" id="formGroupExampleInput" placeholder="Uzvārds" >

        <label for="formGroupExampleInput">E-pasts</label>
        <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="Darba epasts" >

        <label for="formGroupExampleInput">Nummurs</label>
        <input type="text" name="Nummurs" class="form-control" id="formGroupExampleInput" placeholder="25991823" >

        <label for="formGroupExampleInput">Bilde</label>
        <input type="text" name="Bilde" class="form-control" id="formGroupExampleInput" placeholder="Links uz bildi ar .jpg galā" >

        <label for="formGroupExampleInput">Parole</label>
        <input type="text" name="Parole" class="form-control" id="formGroupExampleInput" placeholder="Lietotāja parole" >
    </div>
  <div class="form-group">
  <label for="exampleFormControlSelect1">Lietotāja līmenis</label>
    <select class="form-control" name="Limenis" id="exampleFormControlSelect1" >
      <option value="1" >Pārdevējs</option>
      <option value="2" >Menedžeris</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary mt-3 mb-3">Izveidot lietotaju</button>
</form>
        </div>
    </div>
    </div>
</div>    
</div>
{{View::make('footer')}}
</body>
</html>