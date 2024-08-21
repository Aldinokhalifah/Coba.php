<!-- show.blade.php -->

@include('header')

<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $shoe->foto }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
            <h2>{{ $shoe->nama }}</h2>
            <h4>Rp {{ number_format($shoe->harga, 0, ',', '.') }}</h4>
            <p><strong>Tanggal:</strong> {{ $shoe->tanggal }}</p>
            <p><strong>Keterangan:</strong> {{ $shoe->keterangan }}</p>
            <button class="btn btn-outline-dark mt-3">Tambahkan ke Keranjang</button>
        </div>
    </div>
</div>

@include('footer')
