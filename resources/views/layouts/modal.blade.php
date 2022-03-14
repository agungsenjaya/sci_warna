<!-- Modal Logout -->
<div class="modal fade" id="modalOut" tabindex="-1" aria-labelledby="modalOutLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalOutLabel">Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <p class="mb-0">Apakah anda yakin akan keluar?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Loading -->
<div class="modal" id="modalLoading" tabindex="-1" aria-labelledby="modalLoadingLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-transparent">
      <div class="modal-body text-center">
        <img src="{{ asset('img/Spinner.gif') }}" alt="" width="15%">
      </div>
    </div>
  </div>
</div>
<!-- Modal Menu -->
<div class="modal" id="modalMenu" tabindex="-1" aria-labelledby="modalMenuLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalMenuLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="">
      <div class="">
        <div class="menu">
            <div class="list-group list-group-flush nav-mobile"> 
              <a href="/" class="list-group-item ">Home</a>  
              <a href="javascript:void(0)" class="list-group-item justify-content-between d-flex produk">Produk <i class="ms-auto bi bi-chevron-right"></i> </a>  
              <a href="http://warna.sci-paint.com/" class="list-group-item ">Warna</a>
              <a href="https://www.sci-paint.com/brosur" class="list-group-item ">Brosur</a>
              <a href="http://warna.sci-paint.com/" class="list-group-item ">Kartu Warna</a>
              <a href="https://www.sci-paint.com/data-teknis" class="list-group-item ">Data Teknis</a>
              <a href="https://cbm.co.id/" target="_blank" class="list-group-item ">Proyek</a>
              <a href="https://www.sci-paint.com/service" class="list-group-item ">Service</a>
              <a href="https://www.sci-paint.com/about" class="list-group-item ">Tentang Kami</a>
              <a href="https://www.sci-paint.com/blog" class="list-group-item ">Berita</a>
              <a href="http://karir.sci-paint.com/" target="_blank" class="list-group-item ">Karir</a>
              <a href="https://www.sci-paint.com/paint-calculator" class="list-group-item ">Kalkulator Cat</a>
              <a href="https://www.sci-paint.com/market" class="list-group-item ">Lokasi Toko</a>
              <a href="https://www.sci-paint.com/contact" class="list-group-item ">Hubungi Kami</a>
          </div>
        </div>
        <div class="sub-menu d-none">
        <div class="list-group list-group-flush nav-mobile"> 
          <a href="javascript:void(0)" class="list-group-item justify-content-between d-flex produk-back">Kembali <i class="ms-auto bi bi-chevron-right"></i> </a>  
          <a class="list-group-item"><span class="title-6"> Kategori Merek</span></a>
                    <a class="list-group-item" href="https://www.sci-paint.com/brands/kem-tone"><i class="bi bi-dash me-2"></i>Kem-Tone</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/brands/spectrum"><i class="bi bi-dash me-2"></i>Spectrum</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/brands/colortone"><i class="bi bi-dash me-2"></i>ColorTone</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/brands/vinotex"><i class="bi bi-dash me-2"></i>Vinotex</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/brands/panatex"><i class="bi bi-dash me-2"></i>Panatex</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/brands/tamitex"><i class="bi bi-dash me-2"></i>Tamitex</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/brands/sterling"><i class="bi bi-dash me-2"></i>Sterling</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/brands/abc"><i class="bi bi-dash me-2"></i>ABC</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/brands/apollo"><i class="bi bi-dash me-2"></i>Apollo</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/brands/sci-gard"><i class="bi bi-dash me-2"></i>SCI Gard</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/brands/epo-tone"><i class="bi bi-dash me-2"></i>Epo-Tone</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/brands/sanlux"><i class="bi bi-dash me-2"></i>Sanlux</a>
                    <a class="list-group-item"><span class="title-6">Kategori Cat</span></a>
                    <a class="list-group-item" href="https://www.sci-paint.com/category/cat-tembok-tinting"><i class="bi bi-dash me-2"></i>cat tembok tinting</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/category/cat-tembok"><i class="bi bi-dash me-2"></i>cat tembok</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/category/cat-kayu-dan-besi"><i class="bi bi-dash me-2"></i>cat kayu dan besi</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/category/cat-pelapis-anti-bocor"><i class="bi bi-dash me-2"></i>cat pelapis anti bocor</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/category/cat-dasardempul"><i class="bi bi-dash me-2"></i>cat dasar/dempul</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/category/cat-genteng"><i class="bi bi-dash me-2"></i>cat genteng</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/category/cat-mobil"><i class="bi bi-dash me-2"></i>cat mobil</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/category/cat-spesial"><i class="bi bi-dash me-2"></i>cat spesial</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/category/cat-industri"><i class="bi bi-dash me-2"></i>cat industri</a>
                    <a class="list-group-item" href="https://www.sci-paint.com/category/cat-gypsum"><i class="bi bi-dash me-2"></i>cat gypsum</a>
                      
        </div>
        </div>
      </div>
    </div>

    </div>
        
      </div>
    </div>
  </div>