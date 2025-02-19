@extends('master')
@section('title', 'Master project')
@section('content title')
@section('content')
<div class="g-0 ps-4 col-md-10">
    <h1>Master Court_type</h1>
    <a class="btn btn-success" href="">Add Data</a>
    <table class="table table-striped">
      <th>
          <td>No</td>
          <td>Court Name</td>
          <td>Action</td>
      </th>
      
      @forelse ($court_type as $court)
      <tr>
          <td></td>
          <td>{{$loop->iteration}}</td>
          <td>{{$court->name}}</td>
          <td>
              <a class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
              <a class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
          </td>
      </tr>
      @empty
      <div class="alert alert-danger">
          Belum ada Data
      </div>
      @endforelse
    </table>
  </div>
  <div class="col-md-4">
  
  </div>
@endsection