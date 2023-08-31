{{-- 
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="foto/oy.jpg" alt="">
          <span class="nav-item">DashBoard</span>
        </a></li>
        <li><a href="{{ route('home') }}">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="{{ route('data_pembeli.index') }}">
          <i class="fas fa-user"></i>
          <span class="nav-item">Data Pembeli</span>
        </a></li>
        <li><a href="{{ route('transaksi.index') }}">
          <i class="fas fa-wallet"></i>
          <span class="nav-item">Pembayaran</span>
        </a></li>
        <li><a href="{{ route('riwayat.index') }}">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Analytics</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">Tasks</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Help</span>
        </a></li>
        

        <li><a class="logout" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
       </a>
       <form class="nav-item" id="logout-form" action="{{ route('logout') }}" method="POST">
           @csrf
       </form>
      </ul>
    </li>
    </nav> --}}


    <!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Karyawan</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="{{ route('admin') }}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{ route('transaksi.index') }}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Transaksi</span>
				</a>
			</li>
			<li>
				<a href="{{ route('riwayat.index') }}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Riwayat</span>
				</a>
			</li>
			<li>
				<a href="{{ route('data_pembeli.index') }}">
					<i class='bx bxs-group' ></i>
					<span class="text">Data Pembeli</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li><a  href="{{ route('logout') }}" class="logout"onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
         <form  class='bx bxs-log-out-circle' id="logout-form" action="{{ route('logout') }}" method="POST">
          @csrf
      </form>
        {{ __('Logout') }}
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->
  
	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="foto/oy.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->
