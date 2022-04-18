<!DOCTYPE html>
<html>

@include('seller.layouts.head')

<body class="product_view_page">
<div class="main_wrapper dashboard_wrap">

@include('seller.layouts.side-bar')
<!-- Main Content Start -->
    <div class="main_content">
        <div class="main_content_lg">
            <div class="common_content_pad_block">

            @include('seller.layouts.header')

            @yield('content')

            <!--Start profile Model -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">

                                <div class="close_profile_img">
                                    <button type="button" class="btn-close p-0 m-0" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="profile_model_info">
                                    <div>
                                        <div class="profile_img_round_main">
                                            <img src="{{asset('seller-assets/image/image_bluk/profile_pic_model.png')}}" class="profile_img_round" alt="">
                                        </div>
                                        <div class="text-center my-3">
                                            <h4 class="text-dark">DoNotDisturb</h4>
                                            <p class="text-dark py-2">Lorem ipsum dolor sit amet.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body modal-body-cancel text-center">
                                <a class="logout" href="{{route('seller.logout')}}">Logout</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--End profile Model -->
            </div>
        </div>
    </div>
    <!-- Main Content End -->

</div>

@include('seller.layouts.scripts')
@yield('extra-script')
</body>
</html>
