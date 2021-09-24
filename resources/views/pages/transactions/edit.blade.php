@extends('layouts.default')
@section('title', 'Edit Detail Pembeli')

@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Ubah Detail Pembeli</strong>
        <small>{{ $transactions->uuid }}</small>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('transactions.update', $transactions->id) }}" method="POST">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="name" class="form-control-label">Nama Pemesan</label>
            <input  type="text"
                    name="name" 
                    value="{{ old('name') ? old('name') : $transactions->name }}" 
                    class="form-control @error('name') is-invalid @enderror"/>
            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="email" class="form-control-label">Email</label>
            <input  type="email"
                    name="email" 
                    value="{{ old('email') ? old('email') : $transactions->email }}" 
                    class="form-control @error('email') is-invalid @enderror"/>
            @error('email') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="phone_number" class="form-control-label">Nomor HP</label>
            <input  type="text"
                    name="phone_number" 
                    value="{{ old('phone_number') ? old('phone_number') : $transactions->phone_number }}" 
                    class="form-control @error('phone_number') is-invalid @enderror"/>
            @error('phone_number') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="address" class="form-control-label">Alamat Pemesan</label>
            <input  type="text"
                    name="address" 
                    value="{{ old('address') ? old('address') : $transactions->address }}" 
                    class="form-control @error('address') is-invalid @enderror"/>
            @error('address') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Ubah Transaksi
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection