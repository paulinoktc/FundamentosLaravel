@extends('VistaJorge.master.master')
@section('content')
    <div class="container mt-4" style="padding: 0 0 30px 0px">

        <ul class="nav nav-pills nav-fill gap-2 p-1 small rounded-5 shadow-sm" id="pillNav2" role="tablist"
            style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: #C9B194; --bs-nav-pills-link-active-bg: var(--bs-white); --bs-nav-link-hover-color: #695741; background: #C9B194;">
            <li class="nav-item" role="presentation">
                <button class="nav-link active rounded-5" id="london-tab" data-bs-toggle="tab" data-bs-target="#london"
                    type="button" role="tab" aria-selected="true">Londres</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="ny-tab" data-bs-toggle="tab" data-bs-target="#nuevayork"
                    type="button" role="tab" aria-selected="false">Nueva York</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="mexico-tab" data-bs-toggle="tab" data-bs-target="#mexico"
                    type="button" role="tab" aria-selected="false">Ciudad de México</button>
            </li>
        </ul>


        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="london" role="tabpanel" aria-labelledby="london-tab">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Londres</h5>
                        <p class="card-text">Londres es la capital de Inglaterra y del Reino Unido. Es una de las ciudades
                            más vibrantes del mundo, conocida por su historia, cultura y diversidad.</p>
                        <p>Población: aproximadamente 9 millones de habitantes.</p>
                        <p>Lugares emblemáticos: Big Ben, London Eye, Torre de Londres.</p>
                    </div>
                    <div id="carouselLondon" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselLondon" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselLondon" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselLondon" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 600px;">
                                <img src="https://cdn.pixabay.com/photo/2015/08/23/16/20/westminster-902972_1280.jpg"
                                    class="d-block w-100" style="object-fit: cover;" alt="Big ben">
                            </div>
                            <div class="carousel-item" style="height: 600px;">
                                <img src="https://cdn.pixabay.com/photo/2021/10/25/11/52/london-eye-6740605_1280.jpg"
                                    class="d-block w-100" style="height: 100%; object-fit: cover;" alt="London Eye">
                            </div>
                            <div class="carousel-item" style="height: 600px;">
                                <img src="https://cdn.pixabay.com/photo/2014/05/25/18/40/tower-of-london-353868_1280.jpg"
                                    class="d-block w-100" style="height: 100%; object-fit: cover;" alt="Torre de Londres">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselLondon"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselLondon"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nuevayork" role="tabpanel" aria-labelledby="ny-tab">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nueva York</h5>
                        <p class="card-text">Nueva York es la ciudad más poblada de los Estados Unidos, conocida como "la
                            ciudad que nunca duerme".</p>
                        <p>Población: aproximadamente 8.5 millones de habitantes.</p>
                        <p>Lugares emblemáticos: Estatua de la Libertad, Times Square, Central Park.</p>
                    </div>
                    <div id="carouselNewYork" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselNewYork" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselNewYork" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselNewYork" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 600px;">
                                <img src="https://cdn.pixabay.com/photo/2017/10/19/19/17/statue-of-liberty-2868890_1280.jpg"
                                    class="d-block w-100" style="height: 100%; object-fit: cover;" alt="statue-of-liberty">
                            </div>
                            <div class="carousel-item" style="height: 600px;">
                                <img src="https://cdn.pixabay.com/photo/2017/08/06/09/59/times-square-2590853_1280.jpg"
                                    class="d-block w-100" style="height: 100%; object-fit: cover;" alt="times-square">
                            </div>
                            <div class="carousel-item" style="height: 600px;">
                                <img src="https://cdn.pixabay.com/photo/2019/07/21/07/12/new-york-4352072_1280.jpg"
                                    class="d-block w-100" style="height: 100%; object-fit: cover;" alt="central-park">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselNewYork"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselNewYork"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="mexico" role="tabpanel" aria-labelledby="mexico-tab">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ciudad de México</h5>
                        <p class="card-text">La Ciudad de México es la capital de México y una de las ciudades más grandes
                            del mundo.</p>
                        <p>Población: aproximadamente 9.2 millones de habitantes.</p>
                        <p>Lugares emblemáticos: Zócalo, Palacio de Bellas Artes, Xochimilco.</p>
                    </div>
                    <div id="carouselMexico" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselMexico" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselMexico" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselMexico" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 600px;">
                                <img src="https://cdn.pixabay.com/photo/2019/09/19/02/23/palace-4488042_1280.jpg"
                                    class="d-block w-100" style="height: 100%; object-fit: cover;" alt="Zocalo">
                            </div>
                            <div class="carousel-item" style="height: 600px;">
                                <img src="https://cdn.pixabay.com/photo/2017/06/26/03/05/mexico-2442582_1280.jpg"
                                    class="d-block w-100" style="object-fit: cover;" alt="Bellas artes">
                            </div>
                            <div class="carousel-item" style="height: 600px;">
                                <img src="https://cdn.pixabay.com/photo/2016/04/26/12/42/mexico-1354388_1280.jpg"
                                    class="d-block w-100" style="height: 100%; object-fit: cover;" alt="Xochimilco">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMexico"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselMexico"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
