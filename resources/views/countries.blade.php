<!DOCTYPE html>
<html>
<head>
 <title>Countries</title>
</head>
<body>
 @if (count($countries) == 0)
 <p color='red'> There are no records in the database!</p>
 @else
 <table style="border: 1px solid black">
 <tr>
 <td> Country Id </td>
 <td> Country Name </td>
 <td> Country Code </td>
 <td> cities </td>
 <td> merchants </td>
 <td> </td>
 </tr>
 @foreach ($countries as $country)
 <tr>
 <td> {{ $country->id }} </td>
<td> {{ $country->country_name }} </td>
<td> {{ $country->country_code }} </td>
 <td> <input type="button" value="show" 
onclick="showCities({{ $country->id }})"> </td>
 <td> <input type="button" value="show" 
onclick="showMerchants({{ $country->id }})"> </td>
 <td>
 <form method="POST"
 
action='{{action([App\Http\Controllers\CountryController::class, 'destroy'], 
$country -> id) }}'>
 @csrf @method('DELETE')
<input type="submit" value="delete"></form>
 </td>
</td>
 @endforeach
 </table>
 @endif
 <script>
 function showCities(countryID) {
 window.location.href = "/city/country/" + countryID;
 }
 function showMerchants(countryID) {
 window.location.href = "/merchant/country/" + countryID;
 }
 </script>
</body>
</html>