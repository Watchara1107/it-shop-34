@extends('layouts.back-end.master')
@section('content')
<div class="card">
    <h5 class="card-header">Products</h5>
    <div class="table-responsive text-nowrap">
        <a href="{{ route('product.create') }}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
      <table class="table mt-4">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>images</th>
            <th>Price</th>
            <th>Description</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($product as $pro)
          <tr>
            <td>{{ $pro->product_id }}</td>
            <td>{{ $pro->name }}</td>
            <td>
              <img src="{{ asset('/admin/upload/product/'.$pro->image) }}" width="150px" height="150px" alt="">
            </td>
            <td>{{ $pro->price }}</td>
            <td>{{ $pro->description }}</td>
            <td>{{ $pro->created_at }}</td>
            <td>{{ $pro->updated_at }}</td>
            <td>
              <a href="{{ url('/admin/product/edit/'.$pro->product_id) }}"><i class='bx bxs-edit'></i></a>
              <a href="{{ url('/admin/product/delete/'.$pro->product_id) }}"><i class='bx bx-trash'></i></a>
            </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection
