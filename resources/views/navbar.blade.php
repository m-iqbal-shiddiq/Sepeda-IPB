<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0099FF" width:"100%">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{url('/')}}"><img src="http://pluspng.com/img-png/home-house-silhouette-icon-building-public-domain-pictures-image-193-800.png" width="40" height="40"></a>
  <div class="collapse navbar-collapse"  id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      @if (!empty($halaman) && $halaman =='Peminjaman')
          <li class='nav-item active'><a class="nav-link" href="{{ url('peminjaman') }}"><b>Peminjaman
          </b><span class="sr-only">(current)</span></a></li>
      @else
        <li>
          <a class="nav-link" href="peminjaman"><b>Peminjaman</b></a>
        </li>
      @endif

      @if (!empty($halaman) && $halaman =='Data Peminjam')
          <li class='nav-item active'><a class="nav-link" href="{{ url('datapeminjam') }}"><b>Data Peminjam
          </b><span class="sr-only">(current)</span></a></li>
      @else
        <li>
          <a class="nav-link" href="datapeminjam"><b>Data Peminjam</b></a>
        </li>
      @endif
    </ul>
  </div>
  <div class="navbar-header">
    <b>INSTITUT PERTANIAN BOGOR</b>
    <br>
    <b>Searching and Serving The Best</b>
  </div>
  <div class="navbar-logo">
    <img src="https://upload.wikimedia.org/wikipedia/id/thumb/c/cb/Logo_IPB.svg/1024px-Logo_IPB.svg.png" height="80" width="80" position=left>
  </div>
</nav>
