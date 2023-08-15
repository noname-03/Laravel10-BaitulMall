@extends('admin.layouts.app')
@section('title', 'Data Pemasukan')
@section('data.master', 'menu-open')
@section('income', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Pemasukan</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('admin.income.create') }}" type="button"
                                    class="btn btn-primary btn-sm">Tambah
                                    Data</a>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 7%">No</th>
                                            <th style="width: 25%">Deskripsi</th>
                                            <th style="width: 25%">Tanggal</th>
                                            <th style="width: 25%">Jumlah</th>
                                            <th style="width: 18%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($incomes as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->amount }}</td>
                                                <td style="text-align: center;">
                                                    <form action="{{ route('admin.income.destroy', $item->id) }}"
                                                        method="POST">
                                                        @method('DELETE') @csrf
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="{{ route('admin.income.edit', $item->id) }}"
                                                                class="btn btn-sm btn-outline-secondary">
                                                                Edit
                                                            </a>
                                                            <button type="submit" onclick="return confirm('Are you sure?')"
                                                                class="btn btn-sm btn-outline-danger">
                                                                Delete
                                                            </button>
                                                        </div>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@push('script')
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
