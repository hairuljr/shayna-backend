@extends('layouts.default')
@section('title', 'List Partner')

@section('content')
    <div class="orders">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="box-title">Daftar Logo Partner</h4>
            </div>
            <div class="card-body--">
              <div class="table-stats order-table ov-h">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Partner</th>
                      <th>Logo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($logo as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                          <img src="{{ url($item->photo) }}" alt="" />
                        </td>
                        <td>
                          <a href="{{ route('partners.edit', $item->id) }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i>
                          </a>
                          <a href="{{ route('partners.destroy', $item->id) }}" class="btn btn-danger btn-sm deleteAjax" data-id="{{ $item->id }}" data-routeName="Partner">
                            <i class="fa fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    @empty
                        <tr>
                          <td colspan="4" class="text-center p-5">
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