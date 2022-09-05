@extends('layouts.app')
@php

@endphp
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
<link rel="stylesheet" href="css/Simple-Slider.css">
<link href="https://fonts.googleapis.com/css?family=Carrois+Gothic&display=swap" rel="stylesheet">


@section('content')
<div class="simple-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="d-inline-flex float-start swiper-slide" data-aos="slide-left" data-aos-duration="10" data-aos-delay="50" style="width: 1037.4px;filter: blur(0px) brightness(103%);opacity: 1;background: url(&quot;/images/p1.jpg&quot;) center / contain no-repeat;"></div>
            <div class="float-end swiper-slide" data-bss-disabled-mobile="true" data-aos="slide-left" data-aos-duration="10" data-aos-delay="100" style="background: url(&quot;/images/p3.jpg&quot;) center / contain no-repeat;"></div>
            <div class="swiper-slide" style="background: url(&quot;/images/p4jpg.jpg&quot;) center / contain no-repeat;"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev" style="filter: blur(0px) brightness(200%) contrast(200%) hue-rotate(296deg);"></div>
        <div class="swiper-button-next" style="filter: blur(0px) brightness(200%) contrast(200%) hue-rotate(296deg);"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="margin: 0px;height: 169px;">
            <div class="col-md-12 align-self-center m-auto" style="width: 1012px;height: 127px;margin: 62px;font-size: 100px;border-left-style: none;background: #ffffff;text-align: center;">
                <h1 style="font-family: 'Carrois Gothic', sans-serif;font-weight: bold;font-size: 30px;">AN EXTRA TOUCH OF GLAM</h1>
                <h2 style="font-family: 'Carrois Gothic', sans-serif;font-weight: bold;font-size: 20px; ">SUMMER MUST HAVES</h2>
            </div>
        </div>
    </div>

</div>

   <div class="container ">
       @if(Auth::user() && Auth::user()->role == 1)
       <button type="button" class="btn btn-primary  justify-content-center mt-50 mb-50" data-bs-toggle="modal" data-bs-target="#exampleModal" data-whatever="@mdo">Adauga un produs nou</button>
           @endif
   </div>
                    <div class="card-body z-depth 0">
                        <div class="container d-flex justify-content-center mt-50 mb-50">
                            <div class="row">
                                @foreach ($products as $product)

                                <div class="col-md-3 mt-2">
                                    <div class="card z-depth 0">
                                        <div class="card-body z-depth 0">
                                            <div class="card-img-actions"> <img src="{{ url($product->imagine) }}"  class="card-img " width="30" height="200"  style="object-fit: contain;"alt=""> </div>
                                        </div>
                                        <div class="card-body bg-light text-center">
                                            <div class="mb-2">
                                                <a href="/products/{{$product->id}}">
                                                    <h6 class="text-default mb-2" data-abc="true">{{ $product->nume }}</h6> </a> <a>EUR  {{ $product->pret }}</a>
                                            </div>
                                            <div class="mb-0 font-weight-semibold"><span style="font-family: 'Montserrat SemiBold';"> </span>{{ $product->descriere }}</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                        <br>
                        <br>
                    <div class="container">
                        <div class="row justify-content-evenly px-lg-0 px-md-0 px-10">
                         <div class="col-lg-2 col-md-2 text-center ">
                          <img src="images/g1.jpg" width="300px">

                         </div>
                          <div class="col-lg-2 col-md-2 text-center">
                          <img src="images/g2.jpg" width="300px">

                         </div>
                          <div class="col-lg-2 col-md-2 text-center ">
                          <img src="images/g3.jpg" width="300px">
                        </div>


                        <br>
                        <div class="container">
                            <div class="row justify-content-center align-items-center" style="margin: 0px;height: 169px;">
                                <div class="col-md-12 align-self-center m-auto" style="width: 1012px;height: 127px;margin: 62px;font-size: 100px;border-left-style: none;background: #ffffff;text-align: center;">
                                    <h1 style="font-family: 'Carrois Gothic', sans-serif;font-weight: bold;font-size: 30px;">VERSACE</h1>
                                    <h2 style="font-family: 'Carrois Gothic', sans-serif;font-weight: bold;font-size: 20px; "> SS22/ MAY CHOICES</h2>
                                </div>
                                <div class="card-body z-depth 0">
                                    <div class="container d-flex justify-content-center mt-50 mb-50">
                                <div class="row">
                                    @foreach ($nextproducts as $product)

                                    <div class="col-md-3 mt-2">
                                        <div class="card z-depth 0">
                                            <div class="card-body z-depth 0">
                                                <div class="card-img-actions"> <img src="{{ url($product->imagine) }}"
                                                    class="card-img " width="30" height="200"  style="object-fit: contain;"alt=""> </div>
                                            </div>
                                            <div class="card-body bg-light text-center">
                                                <div class="mb-2">
                                                    <a href="/products/{{$product->id}}"> <h6 class="text-default mb-2" data-abc="true">
                                                        {{ $product->nume }}</h6> </a> <a>EUR  {{ $product->pret }}</a>
                                                </div>
                                                <div class="mb-0 font-weight-semibold">
                                                    <span style="font-family: 'Montserrat SemiBold';"> </span>{{ $product->descriere }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                                </div>
                                <br>
                        <br>






   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Adauga </h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <form action="/" method="POST">
                       @csrf

                       <div class="form-group">
                           <label for="name">Nume:</label>
                           <input type="text" class="form-control" name="nume" placeholder="Introduceti numele" required="">
                       </div>
                       <div class="form-group">
                           <label for="email">Pret</label>
                           <input type="text" class="form-control" name="pret" placeholder="Introduceti pret" required="">
                       </div>
                       <div class="form-group">
                           <label for="salary">Imagine:</label>
                           <input type="text" class="form-control" name="imagine" placeholder="Introduceti imagine" required="">
                       </div>
                       <div class="form-group">
                           <label for="salary">Descriere:</label>
                           <input type="text" class="form-control" name="descriere" placeholder="Introduceti descriere" required="">
                       </div>
                       <div class="form-group">
                        <label for="detalii">Detalii:</label>
                        <textarea class="form-control" name="detalii" placeholder="Introduceti descriere" rows="7" required="">
                        </textarea>
                        </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Iesi</button>
                           <button type="submit" class="btn btn-primary">Adauga produs</button>
                       </div>

                   </form>
               </div>
           </div>

       </div>
   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
   <script src="js/Simple-Slider.js"></script>
@endsection
