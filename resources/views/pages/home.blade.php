@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat Datang di Vehiclick')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah daftar kendaraan yang tersedia</p>

    @include('components.card', [
        'imgsrc' => 'images/lamborghini.jpeg',
        'title' => 'Mobil Mewah!',
        'description' => 'Mobil Mewah yang siap untuk kamu pakai!'
    ])
@endsection
