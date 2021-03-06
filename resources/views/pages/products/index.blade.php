@extends('layouts.default')
@section('title', 'List Produk')

@section('content')
    <div class="orders">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="box-title">Daftar Produk</h4>
            </div>
            <div class="card-body--">
              <div class="table-stats order-table ov-h">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($products as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ rupiah($item->price) }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>
                          <a href="{{ route('products.gallery', $item->id) }}" class="btn btn-info btn-sm">
                          {{-- <a href="#" class="btn btn-info btn-sm"> --}}
                            <i class="fa fa-picture-o"></i>
                          </a>
                          <a href="{{ route('products.edit', $item->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i>
                          </a>
                          <a href="{{ route('products.destroy', $item->id) }}" class="btn btn-danger btn-sm deleteAjax" data-id="{{ $item->id }}" data-routeName="Produk">
                            <i class="fa fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    @empty
                        <tr>
                          <td colspan="6" class="text-center p-5">
                            Data tidak tersedia
                          </td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection