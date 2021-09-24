@extends('layouts.default')
@section('title', 'Galeri Produk')

@section('content')
    <div class="orders">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="box-title">Daftar Foto Produk</h4>
            </div>
            <div class="card-body--">
              <div class="table-stats order-table ov-h">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Produk</th>
                      <th>Foto</th>
                      <th>Default</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($gallery as $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->product->name }}</td>
                        <td>
                          <img src="{{ url($item->photo) }}" alt="" />
                        </td>
                        <td>{{ $item->is_default ? 'Ya' : 'Tidak' }}</td>
                        <td>
                          <a href="{{ route('product-galleries.destroy', $item->id) }}" class="btn btn-danger btn-sm deleteAjax" data-id="{{ $item->id }}" data-routeName="Foto Produk">
                            <i class="fa fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    @empty
                        <tr>
                          <td colspan="5" class="text-center p-5">
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