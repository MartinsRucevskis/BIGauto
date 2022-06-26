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
    <?php $userId =  request()->route('id') ?>
    <?php $user = DB::select('SELECT * FROM users WHERE id ='.$userId)?>
    <div>
    <div class="container m-2">
    <div class="row">
        <div class="col-sm">
    <form method="Get" action="/lielaisdarbs/public/edituser/{{$user[0]->id}}/submit">
    <div class="form-group">
        <label for="formGroupExampleInput">Vārds</label>
        <input type="text" name="Vards" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$user[0]->Vards}}>

        <label for="formGroupExampleInput">Uzvārds</label>
        <input type="text" name="Uzvards" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$user[0]->Uzvards}}>

        <label for="formGroupExampleInput">Nummurs</label>
        <input type="text" name="Nummurs" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$user[0]->Nummurs}}>

        <label for="formGroupExampleInput">Bilde</label>
        <input type="text" name="Bilde" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$user[0]->Bilde}}>

        <label for="formGroupExampleInput">E-pasts</label>
        <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="Example input" value={{$user[0]->email}}>
    </div>
  <div class="form-group">
  <label for="exampleFormControlSelect1">Līmenis</label>
    <select class="form-control" name="Limenis" id="exampleFormControlSelect1"}}>
      <option value="1" <?php if($user[0]->Limenis == '1'){echo("selected");}?>>Pārdevējs</option>
      <option value="2" <?php if($user[0]->Limenis == '2'){echo("selected");}?>>Menedžeris</option>
    </select>
    </select>
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