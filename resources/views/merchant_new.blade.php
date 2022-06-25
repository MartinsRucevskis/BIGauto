<!DOCTYPE html>
<html>
<head>
 <title>New Merchant</title>
</head>
<body>
 We will add a merchant for <b>{{ $country->country_name }}</b>:
 <form method="POST" 
action="{{action([App\Http\Controllers\MerchantController::class, 'store']) }}">
 @csrf
 <input type="hidden" name="country_id" value="{{ $country->id }}">
 <label for="name">Merchant Name: </label>
 <input type="text" name="name" id="name">
 <br>
 <label for="year_founded"> Year founded: </label>
 <input type="number" name="year_founded" id="year_founded">
 <br>
 <label for="managers_name">Managers_Name: </label>
 <input type="text" name="managers_name" id="managers_name">
 <br>
 <input type="submit" value="add">
 </form>
</body>
</html>