@include('chart.header')
<div class="container mt-5">
    <h2 class="text-center">Keranjang Belanja</h2>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Produk</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('assets/blogAssets/assets/sepatu1.jpg')}}" class="img-fluid" alt="Product Image">
                        </div>
                        <div class="col-md-6">
                            <h5>Nama Produk</h5>
                            <p>Alamat.</p>
                        </div>
                        <div class="col-md-3">
                            <input type="number" class="form-control" value="1">
                            <p class="mt-2"><strong>Rp 100.000</strong></p>
                            <p class="mt-2"><strong>41</strong></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('assets/blogAssets/assets/sepatu2.jpg')}}" class="img-fluid" alt="Product Image">
                        </div>
                        <div class="col-md-6">
                            <h5>Nama Produk</h5>
                            <p>Alamat.</p>
                        </div>
                        <div class="col-md-3">
                            <input type="number" class="form-control" value="1">
                            <p class="mt-2"><strong>Rp 200.000</strong></p>
                            <p class="mt-2"><strong>40</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Ringkasan Pesanan</h4>
                </div>
                <div class="card-body">
                    <p>Subtotal: Rp 300.000</p>
                    <p>Pengiriman: Rp 20.000</p>
                    <hr>
                    <h5>Total: Rp 320.000</h5>
                    <button class="btn btn-outline-dark mt-3">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>


@include('chart.footer')

</html>
