@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <img class="img-fluid" src="{{ asset('img/hom.jpg') }}" alt="">

    <div class="mama" style="background-color: gainsboro;height:300px">

        <h1 class="categori" style="display: flex;justify-content:center">categories</h1>
        <div class="ma">
            <a href="{{ route('view_cate_one_piece') }}"><img class='m' style="height: 180px;border-radius:10px"
                    src="{{ asset('img/cate1.jpg') }}" class="rounded float-start " alt="...">
            </a>
            <a href="{{ route('view_cate_attack') }}">

                <img class='m' style="height: 180px;border-radius:10px" src="{{ asset('img/cate2.webp') }}"
                    class="rounded float-center" alt="...">
            </a>
            <a href="{{ route('view_cate_dragon') }}">

                <img class='m' style="height: 180px;border-radius:10px" src="{{ asset('img/cate3.jpg') }}"
                    class="rounded float-center" alt="...">


            </a>
            <a href="{{ route('view_cate_naruto') }}">


                <img class='m' style="height: 180px;border-radius:10px;" src="{{ asset('img/cate4.jpg') }}"
                    class="rounded float-center" alt="...">

            </a>


        </div>
    </div>

    <div style="display:flex; justify-content:space-around">


    </div>

    <h2 style="display: flex;justify-content:center">En évidence</h2>



    <div class="row flex">
        @foreach ($article as $articles)
            <div class="qua col-md-3 d-flex flex-column shadow-lg p-3 mb-5 bg-body rounded">
                <p>{{ $articles->nom }}</p>
                <img src={{ $articles->image }} style="height: 250px; width: 250px;" alt="">
                <br>
                <form action="{{ route('info') }}">


                    <input type="hidden" name="id" value="{{ $articles->id }}">
                    <input type="hidden" name="nom" value="{{ $articles->nom }}">

                    <input type="hidden" name="image" value="{{ $articles->image }}">
                    <input type="hidden" name="prix" value="{{ $articles->prix }}">
                    <input type="hidden" name="description" value="{{ $articles->description }}">









                    <input class="btn btn-dark" type="submit" value="info">

                </form>

                <br>
            </div>
        @endforeach
    </div>
@endsection
