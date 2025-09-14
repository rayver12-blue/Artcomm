
<x-layout title="Ashen Biography">
<nav class="navbar navbar-expand-sm bg-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <button class="btn btn-circle"><a href="{{ url()->previous() }}" class="nav-link"><=</a></button>
      </li>
    </ul>
  </div>
</nav>
    <body>
  <div class="profpage" style="background-image: url('{{ asset('images/ashen.png') }}');">
    <div class="container text-center">
      <p class="mb-2">DIGITAL ART</p>
      <h1 class="fw-bold">LEARN TO COLOR YOUR ART</h1>
      <h2 class="mb-3"></h2>
      <p>ILLUSTRATOR, Ashen</p>
      
      <div class="d-flex justify-content-center gap-3 mt-4">
        <button class="btn btn-circle">⟳</button>
        <button class="btn btn-circle">▶</button>
        <button class="btn btn-circle">🏷</button>
      </div>
    </div>
  </div>
    <div class="container text-center">
      <h3>About this artist</h3>
      <p>Artist with ?? years of experience in drawing</p>
    </div>
    <div class="card">

    </div>
</body>
</x-layout>
