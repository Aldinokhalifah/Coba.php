@include('chart.header')
{{-- 
<div class="container mt-5 ">
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <img src="{{asset('assets/blogAssets/assets/sepatu1.jpg')}}" class="card-img-top" alt="Sepatu 1">
                <div class="card-body">
                    <h2 class="card-title">Sepatu 1</h2>
                    <p class="card-text">Ukuran: 40</p>
                    <h4>$40.00</h4>
                    <input type="text" class="form-control mb-3" placeholder="Jumlah pembelian">
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-dark">Beli</button>
                        <button class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm">
                <img src="{{asset('assets/blogAssets/assets/sepatu2.jpg')}}" class="card-img-top" alt="Sepatu 2">
                <div class="card-body">
                    <h2 class="card-title">Sepatu 2</h2>
                    <p class="card-text">Ukuran: 50</p>
                    <h4>$50.00</h4>
                    <input type="text" class="form-control mb-3" placeholder="Jumlah pembelian">
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-dark">Beli</button>
                        <button class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </div>
        </div> 
        <div class="col-md-6">
            <div class="card shadow-sm">
                <img src="{{asset('assets/blogAssets/assets/sepatu3.jpg')}}" class="card-img-top" alt="Sepatu 2">
                <div class="card-body">
                    <h2 class="card-title">Sepatu 2</h2>
                    <p class="card-text">Ukuran: 50</p>
                    <h4>$50.00</h4>
                    <input type="text" class="form-control mb-3" placeholder="Jumlah pembelian">
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-dark">Beli</button>
                        <button class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

<div class="row mb-4 mt-4 ">
    <div class="card" style="width: 18rem;">
        <img src="{{asset('assets/blogAssets/assets/sepatu1.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    <div class="card ms-2" style="width: 18rem;">
        <img src="{{asset('assets/blogAssets/assets/sepatu2.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card mb-0" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{asset('assets/blogAssets/assets/sepatu3.jpg')}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>

</div>


@include('chart.footer')

</html>
