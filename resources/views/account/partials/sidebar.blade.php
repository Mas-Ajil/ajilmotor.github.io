 <div class="sidebar">
        <div class="logo-content">
            <div class="logo">
                <i class="bx bx-code-alt"></i>
                <div class="logo-name">Account</div>
            </div>
            <i class="bx bx-menu" id="toggleMenu"></i>
        </div>
        <ul class="nav-list">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link" >
                    <i class="bx bx-grid-alt"></i> <span class="nav-name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            
            {{-- Admin --}}
            @if (auth()->user()->level=="admin")
            <li class="nav-item">
                <a href="/admin" class="nav-link">
                    <i class="bx bx-data"></i> <span class="nav-name">Data user</span>
                </a>
                <span class="tooltip">Data user</span>
            </li>  
            <li class="nav-item">
                <a href="/adminProducts" class="nav-link">
                    <i class="bx bx-book"></i> <span class="nav-name">Product</span>
                </a>
                <span class="tooltip">product</span>
            </li>
            <li class="nav-item">
                <a href="/createProducts" class="nav-link">
                    <i class="bx bx-book-content"></i> <span class="nav-name">Add product</span>
                </a>
                <span class="tooltip">Add Product</span>
            </li>
            <li class="nav-item">
                <a href="/adminPenjualan" class="nav-link">
                    <i class="bx bx-cart"></i> <span class="nav-name">Penjualan</span>
                </a>
                <span class="tooltip">Penjualan</span>
            </li>


            {{-- User --}}
            @else
            <li class="nav-item">
                <a href="/user" class="nav-link">
                    <i class="bx bx-user"></i> <span class="nav-name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li class="nav-item">
                <a href="/order" class="nav-link">
                    <i class="bx bx-cart"></i> <span class="nav-name">Order</span>
                </a>
                <span class="tooltip">Order</span>
            </li>
            <li class="nav-item">
                <a href="/help" class="nav-link">
                    <i class="bx bx-info-circle"></i> <span class="nav-name">Help</span>
                </a>
                <span class="tooltip">Help</span>
            </li>
            @endif
        </ul>
        <div class="profile-content">
            <div class="profile">
                <div class="profile-details">
                    <img src="assets/images/profile.png" alt="Profile" class="profile-image">
                    <div class="name-job">
                        <div class="job">HELLO!</div>
                        <div class="name">  {{ auth()->user()->name }}</div>
                    </div>
                </div>
                <form action="/home" method="get">
                    @csrf
                    <button type="submit" class="nav-link"><i class="bx bx-log-out" id="logout" style="color: white;"></i></button>
                </form>
                
            </div>
        </div>
    </div>

    