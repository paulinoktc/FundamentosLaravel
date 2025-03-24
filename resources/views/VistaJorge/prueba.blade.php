@extends('VistaJorge.master.master')
@section('content')

    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="https://cdn.pixabay.com/photo/2024/03/08/16/06/building-8621170_1280.jpg" class="img-fluid w-100" style="max-height: 39rem" alt="">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://cdn.pixabay.com/photo/2017/06/06/23/46/building-2378893_1280.jpg" class="img-fluid w-100" style="max-height: 39rem" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://cdn.pixabay.com/photo/2024/11/08/09/45/facade-9182972_1280.jpg" class="img-fluid w-100" style="max-height: 39rem" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> 
    
@endsection