@extends('master.master')
@section('content')

    <style>
        .carousel-inner img {
            height: 620px; 
            object-fit: cover;
        }
    </style>

    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1504625709867-b4e45e3bb9dd?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGFycXVpdGVjdHVyYSUyMGJydXRhbGlzdGF8ZW58MHx8MHx8fDA%3D" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://e1.pxfuel.com/desktop-wallpaper/780/130/desktop-wallpaper-brutalist-architect.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2021/01/01/22/11/brutalist-5880149_1280.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

@endsection