@extends('layouts.app')
@section('content')
    <div class ="container table-responsive py-2">
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
        <h1>Cosul tau de cumparaturi:</h1>


        <tr>
            <th scope="col" style="width: 25%"></th>
            <th scope="col">Nume Produs</th>
            <th scope="col">Cantitate Produs</th>
            <th scope="col">Pret Produs</th>

        </tr>
        </thead>
        <tbody>

        @foreach ($cart as $cartItem)
        <tr>
            <td>  <img src="{{$cartItem->imagine}}" class="rounded col-lg-2"> </td>
            <td><a href="/products/{{$cartItem->id}}"> {{$cartItem->nume}}  <a/> </td>
                        <td>{{$cartItem->cantitate}}</td>
            <td>EUR {{$cartItem->pret}}</td>

            <td>    <form action="/carts/delete/{{$cartItem->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-secondary"  >Sterge produs</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <div class="container">
        <h5>Totalul de plata: EUR {{$total}}</h5>
        <a href="{{url ('checkout')}}" class="btn btn-primary" role="button">Finalizati comanda</a>
    </div>


@endsection
