@extends('layouts.app')

@section('content')
<div class ="container table-responsive py-2">
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
        <h1>Date despre comenzi</h1>


        <tr>

            <th scope="col">Id</th>
            <th scope="col">Nr.comandă</th>
            <th scope="col">Nume</th>
            <th scope="col">Prenume</th>
            <th scope="col">Id produs</th>
            <th scope="col">Adresă</th>
            <th scope="col">Email</th>
            <th scope="col">Telefon</th>
            <th scope="col">Cod postal</th>
            <th scope="col">Oras</th>
            <th scope="col">Data și ora creării</th>
            <th scope="col">  </th>
            <th scope="col">Confirmare comandă </th>

        </tr>
        </thead>
        <tbody>
    @if(Auth::user()->role == 1)




        <tbody>
        @foreach ($order as $orderitem)
        <tr>
                <td> {{$orderitem->id}} </td>
                <td> {{$orderitem->numar_comanda}} </td>
                <td> {{$orderitem->nume}} </td>
                <td> {{$orderitem->prenume}} </td>
                <td> {{$orderitem->product_id}} </td>
                <td> {{$orderitem->adresa}} </td>
                <td> {{$orderitem->email}} </td>
                <td> {{$orderitem->telefon}} </td>
                <td> {{$orderitem->cod_postal}} </td>
                <td> {{$orderitem->oras}} </td>
                <td> {{$orderitem->created_at}} </td>
                <td>    <form action="/orders/delete/{{$orderitem->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-secondary"  >Sterge Comandă</button>
                        </form>
                </td>
                <td>

                    <label class="container">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                </td>
            </tr>

        @endforeach
        </tbody>


        </table>

    </div>
    @endif
</div>

@endsection
