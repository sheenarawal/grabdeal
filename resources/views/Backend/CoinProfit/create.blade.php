@extends('layouts.backend')

@section('backend_content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <div class="col-xl-3">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Add Coin Profit</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('backend.coinProfit.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="amount">Amount</label>
                                <input type="number" class="form-control" id="amount" placeholder="100" name="amount"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="profit">Profit</label>
                                <input type="number" class="form-control" id="profit" placeholder="100" name="profit"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="total_amount">Total Amount</label>
                                <input type="number" class="form-control" id="total_amount" placeholder="100" name="total_amount"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="description">Description</label>
                                <textarea class="form-control" id="description" placeholder="100" name="description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary float-end">Send</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Coin Profit List</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <table id="wallet" class="table table-responsive">
                                <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Profit</th>
                                    <th>Amount</th>
                                    <th>Total Amount</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@stop
@push('backend_css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>

    <link rel="stylesheet" href="{{asset('backend/css/select2.min.css')}}">
    <style>
        .select2,.selection,.select2-selection{
            min-height: 38px;
            padding: 5px 0;
        }
        .select2 .select2-selection__arrow{
            margin-top: 9px;
        }
        select[readonly].select2-hidden-accessible + .select2-container {
            pointer-events: none;
            touch-action: none;
        }

        select[readonly].select2-hidden-accessible + .select2-container .select2-selection {
            background: #eee;
            box-shadow: none;
        }

        select[readonly].select2-hidden-accessible + .select2-container .select2-selection__arrow,
        select[readonly].select2-hidden-accessible + .select2-container .select2-selection__clear {
            display: none;
        }

    </style>
@endpush
@push('backend_script')
    <script src="{{asset('backend/js/select2.full.min.js')}}"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>

    <script>
        $(function () {
            $("#users").select2();
        });
        $(document).ready(function() {
            $('#profit').on('change',function () {
                $('#total_amount').val(parseInt($('#amount').val()) + parseInt($(this).val()))
            })

            var table = $('#wallet').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('backend.coinProfit.index') }}",
                buttons: [
                    {
                        extend: 'collection',
                        text: 'Export',
                        buttons: [
                            'copy',
                            'excel',
                            'csv',
                            'pdf',
                            'print'
                        ]
                    }
                ],
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'profit', name: 'profit'},
                    {data: 'coins', name: 'coins'},
                    {data: 'coin_profit', name: 'coin_profit'},
                    {data: 'action', name: 'action'},
                ]
            });
        } );
    </script>
@endpush
