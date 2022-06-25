<!DOCTYPE html>
<html>
<head>
 <title>Merchants</title>
</head>
<body>
 @if (count($merchants) == 0)
 <p color='red'> There is no merchant in the database!</p>
 @else
 <table border="1">
 <tr>
 <td> Merchant ID </td>
 <td> Merchant Name </td>
 <td> Managers Name </td>
 <td> Year founded </td>
 <td> Country Id </td>
 <td> Delete </td>
 </tr>
 @foreach ($merchants as $merchant)
 <tr>
 <td> {{ $merchant->id }} </td>
 <td> {{ $merchant->name }} </td>
 <td> {{ $merchant->manager_name }} </td>
 <td> {{ $merchant->year_founded }} </td>
 <td> {{ $merchant->country_id }} </td>
 <td>
 <form method="POST"
 
action="{{action([App\Http\Controllers\MerchantController::class, 'destroy'], 
$merchant->id) }}">
 @csrf @method('DELETE')<input type="submit" 
value="delete"></form>
</td>

 @endforeach
 </table>
 @endif
 <p> <input type="button" value="New Merchant" onclick="newMerchant( {{ $country_id }})"> </p>
 <script>
 function newMerchant(countryID) {
 window.location.href = "/merchant/country/" + countryID + "/create";
 }
 </script>
</body>
</html>