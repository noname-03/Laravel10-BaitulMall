@extends('admin.layouts.app')
@section('title', 'Data Muzaki')
@if (Auth::user()->role == 'user')
    @section('data.master', 'menu-open')
@else
    @section('data.baitul.mal', 'menu-open')
@endif
@section('muzaki', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Muzaki</h1>
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
                                <a href="{{ route('admin.muzaki.create') }}" type="button"
                                    class="btn btn-primary btn-sm">Tambah
                                    Data</a>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example3" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 7%">No</th>
                                            <th>Nama</th>
                                            <th>Rt</th>
                                            <th>Rw</th>
                                            <th>Jenis</th>
                                            <th>Tanggal</th>
                                            <th>Jumlah</th>
                                            <th style="width: 30%">Alamat</th>
                                            <th style="width: 18%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($muzaki as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->rt }}</td>
                                                <td>{{ $item->rw }}</td>
                                                <td>{{ $item->type }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>@currency($item->amount)</td>
                                                <td>{{ $item->address }}</td>
                                                <td style="text-align: center;">
                                                    <form action="{{ route('admin.muzaki.destroy', $item->id) }}"
                                                        method="POST">
                                                        @method('DELETE') @csrf
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <a href="{{ route('admin.muzaki.edit', $item->id) }}"
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
            $("#example3").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": [{
                        extend: 'pdf',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    }
                ],
            }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
        });
    </script>
@endpush
