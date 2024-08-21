@include('shoes.header')
<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $shoes-> foto }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
            <h2>{{ $shoes-> nama }}</h2>
            <h4>Rp {{$shoes-> harga }}</h4>
            <p><strong>Tanggal:</strong> {{ $shoes-> tanggal }}</p>
            <p><strong>Keterangan:</strong> {{ $shoes-> keterangan }}</p>
            <button class="btn btn-outline-dark mt-3">Tambahkan ke Keranjang</button>
        </div>
    </div>
</div>
@include('shoes.footer')
