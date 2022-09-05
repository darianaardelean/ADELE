
@extends('layouts.app') @section('content')

<div class="container mt-5 box-shadow 0">
  <div class="row">
    <div class="col-md-7">
      <div class="card z-depth 0">
        <div class="card body z-depth 0">
          <h5>Date despre client</h5>
          <hr />
          <div class="container mt-3">
            <form action="{{url ('place-order')}}" method="POST">
              {{csrf_field() }}
              <div class="row">
                <div class="col-lg-4">
                  <label for="firstName">Nume</label
                  ><input
                    name="nume"
                  type="text"
                    class="form-control"
                    placeholder="Introduceti numele"
                    class="form-control @error('nume') is-invalid @enderror" name="nume" value="{{ old('nume') }}" required autocomplete="nume" autofocus
                  />
                </div>
                <div class="col-md-4">
                  <label for="firstName">Prenume</label
                  ><input
                  name="prenume"
                    type="text"
                    class="form-control"
                    placeholder="Introduceti prenumele"
                    class="form-control @error('prenume') is-invalid @enderror" name="prenume" value="{{ old('prenume') }}" required autocomplete="prenume" autofocus
                  />
                </div>
                <div class="col-md-4">
                  <label for="firstName">Telefon</label
                  ><input
                  name="telefon"
                    type="text"
                    class="form-control"
                    placeholder="Introduceti telefon"
                    class="form-control @error('telefon') is-invalid @enderror" name="telefon" value="{{ old('telefon') }}" required autocomplete="telefon" autofocus
                  />
                </div>
              </div>
              <div class="row checkout-form">
                <div class="col-lg-12">
                  <label for="firstName">Adresa</label
                  ><input
                  name="adresa"
                    type="text"
                    class="form-control"
                    placeholder="Introduceti adresa"
                    class="form-control @error('adresa') is-invalid @enderror" name="adresa" value="{{ old('adresa') }}" required autocomplete="adresa" autofocus
                  />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <label for="firstName">Oras</label
                    ><input
                    name="oras"
                      type="text"
                      class="form-control"
                      placeholder="Introduceti orasul"
                      class="form-control @error('oras') is-invalid @enderror" name="oras" value="{{ old('oras') }}" required autocomplete="oras" autofocus
                    />
                  </div>
                <div class="col-md-6">
                  <label for="firstName">Cod postal</label
                  ><input
                  name="cod_postal"
                    type="text"
                    class="form-control"
                    placeholder="Introduceti codul postal"
                    class="form-control @error('cod_postal') is-invalid @enderror" name="cod_postal" value="{{ old('cod_postal') }}" required autocomplete="cod_postal" autofocus
                  />
                </div>
              </div>
              <div class="row checkout-form">
                <div class="col-lg-12">
                  <label for="firstName">Email</label
                  ><input
                  name="email"
                    type="text"
                    class="form-control"
                    placeholder="Introduceti email"
                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                  />
                </div>
              </div>
            </div>
               <button type="submit" class="btn btn-primary">Plasează comanda</button>

            </form>
        </div>

      </div>
    </div>
    <div class="col md-7">
        <div class="card">
            <div class="card-body">
                <h5>Date despre comanda</h5>
            <hr>
            <table class="table">

                <tbody>
            @foreach ($cart as $cartitem)
            <tr>

                    <td> {{$cartitem->nume}} </td>
                    <td> {{$cartitem->cantitate}}</td>
                    <td> EUR {{$cartitem->pret}}</td>
            </tr>

            @endforeach
                </tbody>


        </table>
        <hr>

</div>
</div>

@endsection
