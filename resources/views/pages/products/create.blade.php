@extends('layouts.default')
@section('title', 'Tambah Produk')

@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Tambah Produk</strong>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('products.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="name" class="form-control-label">Nama Produk</label>
            <input  type="text"
                    name="name" 
                    value="{{ old('name') }}" 
                    class="form-control @error('name') is-invalid @enderror"/>
            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="type" class="form-control-label">Tipe Produk</label>
            <input  type="text"
                    name="type" 
                    value="{{ old('type') }}" 
                    class="form-control @error('type') is-invalid @enderror"/>
            @error('type') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="description" class="form-control-label">Deskripsi Produk</label>
            <textarea name="description" 
                      class="ckeditor form-control @error('description') is-invalid @enderror">{{ old('description')}}</textarea>
            @error('description') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="price" class="form-control-label">Harga Produk</label>
            <input  type="number"
                    min="1"
                    name="price" 
                    value="{{ old('price') }}" 
                    class="form-control @error('price') is-invalid @enderror"/>
            @error('price') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="quantity" class="form-control-label">Kuantitas Produk</label>
            <input  type="number"
                    min="1"
                    name="quantity" 
                    value="{{ old('quantity') }}" 
                    class="form-control @error('quantity') is-invalid @enderror"/>
            @error('quantity') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Tambah Produk
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection

@push('addon-script')
<script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
      .create( document.querySelector( '.ckeditor' ) )
      .then( editor => {
              console.log( editor );
      } )
      .catch( error => {
              console.error( error );
      } );
</script>
@endpush