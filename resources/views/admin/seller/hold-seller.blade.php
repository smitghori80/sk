@extends('admin.layouts.master')
@section('extra-css')
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')

    <!--start rating section -->
    <div class="product_view_rating">
        <!-- strat product listing main -->

        <!-- Start seller profile -->
        <div class="seller_profile_main">
            <!-- strat product section-1 -->
            <div class="product_section_main px-2">

                <div class="row py-3">
                    <div class="col-xl-3  col-md-6 col-sm-12">
                        <div class="item product_box d-flex justify-content-between p-4">
                            <div class="product_box_text">
                                <p>Totel Product</p>
                                <h2>56</h2>
                                <p>Quality</p>
                            </div>
                            <div class="product_box_icon">
                                <img src="{{asset('admin-assets/image/total_product.png')}}" alt="total_product">
                                <img src="{{asset('admin-assets/image/product_arrow.png')}}" alt="arrow" class="d-block pt-5 ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-sm-12  mt-xl-0 ps-3">
                        <div class="item product_box_2 product_box d-flex justify-content-between p-4">
                            <div class="product_box_text">
                                <p>Totel Product</p>
                                <h2>56</h2>
                                <p>Quality</p>
                            </div>
                            <div class="product_box_icon">
                                <img src="{{asset('admin-assets/image/pandding_product.png')}}" alt="total_product">
                                <img src="{{asset('admin-assets/image/product_arrow.png')}}" alt="arrow" class="d-block pt-5 ">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-sm-12 mt-md-3 mt-xl-0 ps-xl-3">
                        <div class="item product_box_3 product_box d-flex justify-content-between p-4">
                            <div class="product_box_text">
                                <p>Totel Product</p>
                                <h2>56</h2>
                                <p>Quality</p>
                            </div>
                            <div class="product_box_icon">
                                <img src="{{asset('admin-assets/image/pass_product.png')}}" alt="total-produc">
                                <img src="{{asset('admin-assets/image/product_arrow.png')}}" alt="arrow" class="d-block pt-5 ">
                            </div>
                        </div>
                    </div>
                </div>


                <!-- start serch and category -->

                <div class="d-flex  py-5 justify-content-between">
                    <div class="w-25 justify-content-start">
                        <div class="input-group">
                            <input type="text" class="form-control pl-0 border-left-0 " placeholder="Seller_Id or Email or Mobile" aria-label="Seller_Id or Email or Mobile">
                        </div>
                    </div>
                    <div class="seller_view_category_main d-lg-flex ps-3 justify-content-between ">
                        <div class="dropdown dropdown_single_product me-xl-2 col-xl-3 mb-md-2 ">
                            <a class="btn dropdown-toggle saller_dropdown_btn dropdown_btn"
                               href="#" role="button" id="dropdownMenuLink"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                State
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown dropdown_single_product me-xl-4 col-xl-3 mb-md-2 ">
                            <a class="btn dropdown-toggle saller_dropdown_btn dropdown_btn"
                               href="#" role="button" id="dropdownMenuLink"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                District
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown dropdown_single_product me-2 col-xl-3 mb-md-2 ">
                            <a class="btn dropdown-toggle saller_dropdown_btn dropdown_btn"
                               href="#" role="button" id="dropdownMenuLink"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                City
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown dropdown_single_product me-xl-5 pe-xl-5 col-xl-3 mb-md-2 ">
                            <a class="btn dropdown-toggle saller_dropdown_btn dropdown_btn"
                               href="#" role="button" id="dropdownMenuLink"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                Filter
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end serch and category -->
                @include('admin.seller.hold-render-list')
            </div>
            <!-- end product section-1 -->
        </div>
        <!-- End profile -->
    </div>
    <!--end rating section -->

@endsection
@section('extra-js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $('.active_seller_single').click(function (e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: '{{ route('admin.seller.approval') }}',
                data: {
                    id: $(this).data('id'),
                    status: $(this).data('status'),
                    _token: "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function (response) {
                    console.log('success')
                    window.location.reload();
                }
            });
        });

        $('.hold_seller').click(function (e) {
            e.preventDefault();
            var ids = [];
            $.each($("input[name='seller_approval']:checked"), function () {
                ids.push($(this).val());
            });
            $.ajax({
                type: "POST",
                url: '{{ route('admin.seller.approval') }}',
                data: {
                    ids: ids,
                    status: $(this).data('status'),
                    _token: "{{ csrf_token() }}"
                },
                dataType: "json",
                success: function (response) {
                    console.log('second success')
                    window.location.reload();
                }
            });
        });

        $(document).ready(function () {
            $(".multiSelect_field").select2();
        });

        $('#cities,#states').on('change', function () {
            var states_ids = $('#states').val();
            var cities_ids = $('#cities').val();
            console.log(states_ids)
            console.log(cities_ids)
            $.ajax({
                type: "POST",
                url: '{{ route('admin.seller.account-search') }}',
                data: {
                    states: states_ids,
                    cities: cities_ids,
                    _token: "{{ csrf_token() }}"
                },
                success: function (response) {
                    $('#render-seller-list').empty().html(response)
                },
                error: function (response) {
                    swal()
                }
            });
        });
    </script>
@endsection
