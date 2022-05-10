@extends('frontend.dashboard_layout')

@section('frontend_dashboard')


    <div class="dashboard-tab cart-wrapper p-4 bg-white rounded-lg shadow-xs">

        <div class="row py-3">
            <div class="col-md-4 mx-auto text-center">

                <div class="coupon">
                    <i class="fas fa-cut"></i>
                    <div class="coupon-head">
                        Earn upto
                    </div>
                    <div class="coupon-price">
                        ₹ 100
                    </div>
                    <div class="coupon-fat-text">
                        Refer Your Friend
                    </div>
                    <div class="coupon-expiration">
                        Code : {{\Illuminate\Support\Facades\Auth::user()->refer_code}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="clearfix"></div>
                <div class="table-content table-responsive">
                    <table id="refer_code" class="table w-100" style="width:100%">
                        <thead class="bg-greyblue">
                        <tr>
                            <th class="">#</th>
                            <th class="">Name</th>
                            <th class="">Code</th>
                            <th class="">Date</th>
                            <th class="">Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i=1)
                        @foreach($users as $user)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{\Illuminate\Support\Facades\Auth::user()->refer_code}}</td>
                                <td>{{date_format($user->created_at,'d-m-Y')}}</td>
                                <td>{{date_format($user->created_at,'h:s:i')}}</td>
                                @php($i++)
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@stop
@push('frontend_css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
    <style>

        .coupon {
            padding: 10px;
            width: 300px;
            text-align: center;
            position: relative;
            z-index: 3;
            border: 3px dashed #222;
        }
        .coupon-head {
            font-weight: 600;
            font-size: 1.5em;
            line-height: 30px;
        }
        .coupon-price {
            font-size: 2em;
            font-weight: 600;
            color: red;
            line-height: 40px;
        }
        .coupon-fat-text {
            font-weight: 600;
            font-size: 1em;
        }
        .coupon-small-print {
            font-style: italic;
            margin: 10px 0;
        }
        .coupon-expiration {
            font-weight: 600;
            font-style: italic;
        }
    </style>

@endpush
@push('frontend_script')

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#refer_code').DataTable();
        } );
    </script>

@endpush
