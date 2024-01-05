<!-- Navbar -->
<div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">
        <img src="/asset/logo.png" alt="Logo" height="30" style="margin-left: 10px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/home" id="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Product") ? 'active' : '' }}" href="/products" id="product">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "History") ? 'active' : '' }}" href="/purchased-products" id="history">History</a>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav ms-auto">
        {{-- auth pada user login jika user login maka dropdown di tampilan dan jika tidak login maka tidak bisa --}}
        @auth
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-person-vcard"></i> Account</a></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
              </form>
            </li>
          </ul>
        </div>
        @else
        <li class="nav-item">
          <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
        </ul>
        @endauth
      </div>
    </div>
  </nav>
</div>
