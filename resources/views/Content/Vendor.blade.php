@extends('Layout.default')

@section('content')
    <div class="pagetitle">
      <h1>Vendor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Vendor</h5>
                <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
                    <div class="d-flex justify-content-end" style="width: 100%">
                        <div class="d-flex justify-content-end" style="width: 100%">
                            <a href="/vendor/create" class="btn btn-success d-flex align-items-center justify-content-center">
                                Tambah Barang
                            </a>
                            <a href="/vendor/restore" class="btn btn-warning d-flex align-items-center justify-content-center">
                                Restore
                            </a>
                        </div>
                </div>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ( $data_vendor as $item )
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama_vendor }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                        <a href="{{ '/vendor/'.$item->id.'/edit' }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form class="d-inline" action="{{ '/vendor/'.$item->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
