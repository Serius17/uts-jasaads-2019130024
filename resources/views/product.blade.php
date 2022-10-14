@extends('layout.master')
@section('title', 'Products')
@section('content')
    <h1>Jasa Yang Kami Tawarkan</h1>
    <div class="container">
        <div class="card">
            <div class="imgBx">
                <a href="#">
                    <img src="./img/digmar.png">
                </a>

                <h2>Digital Marketing</h2>
                <p><br>Pemasaran digital adalah suatu kegiatan pemasaran atau promosi sebuah merek atau produk menggunakan
                    media digital atau internet.
                </p>

            </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <a href="#">
                    <img src="./img/market.png">
                </a>
                <h2>Specialist Marketplace</h2>
                <p><br>Platform atau website yang digunakan untuk menjual produk dari pemilik website itu sendiri.
                </p>

            </div>
        </div>

        <div class="card">
            <div class="imgBx">
                <a href="#">
                    <img src="./img/ar.png">
                </a>
                <h2>Augmented Reality</h2>
                <p><br>Augmented Reality atau AR adalah teknologi yang memperoleh penggabungan secara real-time terhadap
                    digital konten yang dibuat oleh komputer dengan dunia nyata.
                </p>
            </div>
        </div>



    @endsection
