@extends('layouts.app')

@section('title')
    Dyeing | Buka Resep
@endsection

@section('css')
    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- third party css end -->
@endsection

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Buka Resep</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="row justify-content-start mb-4">
                                    <div class="col-auto">
                                        <button class="btn btn-primary px-3" type="submit">
                                            <i data-feather="plus"></i> Tambah
                                        </button>
                                    </div>
                                </div>

                                <table id="datatable-buttons"
                                    class="table table-bordered table-hover table-striped dt-responsive nowrap w-100">
                                    {{-- class="table table-bordered table-hover table-striped" width="100%"> --}}
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Kartu Kerja</th>
                                            <th>No Demand</th>
                                            <th>Pelanggan</th>
                                            <th>Buyer</th>
                                            <th>No Order</th>
                                            <th>Jenis Kain</th>
                                            <th>Warna</th>
                                            <th>Bon Resep 1 Suffix 1</th>
                                            <th>Bon Resep 1 Suffix 2</th>
                                            <th>Operator Buka Resep</th>
                                            <th>Ket Resep</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    {{-- <thead class="bg-primary">
                                        <tr>
                                            <th class="text-light">Name</th>
                                            <th class="text-light">Position</th>
                                            <th class="text-light">Office</th>
                                            <th class="text-light">Age</th>
                                            <th class="text-light">Start date</th>
                                            <th class="text-light">Salary</th>
                                        </tr>
                                    </thead> --}}



                                    <tbody>
                                        @foreach ($dataBukaResep as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->nokk }}</td>
                                                <td>{{ $data->nodemand }}</td>
                                                <td>{{ $data->langganan }}</td>
                                                <td>{{ $data->buyer }}</td>
                                                <td>{{ $data->no_order }}</td>
                                                <td>{{ $data->jenis_kain }}</td>
                                                <td>{{ $data->warna }}</td>
                                                <td>{{ $data->noresep1 }}</td>
                                                <td>{{ $data->noresep2 }}</td>
                                                <td>{{ $data->personil }}</td>
                                                <td>{{ $data->ket_resep }}</td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>
@endsection


@section('scripts')
    <!-- third party js -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>


    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
    <!-- third party js ends -->
@endsection
