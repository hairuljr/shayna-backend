@extends('layouts.default')
@section('title', 'Edit Partner')

@section('content')
    <div class="card">
      <div class="card-header">
        <strong>Ubah Partner</strong>
        <small>{{ $partners->name }}</small>
      </div>
      <div class="card-body card-block">
        <form action="{{ route('partners.update', $partners->id) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="form-group">
            <label for="name" class="form-control-label">Nama Partner</label>
            <input  type="text"
                    name="name" 
                    value="{{ old('name') ? old('name') : $partners->name }}" 
                    class="form-control @error('name') is-invalid @enderror"/>
            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="photo" class="form-control-label">Logo Partner</label>
            <input  type="file"
                    name="photo" 
                    value="{{ old('photo') ? old('photo') : $partners->photo }}" 
                    accept="image/*"
                    class="form-control @error('photo') is-invalid @enderror"/>
            @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
              Ubah Partner
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection