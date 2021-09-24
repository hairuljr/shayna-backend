@php
  use \App\Constants\TransactionStatus;
@endphp

<table class="table table-bordered">
  <tr>
    <th>Nama</th>
    <td>{{ $transaction->name }}</td>
  </tr>
  <tr>
    <th>Email</th>
    <td>{{ $transaction->email }}</td>
  </tr>
  <tr>
    <th>Nomor HP</th>
    <td>{{ $transaction->phone_number }}</td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>{{ $transaction->address }}</td>
  </tr>
  <tr>
    <th>Total Transaksi</th>
    <td>{{ rupiah($transaction->transaction_total) }}</td>
  </tr>
  <tr>
    <th>Status Transaksi</th>
    <td>{!! TransactionStatus::html($transaction->transaction_status) !!}</td>
  </tr>
  <tr>
    <th>Pembelian Produk</th>
    <td>
      <table class="tabble table-bordered w-100">
        <tr>
          <th>Nama</th>
          <th>Tipe</th>
          <th>Harga</th>
        </tr>
        @foreach ($transaction->details as $detail)
            <tr>
              <td>{{ $detail->product->name }}</td>
              <td>{{ $detail->product->type }}</td>
              <td>{{ rupiah($detail->product->price) }}</td>
            </tr>
        @endforeach
      </table>
    </td>
  </tr>
</table>
<div class="row">
  <div class="col-4">
    <a href="{{ route('transactions.status', $transaction->id) }}?status=SUCCESS" class="btn btn-success btn-block">
      <i class="fa fa-check"></i> Set Sukses
    </a>
  </div>
  <div class="col-4">
    <a href="{{ route('transactions.status', $transaction->id) }}?status=FAILED" class="btn btn-warning btn-block">
      <i class="fa fa-times"></i> Set Gagal
    </a>
  </div>
  <div class="col-4">
    <a href="{{ route('transactions.status', $transaction->id) }}?status=PENDING" class="btn btn-info btn-block">
      <i class="fa fa-spinner"></i> Set Pending
    </a>
  </div>
</div>