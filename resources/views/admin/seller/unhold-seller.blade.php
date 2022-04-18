@extends('admin.layouts.master')
@section('extra-css')
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <!--start rating section -->
    <div class="product_view_rating" style="height: 1000px;">
        <!-- strat product listing main -->

        <!-- Start seller profile -->
        <div class="seller_profile_main">
            <!-- strat product section-1 -->
            <div class="product_section_main px-2">

                <!-- start serch and category -->

                <div class="d-flex  py-5 justify-content-between">
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
                <!-- start seller box -->
                <div class="saller_main  row">

                    @foreach($holdSellers as $seller)
                        <div class="seller_approval_box col-xl-6 col-lg-12 col-md-12 mt-4">
                            <div class=" seller_single_box mx-2">
                                <div class="d-flex justify-content-end">
                                    <label class="checkbox bounce">
                                        <input type="checkbox" />
                                        <svg viewBox="0 0 21 21">
                                            <polyline points="5 10.75 8.5 14.25 16 6">
                                            </polyline>
                                        </svg>
                                    </label>
                                </div>
                                <div class="d-flex  justify-content-between">
                                    <ul class="seller_box_part_left px-0 mb-0">
                                        <li>
                                            <span>Seller_id:-{{$seller['id']}}</span>
                                        </li>
                                        <li>
                                            <span>Seller Name:-</span>
                                            <div class="d-inline">{{$seller['first_name'].''.$seller['last_name']}}</div>
                                        </li>

                                        <li>
                                            <span>Seller Phone No.:-</span>
                                            <div class="d-inline">{{$seller['phone_number']}}</div>
                                        </li>
                                        <li>
                                            <span>Seller Email Address.:-</span>
                                            <div class="d-inline">{{$seller['email']}}</div>
                                        </li>

                                    </ul>
                                    <ul class="seller_box_part_left px-0 mb-0 me-5">
                                        <li>
                                            <span>Seller Company’s Name:</span>
                                            <div class="d-inline">{{$seller['company_name']}}</div>
                                        </li>
                                        <li>
                                            <span> Seller State:-</span>
                                            <div class="d-inline">{{$seller->state['name']}}</div>
                                        </li>
                                        <li>
                                            <span>  Seller City:-</span>
                                            <div class="d-inline">{{$seller->city['name']}}</div>
                                        </li>

                                    </ul>
                                </div>

                                <div class="d-flex profile_main_photo_seller ">
                                    <ul class=" d-flex pie_chart align-items-center ps-0 justify-content-center">

                                    </ul>
                                    <ul
                                        class=" d-flex pie_chart align-items-center ps-0 justify-content-center">

                                    </ul>
                                    <ul
                                        class=" d-flex pie_chart align-items-center ps-0 justify-content-center">


                                    </ul>

                                    <ul class="d-flex align-items-end mb-4 ps-0 mb-0">
                                        <div>

                                            <a href="#" class="seller_approval_bnt deactive_unhold_seller mb-0 d-flex  align-items-center text-dark justify-content-center">Unhold Seller</a>

                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- end seller box -->
            </div>
            <!-- end product section-1 -->
        </div>
        <!-- End profile -->
        <!-- strat right corener button -->
        <div
            class="pagination_and_button d-flex justify-content-between mt-5  align-items-center">
            <nav aria-label="Page navigation example w-50 mb-0">
                <ul
                    class="custom-pagination pagination-secondary pagination align-items-stretch">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">Prev</span>
                        </a>
                    </li>
                    <li class="page-item"><span class="page-link">1</span></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="d-flex">
                <a href="unhold_seller.html"
                   class="seller_approval_bnt deactive_unhold_seller mb-0 d-flex  align-items-center text-dark justify-content-center">Unhold Seller</a>

            </div>
        </div>
        <!-- end right coreber button -->
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
