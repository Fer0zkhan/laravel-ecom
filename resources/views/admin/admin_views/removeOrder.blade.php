@extends('admin.layouts.layout')

@section('main_content')

    <div class="content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row">
                <div class="col-12">
                    <!-- Recent Order Table -->
                    <div class="card card-table-border-none" id="recent-orders">
                        <div class="card-header justify-content-between">
                            <h2>Remove Orders</h2>
                        </div>
                        <div class="card-body pt-0 pb-5">
                            <div class="table-responsive">
                                <table class="table card-table table-responsive" id="table_id" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product Name</th>
                                            <th class="d-none d-md-table-cell">Units</th>
                                            <th class="d-none d-md-table-cell">Order Date</th>
                                            <th class="d-none d-md-table-cell">Order Cost</th>
                                            <th>Status</th>
                                            <!-- <th></th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>24541</td>
                                            <td>
                                                <a class="text-dark" href=""> Coach Swagger</a>
                                            </td>
                                            <td class="d-none d-md-table-cell">1 Unit</td>
                                            <td class="d-none d-md-table-cell">Oct 20, 2018</td>
                                            <td class="d-none d-md-table-cell">$230</td>
                                            <td>
                                                <span class="badge badge-danger">remove</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24541</td>
                                            <td>
                                                <a class="text-dark" href=""> Toddler Shoes, Gucci Watch</a>
                                            </td>
                                            <td class="d-none d-md-table-cell">2 Units</td>
                                            <td class="d-none d-md-table-cell">Nov 15, 2018</td>
                                            <td class="d-none d-md-table-cell">$550</td>
                                            <td>
                                                <span class="badge badge-danger">remove</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24541</td>
                                            <td>
                                                <a class="text-dark" href=""> Hat Black Suits</a>
                                            </td>
                                            <td class="d-none d-md-table-cell">1 Unit</td>
                                            <td class="d-none d-md-table-cell">Nov 18, 2018</td>
                                            <td class="d-none d-md-table-cell">$325</td>
                                            <td>
                                                <span class="badge badge-danger">remove</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24541</td>
                                            <td>
                                                <a class="text-dark" href=""> Backpack Gents, Swimming Cap Slin</a>
                                            </td>
                                            <td class="d-none d-md-table-cell">5 Units</td>
                                            <td class="d-none d-md-table-cell">Dec 13, 2018</td>
                                            <td class="d-none d-md-table-cell">$200</td>
                                            <td>
                                                <span class="badge badge-danger">remove</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24541</td>
                                            <td>
                                                <a class="text-dark" href=""> Speed 500 Ignite</a>
                                            </td>
                                            <td class="d-none d-md-table-cell">1 Unit</td>
                                            <td class="d-none d-md-table-cell">Dec 23, 2018</td>
                                            <td class="d-none d-md-table-cell">$150</td>
                                            <td>
                                                <span class="badge badge-danger">remove</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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

    </div>

@endsection
