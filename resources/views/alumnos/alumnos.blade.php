@extends('master.master')
@section('content')

<style>
    .image-container {
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        overflow: hidden;
        text-align: center;
    }

    .hero-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .page-title {
        color: white;
        font-size: 3.5rem;
        font-weight: bold;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        margin-bottom: 40px;
    }

    .btn-custom {
        background-color: #6C9FED;
        color: white;
        padding: 12px 24px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        font-size: 18px;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #0c678d;
    }
</style>

<div class="image-container">
    <h1 class="page-title">Página Alumnos</h1>
    <img src="https://itsta.edu.mx/wp-content/uploads/2021/03/WhatsApp-Image-2021-03-04-at-7.49.28-PM.jpeg" 
         class="hero-image" alt="Imagen de fondo">
    <a href="Gustavo" class="btn-custom">Ir a la Página</a>
</div>

@endsection
