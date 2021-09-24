@extends('layouts.default')
@section('title', 'Tambah Foto Produk')

@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Tambah Foto Produk</strong>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('product-galleries.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name" class="form-control-label">Nama Produk</label>
            <select name="product_id"
                    class="select2 form-control @error('product_id') is-invalid @enderror" data-placeholder="Pilih Produk">
                    <option value=""></option>
                @foreach ($products as $product)
                  <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
            @error('product_id') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="photo" class="form-control-label">Foto Produk</label>
            <input  type="file"
                    name="photo" 
                    value="{{ old('photo') }}" 
                    accept="image/*"
                    required
                    class="form-control @error('photo') is-invalid @enderror"/>
            @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <div class="form-check-inline form-check">
              <label for="inline-radio1" class="form-check-label mr-3">
              <input type="radio" id="inline-radio1" name="is_default" value="1" class="form-check-input @error('is_default') is-invalid @enderror">Ya
              </label>
              <label for="inline-radio2" class="form-check-label">
              <input type="radio" id="inline-radio2" name="is_default" value="0" class="form-check-input @error('is_default') is-invalid @enderror">Tidak
              </label>
            </div>
            @error('is_default') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Tambah Foto Produk
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection