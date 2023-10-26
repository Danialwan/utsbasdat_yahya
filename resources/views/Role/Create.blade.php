@extends('Layout.default')

@section('content')
<div class="pagetitle">
    <h1>Tambah Jabatan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

    <!-- Floating Labels Form -->
    <section class="section">
    <form class="row g-3" method="POST" action="/Role" >
        @csrf
        <div class="col-md-12">
          <div class="form-floating">
            <input type="text" class="form-control" id="nama_role" placeholder="Nama Role" name="nama_role" value="{{ Session::get('nama_role') }}">
            <label for="floatingName">Nama Role</label>
          </div>
        </div>
        <div class="text-start">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End floating Labels Form -->
    </section>

@endsection
