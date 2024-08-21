@include('blog.header')
<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $sepatu->foto }}" class="img-fluid" alt="{{ $sepatu->nama }}">
        </div>
        <div class="col-md-6">
            <h2>{{ $sepatu->nama }}</h2>
            <h4>Rp {{ $sepatu->harga }}</h4>
            <p><strong>Tanggal:</strong> {{ $sepatu->tanggal }}</p>
            <p><strong>Keterangan:</strong> {{ $sepatu->keterangan }}</p>
            <button class="btn btn-outline-dark mt-3">Tambahkan ke Keranjang</button>
        </div>
    </div>
</div>
@include('blog.footer')
