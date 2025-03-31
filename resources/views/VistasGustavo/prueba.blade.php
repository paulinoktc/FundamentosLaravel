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
    <h1 class="page-title">Página Gustavo</h1>
    <img src="https://images.unsplash.com/photo-1504625709867-b4e45e3bb9dd?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGFycXVpdGVjdHVyYSUyMGJydXRhbGlzdGF8ZW58MHx8MHx8fDA%3D" 
         class="hero-image" alt="Imagen de fondo">
    <a href="alumnosx" class="btn-custom">Ir a la Página Alumnos</a>
</div>
@endsection