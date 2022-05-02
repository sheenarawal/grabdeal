@extends('frontend.dashboard_layout')

@section('frontend_dashboard')

    <div class="dashboard-tab p-4 rounded-lg shadow-xs bg-white">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="card border-0 w-100 p-0 rounded-xxl bg-white theme-light-bg shadow-md">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="fw-900 text-success font-xsss mt-0 mb-0 ">-27%</h4>
                                <h2 class="text-grey-900 fw-900 display1-size mt-2 mb-1 ls-3 lh-1">4455 </h2>
                                <h4 class="fw-700 text-grey-500 font-xssss ls-3 text-uppercase mb-0 mt-0"> UNITS SALE</h4>
                            </div>
                            <div class="col-6 text-left">
                                <div id="chart-users-blue"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card border-0 w-100 p-0 rounded-xxl bg-white theme-light-bg shadow-md">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="fw-900 text-success font-xsss mt-0 mb-0 ">-27%</h4>
                                <h2 class="text-grey-900 fw-900 display1-size mt-2 mb-1 ls-3 lh-1">4455 </h2>
                                <h4 class="fw-700 text-grey-500 font-xssss ls-3 text-uppercase mb-0 mt-0"> UNITS SALE</h4>
                            </div>
                            <div class="col-6 text-left">
                                <div id="chart-users-blue"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="card border-0 w-100 p-0 rounded-xxl bg-white theme-light-bg shadow-md">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="fw-900 text-success font-xsss mt-0 mb-0 ">-27%</h4>
                                <h2 class="text-grey-900 fw-900 display1-size mt-2 mb-1 ls-3 lh-1">4455 </h2>
                                <h4 class="fw-700 text-grey-500 font-xssss ls-3 text-uppercase mb-0 mt-0"> UNITS SALE</h4>
                            </div>
                            <div class="col-6 text-left">
                                <div id="chart-users-blue"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-0">
                <div class="card w-100 p-0 rounded-xxl border-0 bg-white theme-light-bg  shadow-md">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-9">
                                <h4 class="fw-900 text-success font-xsss mt-0 mb-0 ">-27%</h4>
                                <h2 class="text-grey-900 fw-900 display3-size mt-0 mb-0 lh-1">&#8364 334 </h2>
                                <h4 class="fw-900 text-grey-500 font-xssss ls-lg text-uppercase mb-0 mt-1"> UNITS SALE</h4>
                            </div>
                            <div class="col-3 text-left"><div id="chart-revinuee"></div></div>
                            <div class="col-12 p-0 mt-3">
                                <div id="chart-usersMultiplee"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 text-center">
                                <h4 class="fw-600 text-grey-500 font-xssss ls-lg d-flex justify-content-center text-uppercase"><div class="mr-2 bg-success p-2 mt-0 rounded-circle"></div> this week</h4>
                            </div>
                            <div class="col-6 text-center">
                                <h4 class="fw-600 text-grey-500 font-xssss ls-lg d-flex justify-content-center text-uppercase"><div class="mr-2 bg-instagram p-2 mt-0 rounded-circle"></div> this month</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-3 cart-wrapper">
                <div class="table-content table-responsive shadow-md">
                    <table class="table text-center bg-white rounded-xxl ">

                        <tbody >
                        <tr><td></td></tr>
                        <tr>
                            <td class="product-thumbnail pl-4 text-left">
                                <img src="{{asset('frontend/images/p-1-1.jpg')}}" alt="Product Thumnail" class="w75 rounded-lg">
                            </td>
                            <td class="product-headline text-left wide-column">
                                <h3>
                                    <a href="#" class="text-grey-900 fw-600">Super skinny blazer</a>
                                </h3>
                            </td>
                            <td class="product-p">
                                                        <span class="product-price-wrapper">
                                                            <span class="money text-grey-500 fw-500">$49.00</span>
                                                        </span>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="qty" id="qty-1" value="1" min="1">
                                    <div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                            </td>
                            <td class="product-total-price">
                                                        <span class="product-price-wrapper">
                                                            <span class="money fmont"><strong>$49.00</strong></span>
                                                        </span>
                            </td>
                            <td class="product-remove text-right"><a href="#"><i class="ti-trash font-xs text-grey-500"></i></a> <a href="#"><i class="ti-eye ml-2 font-xs text-grey-500"></i></a><a href="#"><i class="ti-pencil ml-2 font-xs text-grey-500"></i></a></td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail pl-4 text-left">
                                <img src="{{asset('frontend/images/p-4-1.jpg')}}" alt="Product Thumnail" class="w75 rounded-lg">
                            </td>
                            <td class="product-headline text-left wide-column">
                                <h3>
                                    <a href="#" class="text-grey-900 fw-600"> Jogging trousers</a>
                                </h3>
                            </td>
                            <td class="product-p">
                                                        <span class="product-price-wrapper">
                                                            <span class="money text-grey-500 fw-500">$49.00</span>
                                                        </span>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="qty" id="qty-2" value="1" min="1">
                                    <div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                            </td>
                            <td class="product-total-price">
                                                        <span class="product-price-wrapper">
                                                            <span class="money fmont"><strong>$49.00</strong></span>
                                                        </span>
                            </td>
                            <td class="product-remove text-right"><a href="#"><i class="ti-trash font-xs text-grey-500"></i></a> <a href="#"><i class="ti-eye ml-2 font-xs text-grey-500"></i></a><a href="#"><i class="ti-pencil ml-2 font-xs text-grey-500"></i></a> </td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail pl-4 text-left">
                                <img src="{{asset('frontend/images/p-3-1.jpg')}}" alt="Product Thumnail" class="w75 rounded-lg">
                            </td>
                            <td class="product-headline text-left wide-column">
                                <h3>
                                    <a href="#" class="text-grey-900 fw-600"> Grey blue leather backpack</a>
                                </h3>
                            </td>
                            <td class="product-p">
                                                        <span class="product-price-wrapper">
                                                            <span class="money text-grey-500 fw-500">$49.00</span>
                                                        </span>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="qty" id="qty-3" value="1" min="1">
                                    <div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                            </td>
                            <td class="product-total-price">
                                                        <span class="product-price-wrapper">
                                                            <span class="money fmont"><strong>$49.00</strong></span>
                                                        </span>
                            </td>
                            <td class="product-remove text-right"><a href="#"><i class="ti-trash font-xs text-grey-500"></i></a> <a href="#"><i class="ti-eye ml-2 font-xs text-grey-500"></i></a><a href="#"><i class="ti-pencil ml-2 font-xs text-grey-500"></i></a></td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail pl-4 text-left">
                                <img src="{{asset('frontend/images/p-2-1.jpg')}}" alt="Product Thumnail" class="w75 rounded-lg">
                            </td>
                            <td class="product-headline text-left wide-column">
                                <h3>
                                    <a href="#" class="text-grey-900 fw-600">Dress with belt</a>
                                </h3>
                            </td>
                            <td class="product-p">
                                                        <span class="product-price-wrapper">
                                                            <span class="money text-grey-500 fw-500">$49.00</span>
                                                        </span>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="qty" id="qty-4" value="1" min="1">
                                    <div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                            </td>
                            <td class="product-total-price">
                                                        <span class="product-price-wrapper">
                                                            <span class="money fmont"><strong>$49.00</strong></span>
                                                        </span>
                            </td>
                            <td class="product-remove text-right"><a href="#"><i class="ti-trash font-xs text-grey-500"></i></a> <a href="#"><i class="ti-eye ml-2 font-xs text-grey-500"></i></a><a href="#"><i class="ti-pencil ml-2 font-xs text-grey-500"></i></a></td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail pl-4 text-left">
                                <img src="{{asset('frontend/images/p-1-1.jpg')}}" alt="Product Thumnail" class="w75 rounded-lg">
                            </td>
                            <td class="product-headline text-left wide-column">
                                <h3>
                                    <a href="#" class="text-grey-900 fw-600">Super skinny blazer</a>
                                </h3>
                            </td>
                            <td class="product-p">
                                                        <span class="product-price-wrapper">
                                                            <span class="money text-grey-500 fw-500">$49.00</span>
                                                        </span>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="qty" id="qty-1" value="1" min="1">
                                    <div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                            </td>
                            <td class="product-total-price">
                                                        <span class="product-price-wrapper">
                                                            <span class="money fmont"><strong>$49.00</strong></span>
                                                        </span>
                            </td>
                            <td class="product-remove text-right"><a href="#"><i class="ti-trash font-xs text-grey-500"></i></a> <a href="#"><i class="ti-eye ml-2 font-xs text-grey-500"></i></a><a href="#"><i class="ti-pencil ml-2 font-xs text-grey-500"></i></a></td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail pl-4 text-left">
                                <img src="{{asset('frontend/images/p-4-1.jpg')}}" alt="Product Thumnail" class="w75 rounded-lg">
                            </td>
                            <td class="product-headline text-left wide-column">
                                <h3>
                                    <a href="#" class="text-grey-900 fw-600"> Jogging trousers</a>
                                </h3>
                            </td>
                            <td class="product-p">
                                                        <span class="product-price-wrapper">
                                                            <span class="money text-grey-500 fw-500">$49.00</span>
                                                        </span>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="qty" id="qty-2" value="1" min="1">
                                    <div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                            </td>
                            <td class="product-total-price">
                                                        <span class="product-price-wrapper">
                                                            <span class="money fmont"><strong>$49.00</strong></span>
                                                        </span>
                            </td>
                            <td class="product-remove text-right"><a href="#"><i class="ti-trash font-xs text-grey-500"></i></a> <a href="#"><i class="ti-eye ml-2 font-xs text-grey-500"></i></a><a href="#"><i class="ti-pencil ml-2 font-xs text-grey-500"></i></a></td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail pl-4 text-left">
                                <img src="{{asset('frontend/images/p-3-1.jpg')}}" alt="Product Thumnail" class="w75 rounded-lg">
                            </td>
                            <td class="product-headline text-left wide-column">
                                <h3>
                                    <a href="#" class="text-grey-900 fw-600"> Grey blue leather backpack</a>
                                </h3>
                            </td>
                            <td class="product-p">
                                                        <span class="product-price-wrapper">
                                                            <span class="money text-grey-500 fw-500">$49.00</span>
                                                        </span>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="qty" id="qty-3" value="1" min="1">
                                    <div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                            </td>
                            <td class="product-total-price">
                                                        <span class="product-price-wrapper">
                                                            <span class="money fmont"><strong>$49.00</strong></span>
                                                        </span>
                            </td>
                            <td class="product-remove text-right"><a href="#"><i class="ti-trash font-xs text-grey-500"></i></a> <a href="#"><i class="ti-eye ml-2 font-xs text-grey-500"></i></a><a href="#"><i class="ti-pencil ml-2 font-xs text-grey-500"></i></a></td>
                        </tr>
                        <tr><td></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@stop
@push('frontend_css')
@endpush
@push('frontend_script')
@endpush
