<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">TouristRent</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('treballadors') }}">Treballadors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('apartaments') }}">Apartaments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('lloguers') }}">Lloguers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('clients') }}">Clients</a>
      </li>
    </ul>
  </div>
</nav>