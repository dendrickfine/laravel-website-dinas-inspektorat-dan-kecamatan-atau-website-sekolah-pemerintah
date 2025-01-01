<div data-aos="zoom-in-down">
  <div id="carouselExampleCaptions" class="carousel slide mt-3" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach ($slide as $key => $row)
        <li data-target="#carouselExampleCaptions" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : ''}}"></li>
      @endforeach
    </ol>
    <div class="carousel-inner">
      @foreach ($slide as $key => $row)
      <div class="carousel-item {{ $key == 0 ? 'active' : ''}}">
        <a href="{{ $row->link }}" target="_blank"> <!-- Tambahkan anchor tag di sini -->
          <img src="{{ asset('uploads/' . $row->gambar_slide ) }}" class="d-block w-100" alt="{{ $row->judul_slide }}">
        </a> <!-- Tutup anchor tag di sini -->
        <div class="carousel-caption d-none d-md-block">
          <p>{{ $row->created_at->format('d F Y') }}</p>
        </div>
      </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
