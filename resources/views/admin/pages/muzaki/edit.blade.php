@extends('admin.layouts.app')
@section('title', 'Perbarui Data Muzaki')
@section('data.master', 'menu-open')
@section('muzaki', 'active')
@section('content')
    <div class="content-wrapper" style="min-height: 1345.31px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Formulir Muzaki</h1>
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
                        <h3 class="card-title">Perbarui Data Muzaki</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('admin.muzaki.update', $muzaki->id) }}" method="post">
                                    @csrf @method('put')
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="name">Nama</label>
                                            <input type="text"
                                                class="form-control  @error('name')
                                            is-invalid @enderror"
                                                id="name" placeholder="Masukan Nama" name="name"
                                                value="{{ old('name', $muzaki->name) }}">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="rt">RT</label>
                                            <input type="number"
                                                class="form-control  @error('rt')
                                            is-invalid @enderror"
                                                id="rt" placeholder="Masukan RT" name="rt"
                                                value="{{ old('rt', $muzaki->rt) }}">
                                            @error('rt')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="rw">RW</label>
                                            <input type="number"
                                                class="form-control  @error('rw')
                                            is-invalid @enderror"
                                                id="rw" placeholder="Masukan RW" name="rw"
                                                value="{{ old('rw', $muzaki->rw) }}">
                                            @error('rw')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Jenis</label>
                                            <select class="form-control" name="type">
                                                <option value="zakat" {{ $muzaki->type == 'zakat' ? 'selected' : '' }}>
                                                    Zakat</option>
                                                <option value="infaq" {{ $muzaki->type == 'infaq' ? 'selected' : '' }}>
                                                    Infaq</option>
                                                <option value="shodaqoh"
                                                    {{ $muzaki->type == 'shodaqoh' ? 'selected' : '' }}>Shodaqoh</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="amount">Jumlah</label>
                                            <input type="number"
                                                class="form-control  @error('amount')
                                            is-invalid @enderror"
                                                id="amount" placeholder="Masukan amount" name="amount"
                                                value="{{ old('amount', $muzaki->amount) }}">
                                            @error('amount')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="address">Alamat</label>
                                            <textarea class="form-control  @error('address') is-invalid @enderror" name="address" id="address" cols="20"
                                                rows="4" placeholder="Masukan Alamat">{{ old('address', $muzaki->address) }}</textarea>
                                            @error('address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
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