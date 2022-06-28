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
<h1 class="display-1 text-center">Pasūti auto</h1>
<div class="border-top my-3"></div>
<div style="margin: auto; width: 60%; padding: 10px;">
<p>Kā šis strādā? Iesniedziet savu vēlamo auto, budžetu, auto....septiņu darba dienu laikā ar jums sazināsimies...
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<form action="create/store" method="GET">
  <div class="form-row">
    <div class="form-group">
    <label for="inputAddress" class="form-label">Vārds</label>
    <input type="text" name="Vards" class="form-control" id="inputAddress" placeholder="Jūsu vārds" required=""  oninvalid="this.setCustomValidity('Lūdzu ievadiet savu vārdu')"  oninput="setCustomValidity('')">
  </div>
  <div class="form-group">
    <label for="inputAddress">Uzvārds</label>
    <input type="text" name="Uzvards" class="form-control" id="inputAddress" placeholder="Jūsu uzvārds" required="" oninvalid="this.setCustomValidity('Lūdzu ievadiet savu uzvārdu')"  oninput="setCustomValidity('')">
  </div>
  <div class="form-group">
    <label for="inputAddress">Numurs</label>
    <input type="number" name="Numurs" class="form-control" id="inputAddress" placeholder="Jūsu telefona numurs" required oninvalid="this.setCustomValidity('Lūdzu ievadiet savu numuru')"  oninput="setCustomValidity('')">
  </div>
  <div class="form-group">
      <label for="inputEmail4">E-pasts</label>
      <input type="email" name="Epasts" class="form-control" id="inputEmail4" placeholder="Jūsu e-pasts pa kuru sazināsimies" required oninvalid="this.setCustomValidity('Lūdzu ievadiet pareizu e-pasta adresi')"  oninput="setCustomValidity('')">
    </div>
  <div class="form-group">
    <label for="inputAddress">Auto ražotājs</label>
    <input type="text" name="Razotajs" class="form-control" id="inputAddress" placeholder="BMW" required oninvalid="this.setCustomValidity('Lūdzu ievadiet auto ražotāju')"  oninput="setCustomValidity('')">
  </div>
  <div class="form-group">
    <label for="inputAddress">Auto modelis</label>
    <input type="text" name="Modelis" class="form-control" id="inputAddress" placeholder="530i" required oninvalid="this.setCustomValidity('Lūdzu ievadiet auto modeli')"  oninput="setCustomValidity('')">
  </div>
  <div class="form-group">
    <label for="inputAddress">Auto Gads</label>
    <input type="number" min="1900" max="2030" name="Gads" class="form-control" id="inputAddress" placeholder="2009" required oninvalid="this.setCustomValidity('Lūdzu vēlamo auto gadu')"  oninput="setCustomValidity('')">
  </div>
  <div class="form-group">
    <label for="inputAddress">Budžets</label>
    <input type="text" name="Budzets" class="form-control" id="inputAddress" placeholder="8000" required oninvalid="this.setCustomValidity('Lūdzu ievadiet vēlamo budžetu')"  oninput="setCustomValidity('')">
  </div>
  <div class="form-group">
    <label for="inputAddress">Vēlamā auto krāsa</label>
    <input type="text" name="Krasa" class="form-control" id="inputAddress" placeholder="Melna/vienalga..." required oninvalid="this.setCustomValidity('Lūdzu ievadiet vēlamo auto krāsu')"  oninput="setCustomValidity('')">
  </div>
  </div>

  <button type="submit" class="btn btn-primary mt-3">Iesniegt</button>
</form>
</div>
{{View::make('footer')}}
</body>
</html>