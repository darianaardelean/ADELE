@extends('layouts.app')


@section('content')
    <div class="container mt-12 mb-12">
        <br>
        <br>
        <h1 style="font-size: 28px;"> {{$product -> nume}}</h1>
        <br>
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image" src="{{ $product->imagine }}" width="250" /> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                                <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"></span>
                                    <h5 class="text-uppercase">{{ $product->nume }}</h5>
                                    <div class="price d-flex flex-row align-items-center"> EUR {{ $product->pret }}<span class="act-price"></span>
                                    </div>
                                </div>
                                <p class="about">{{ $product->descriere }}</p>
                                        <form method="post" action="/products/addProduct/{{$product->id}}">
                                            @csrf
                                            @method('POST')

                                            <div class="row">
                                                <div class="col-lg-6">
                                                  <label for="firstName">Mărime</label>
                                                  <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>34</option>
                                                    <option>36</option>
                                                    <option>38</option>
                                                    <option>40</option>
                                                    <option>42</option>
                                                  </select>
                                                </div>
                                                <div class="col-md-6">
                                                  <label for="firstName">Cantitate</label>
                                                  <input id="cantitate" type="number" value ="1" min="1" max="10" style="w-20" class="form-control quantity-input  @error('cantitate') is-invalid @enderror"  placeholder="Introduceti cantitatea" name="cantitate" value="{{ old('cantitate') }}" required autocomplete="cantitate" autofocus>
                                                  <br>
                                            </div>
                                            <input type="submit" name="submit" class="btn btn-primary " style="" value="Adauga cos" placeholder="Alege cantitatea">


                                        </form>

                                    </div>
                                <br>
                                @if(Auth::user()->role == 1)
                                        <form action="/products/{{$product->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Sterge produs</button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo">Editeaza produs</button>
                                        </form>
                                    @endif
                                 </div>
                                <br>
                            <h5 class="text">{{ $product->detalii }}</h5></p>
                        </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editeaza</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/products/{{$product->id}}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nume">Nume:</label>
                            <input type="text" class="form-control" name="nume" placeholder="Introduceti numele" required="">
                        </div>
                        <div class="form-group">
                            <label for="pret">Pret</label>
                            <input type="number" class="form-control" name="pret" placeholder="Introduceti pret" required="">
                        </div>

                        <div class="form-group">
                            <label for="imagine">Imagine:</label>
                            <input type="text" class="form-control" name="imagine" placeholder="Introduceti imagine" required="">
                        </div>
                        <div class="form-group">
                            <label for="descriere">Descriere:</label>
                            <input type="text" class="form-control" name="descriere" placeholder="Introduceti descriere" required="">
                        </div>
                        <div class="form-group">
                            <label for="detalii">Detalii:</label>
                            <textarea class="form-control" name="detalii" placeholder="Introduceti descriere" rows="7" required="">
                            </textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Editeaza produs</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
