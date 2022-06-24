
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

<div class="container " style="margin-top:30vh; margin-bottom:30vh">
<div class="row align-items-center justify-content-center">
<div class="col-sm-4 col-sm-offset-4">
<form action="dashboard" method="post">
  <div class="form-group">
    @csrf
    <label for="exampleInputEmail1">E-pasts</label>
    <input type="email" name="epasts" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Parole</label>
    <input type="password" name="parole" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary mt-3">Ienākt</button>
</form>
</div>
</div>
</div>
{{View::make('footer')}}    
@if(Session::has('jsAlert'))

<script type="text/javascript" >
    alert("Epasts vai parole ir nepareiza");
</script>

@endif

</body>
</html>