@extends('frontend.dashboard_layout')

@section('frontend_dashboard')


    <div class="dashboard-tab cart-wrapper p-5 bg-white rounded-lg shadow-xs">
        <div class="row">
            <div class="col-lg-4 mx-auto text-center">
            </div>
        </div>
        <div class="col-lg-7">
            <form action="{{route('frontend.wallet')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="wrapper">
                            <div class="custom-choose mb-3">
                                @foreach($coinProfit as $key=> $profit)
                                    <input type="radio" id="opt-{{$key}}" value="{{$profit->coins}}" name="coin_profit">
                                    <label for="opt-{{$key}}" class="coin_profit">
                                        {{$profit->coins}} - {{$profit->coin_profit}}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-none notice">
                        <span class="text-danger h5">Note:</span>
                        <span class="h5">You select special coins you can use only max 10% of the amount at a time. if you don't want <a class="clear_profit" href="#">click hare</a> </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="form-gorup">
                            <label class="mont-font fw-600 font-xsss" for="amount">Amount</label>
                            <input type="number" name="amount" id="amount" value=""
                                   class="form-control @error('amount') is-invalid @enderror">
                            @error('amount')
                            <span class="text-danger h5">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12 mb-5">
                        <button type="submit" class="btn btn-primary col-md-3 py-2">Update</button>
                    </div>
                </div>

            </form>
        </div>
    </div>


@stop
@push('frontend_css')
    <style>
        .custom-choose
        {
            display: flex;
            justify-content: normal;
            align-items: center;
        }
        .custom-choose input[type='radio']
        {
            display: none;
        }
        .custom-choose input[type='radio'] + label,.custom-choose input[type='radio']:not(checked) + label
        {
            padding: 13px 40px;
            border: solid 2px #05f;
            border-radius: 47px;
            text-align: center;
            margin-right: 31px;
            transition: .4s;
            color: #05f;
            font-size: 14px;
            font-weight: 600;
        }
        .custom-choose input[type='radio']:checked + label{
            position: relative;
            border: solid 2px #05f;
            background: #05f;
            color: #FFF;
            transition: .4s;
        }
        .custom-choose input[type='radio']:checked + label::before{
            content:'✓';
            position: absolute;
            left: 16px;
        }
    </style>
@endpush
@push('frontend_script')
    <script>
        $('.coin_profit').on('click',function () {
            var profit = $('#'+$(this).attr('for')).val();
            $('#amount').val(profit)
            $('.notice').removeClass('d-none')
        })
        $('.clear_profit').on('click',function () {
            $('.coin_profit').each(function ($index,$value) {
                $($('#'+$(this).attr('for'))).prop('checked', false);
            })
            $('.notice').addClass('d-none')
        })

    </script>
@endpush
