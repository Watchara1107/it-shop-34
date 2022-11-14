<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>it-shop</title>
  <!-- import CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/src/css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <!-- เมนู -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#AF7AC5">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('frontend/image/logoicon.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
        <b>IT-Shop</b>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="btn btn-success" href="{{ route('login') }}"><b>Login</b></a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" href="{{ route('register') }}"><b>Register</b></a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- จบเมนู -->

  <!-- ใช้งาน VantaJS -->
  <header id="page-header" class="header">
    <div class="title text-light">
      <h1><b>IT-Shop</b></h1>
      <p>เว็บไซต์ขายสินค้าออนไลน์ราคาถูก มีคุณภาพ</p>
    </div>
  </header>
  <!-- จบการใช้งาน VantaJS -->

  <!-- เนื้อหาของเว็บไซต์ -->
  <div class="container-fluid">
    <br><br>
    <p>
    <h3><b>
        <center>สินค้า</center>
      </b></h3>
    </p> <br><br>
    <!-- แถวที่ 1 -->

   <div class="row mt-4">
    @foreach ($product as $pro)
    <div class="col-4">
      <div class="card" style="width: 29rem;">
        <img src="{{ asset('admin/upload/product/'.$pro->image) }}" class="card-img-top" alt="..." width="200" height="300">
        <div class="card-body">
          <h5 class="card-title">{{ $pro->name }}</h5>
          <p class="card-text">{{ $pro->description }}</p>
          <div class="alert alert-primary">{{ $pro->price }}</div>
        </div>
      </div>
    </div>
   @endforeach

     
    </div>
  </div>
  <!-- จบเนื้อหาของเว็บไซต์ -->

  <!-- ส่วนท้ายเว็บไซต์ -->
  <br>
  <footer>
    <div class="text-center p-4" style="background-color:#AF7AC5">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="https://web.facebook.com/ITSERVICES1972/">Information Technology @ PSC</a>
    </div>
  </footer>
  <!-- จบส่วนท้ายเว็บไซต์ -->


  <script src="{{ asset('frontend/src/js/three.r119.min.js')}}"></script>
  <script src="{{ asset('frontend/src/js/vanta.net.min.js')}}"></script>
  <script src="{{ asset('frontend/src/js/index.js')}}"></script>
  <script src="{{ asset('frontend/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontend/node_modules/@popperjs/core/dist/umd/popper.min.js')}}"></script>
  <script src="{{ asset('frontend/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>