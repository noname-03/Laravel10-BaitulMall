@extends('admin.layouts.app')
@section('title', 'Tambah Data Penyalur')
@section('data.baitul.mal', 'menu-open')
@section('distributor', 'active')
@section('content')
    <div class="content-wrapper" style="min-height: 1345.31px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Formulir Penyalur</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Penyalur</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('admin.distributor.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="rw">RW</label>
                                            <input type="number"
                                                class="form-control  @error('rw')
                                            is-invalid @enderror"
                                                id="rw" placeholder="Masukan RW" name="rw"
                                                value="{{ old('rw') }}">
                                            @error('rw')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="date">Priode</label>
                                            <input type="date"
                                                class="form-control  @error('date')
                                            is-invalid @enderror"
                                                id="date" placeholder="Masukan date" name="priode"
                                                value="{{ old('date') }}">
                                            @error('date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="amount">Jumlah</label>
                                            <input type="number"
                                                class="form-control  @error('amount')
                                            is-invalid @enderror"
                                                id="amount" placeholder="Masukan Jumlah" name="amount"
                                                value="{{ old('amount') }}">
                                            @error('amount')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </form>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
