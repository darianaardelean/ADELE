@extends('layouts.app')
@section('content')
<tr>
    <th scope="col">Nume Produs</th>
    <th scope="col" style="width: 25%">Imagine Produs</th>
    <th scope="col">Cantitate Produs</th>
    <th scope="col">Pret Produs</th>

</tr>
</thead>
<tbody>

@foreach ($products as $product)
<tr>
    <td>{{$product->nume}}</td>
    <td>  <img src="{{$product->imagine}}" class="rounded col-lg-2"> </td>
    <td>{{$product->cantitate}}</td>
    <td>{{$product->pret}}</td>

</tr>
</tbody>
</table>
@endsection
