@extends('admin.layouts.layout')

@section('main_content')

    <div class="content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card widget-block p-4 rounded bg-primary border">
                        <div class="card-block">
                            <i class="mdi mdi-account-outline mr-4 text-white"></i>
                            <h4 class="text-white my-2">5300</h4>
                            <p>New Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card widget-block p-4 rounded bg-warning border">
                        <div class="card-block">
                            <i class="mdi mdi-cart-outline mr-4 text-white"></i>
                            <h4 class="text-white my-2">1953</h4>
                            <p>Order Placed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card widget-block p-4 rounded bg-danger border">
                        <div class="card-block">
                            <i class="mdi mdi-cart-outline  mr-4 text-white"></i>
                            <h4 class="text-white my-2">1450</h4>
                            <p>Total Sales</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card widget-block p-4 rounded bg-success border">
                        <div class="card-block">
                            <i class="mdi mdi-diamond t mr-4 text-white"></i>
                            <h4 class="text-white my-2">9503</h4>
                            <p>Monthly Revenue</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="media widget-media p-4 bg-white border">
                        <div class="icon rounded-circle mr-4 bg-primary">
                            <i class="mdi mdi-account-outline text-white "></i>
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="text-primary mb-2">5300</h4>
                            <p>New Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="media widget-media p-4 bg-white border">
                        <div class="icon rounded-circle bg-warning mr-4">
                            <i class="mdi mdi-cart-outline text-white "></i>
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="text-primary mb-2">1953</h4>
                            <p>Order Placed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="media widget-media p-4 bg-white border">
                        <div class="icon rounded-circle mr-4 bg-danger">
                            <i class="mdi mdi-cart-outline text-white "></i>
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="text-primary mb-2">1450</h4>
                            <p>Total Sales</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="media widget-media p-4 bg-white border">
                        <div class="icon bg-success rounded-circle mr-4">
                            <i class="mdi mdi-diamond text-white "></i>
                        </div>
                        <div class="media-body align-self-center">
                            <h4 class="text-primary mb-2">9503</h4>
                            <p>Monthly Revenue</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer mt-auto">
        <div class="copyright bg-white">
            <p>
                &copy; <span id="copy-year">2019</span> Copyright Admin Dashboard
            </p>
        </div>
        <script>
            var d = new Date();
            var year = d.getFullYear();
            document.getElementById("copy-year").innerHTML = year;

        </script>
    </footer>

@endsection
