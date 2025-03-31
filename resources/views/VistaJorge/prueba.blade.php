@extends('VistaJorge.master.master')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 600px;" data-bs-interval="5000">
                <img src="https://cdn.pixabay.com/photo/2016/11/29/13/17/architecture-1869776_1280.jpg"
                    class="d-block w-100" style="height: 100%; object-fit: cover; filter: brightness(0.6);"
                    alt="london-main" />
                <div class="carousel-caption top-0 mt-4">
                    <p class="mt-5 fs-3 text-uppercase">
                        Bienvenidos
                    </p>
                    <h1 class="display-1 fw-bolder text-capitalize">Londres</h1>
                    <a href="{{ route('jorge.info') }}" class="btn btn-primary px-4 py-2 fs-5 mt-5"
                        style="background: #C9B194; border-color: #C9B194;">
                        Información
                    </a>
                </div>
            </div>
            <div class="carousel-item d-item" style="height: 600px;" data-bs-interval="5000">
                <img src="https://cdn.pixabay.com/photo/2019/10/27/18/48/new-york-4582500_1280.jpg" class="d-block w-100"
                    style="height: 100%; object-fit: cover; filter: brightness(0.6);" alt="..." />
                <div class="carousel-caption top-0 mt-4">
                    <p class="mt-5 fs-3 text-uppercase">
                        Bienvenidos
                    </p>
                    <h1 class="display-1 fw-bolder text-capitalize">Nueva York</h1>
                    <a href="{{ route('jorge.info') }}" class="btn btn-primary px-4 py-2 fs-5 mt-5"
                        style="background: #C9B194; border-color: #C9B194;">
                        Información
                    </a>
                </div>
            </div>
            <div class="carousel-item d-item" style="height: 600px;" data-bs-interval="5000">
                <img src="https://cdn.pixabay.com/photo/2021/06/25/20/15/latin-american-tower-6364659_1280.jpg"
                    class="d-block w-100" style="height: 100%; object-fit: cover; filter: brightness(0.6);"
                    alt="..." />
                <div class="carousel-caption top-0 mt-4">
                    <p class="mt-5 fs-3 text-uppercase">
                        Bienvenidos
                    </p>
                    <h1 class="display-1 fw-bolder text-capitalize">Ciudad de México</h1>
                    <a href="{{ route('jorge.info') }}" class="btn btn-primary px-4 py-2 fs-5 mt-5"
                        style="background: #C9B194; border-color: #C9B194;">
                        Información
                    </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
