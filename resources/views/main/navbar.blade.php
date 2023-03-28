<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css') }}">
</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <i class="bi bi-person-circle"></i>
      <span class="logo_name"><h4>{{ auth()->user()->name}}</h4></span>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
      </div>
    </div>
      <ul class="nav-links">
        <li>
          <a href="{{ url('/dashboard') }}" class="active">
            <i class="bi bi-house"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/user') }}">
            <i class="bi bi-people-fill"></i>
            <span class="links_name">User</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/spp') }}">
            <i class="bi bi-piggy-bank"></i>
            <span class="links_name">SPP</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/kelas') }}">
            <i class="bi bi-list-ul"></i>
            <span class="links_name">Kelas</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/siswa') }}">
            <i class="bi bi-person-vcard"></i>
            <span class="links_name">Siswa</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/pembayaran') }}">
            <i class="bi bi-cart2"></i>
            <span class="links_name">Pembayaran</span>
          </a>
        </li>
        <li class="log_out">
      <form action="/logout" method="post">
          @csrf
          <a href="{{ url('login') }}">
        <i class="bi bi-box-arrow-left"></i>
        <span class="links_name">Log out</span>
      </a>
{{--     <button type="submit">logout</button> --}}
      </form>
      
        </li>
      </ul>
  </div>

  @yield('content')


  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}

 </script>



    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>


</html>
