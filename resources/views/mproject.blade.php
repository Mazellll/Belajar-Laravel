@extends('master')
@section('title', 'Master project')
@section('content title', 'Master project')
@section('content')
<div class="row g-0 mt-3 ps-5">
  <div class="card" style="width: 38rem;">
    <img src="home1.png" class="card-img-top ms-1 mt-1" style="width: 700px;">
    <div class="card-body">
      <h4><i class="bi bi-heart-fill text-danger me-2"></i> <i class="bi bi-chat-right me-2"></i> <i class="bi bi-send"></i></h4>
      <h6 class="card-title">549 likes</h6>
      <p class="card-text"><strong>dblsub</strong>
        Dengan ini perjalanan SMEAS (SMKN 1 Surabaya) harus terhenti setelah belum berhasil mengalahkan SABRES (Singapore National Academy Sidoarjo) pada pertandingan terakhir hari ini.
        
        Terima kasih SMEAS sampai jumpa di musim selanjutnya 🥺🫶🏻</p>
    </div>
  </div>
<!-- END CARD -->
    <div class="col-md-4">
      <div class="forms"></div>
        <form class="col-md-11">
          <div class="mb-3 ms-3">
            <div class="card shadow">
              <div class="card-header"><h4>Login</h4></div>
              <div class="card-body">
                <label for="exampleInputEmail1" class="form-label fw-bold">Username</label>
                <input type="text" class="form-control bg-light" id="exampleInputText1" aria-describedby="textHelp">
                <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                <input type="email" class="form-control bg-light" id="exampleInputEmail1" aria-describedby="emailHelp">
                <label for="exampleInputEmail1" class="form-label fw-bold mt-1">Password</label>
                <input type="password" class="form-control bg-light" id="exampleInputPassword1" aria-describedby="PasswordHelp">
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-primary ms-3">Login</button>
              </div>
            </div>
        </form>
      </div>
  </div>
@endsection