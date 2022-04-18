@extends('admin.layouts.master')
@section('extra-css')
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <!--start rating section -->
    <div class="product_view_rating" style="height: 1000px">
        <!-- strat product listing main -->

        <!-- Start seller profile -->
        <div class="seller_profile_main">
            <!-- strat product section-1 -->
            <div class="product_section_main px-2">
                <div class="d-flex ps-3">
                    <div class="dropdown dropdown_single_product me-2">
                        <div class="multiSelect">
                            <select multiple class="multiSelect_field" data-placeholder="State" name="states[]" id="states">
                                @foreach($states as $state)
                                    <option class="dropdown-item" value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                                    <div class="category_select_arrow">
                                        <img  >
                                    </div>
                            </select>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
                                <g stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </g>
                            </symbol>
                        </svg>
                    </div>
                    <div class="dropdown dropdown_single_product me-2">
                        <div class="multiSelect">
                            <select multiple class="multiSelect_field" data-placeholder="City" name="cities[]" multiple="multiple" id="cities">
                                @foreach($cities as $city)
                                    <option class="dropdown-item" value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="iconX">
                                <g stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </g>
                            </symbol>
                        </svg>
                    </div>

                </div>
                <!-- start seller box -->
                <div id="render-seller-list" class="saller_main  row">
                    @include('admin.seller.render-seller-list')
                </div>

                <!-- end seller box -->
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

        $('.active_seller').click(function (e) {
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
                error: function (response){
                    swal()
                }
            });
        });
    </script>
@endsection
