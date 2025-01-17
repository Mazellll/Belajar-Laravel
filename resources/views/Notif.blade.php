@extends('master')
@section('title', 'Master project')
@section('content title', 'Master project')
@section('content')
<div class="row g-0 mt-3 ps-5">
    <div class="col-md-10">
      <div class="card shadow">
        <div class="card-header text-center"><h1>Notification</h1></div>
        <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">From</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1.</th>
                <td>@keballSerangan</td>
                <td>Liked your video 👍</td>
              </tr>

              <tr>
                <th scope="row">2.</th>
                <td>@Pizz</td>
                <td>Liked your post 👍</td>
              </tr>
              
              <tr>
                <th scope="row">3.</th>
                <td>@Xymal</td>
                <td>Liked your post 👍</td>
              </tr>

              <tr>
                <th scope="row">4.</th>
                <td>@Rive</td>
                <td>Just Followed You </td>
              </tr>
              
              <tr>
                <th scope="row">5.</th>
                <td>@Shofian</td>
                <td>Liked your post 👍</td>
              </tr>

              <tr>
                <th scope="row">6.</th>
                <td>@Kakap</td>
                <td>Liked your post 👍</td>
              </tr>

              <tr>
                <th scope="row">7.</th>
                <td>@Chizmoon</td>
                <td>Just Followed You </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection