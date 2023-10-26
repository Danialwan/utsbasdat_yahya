@extends('Layout.default')

@section('content')
<div class="pagetitle">
    <h1>Tambah Barang</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

    <!-- Floating Labels Form -->
    <section class="section">
    <!-- Floating Labels Form -->
    <form class="row g-3" method="POST" action="{{ '/Barang/'.$data_barang->id }}">
        @csrf
        @method('PUT')
        <div class="col-md-12">
          <div class="form-floating">
            <input type="text" class="form-control" id="nama_barang" placeholder="nama_barang" name="nama_barang" value="{{ $data_barang->nama }}">
            <label for="nama_barang">Nama Barang</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="col-md-12">
            <div class="form-floating">
              <input type="text" class="form-control" id="jenis_barang" placeholder="jenis_barang" name="jenis_barang" value="{{ $data_barang->jenis }}">
              <label for="jenis_barang">Jenis Barang</label>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <select class="form-select" id="idsatuan" aria-label="idsatuan" name="idsatuan">
                {{-- <option selected>{{ $data_barang->nama_satuan }}</option> --}}
                 @foreach ( $data_satuan as $item )
                <option value="{{ $item->id }}"> {{ $item->nama_satuan }} </option>
                @endforeach
            </select>
            <label for="idsatuan">Satuan</label>
          </div>
        </div>
        <div class="col-md-6 m-0">
            <div class="form-floating">
              <input type="number" class="form-control" id="harga" placeholder="harga" name="harga" value="{{ $data_barang->harga }}">
              <label for="harga">Harga</label>
            </div>
        </div>
        <div class="col-md-6 m-0">
            <div class="form-floating">
              <input type="number" class="form-control" id="status" placeholder="Status" name="status" value="{{ $data_barang->status }}">
              <label for="harga">Status</label>
            </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End floating Labels Form -->

    </section>

@endsection
