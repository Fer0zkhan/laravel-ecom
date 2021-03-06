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
                            <h2>Complete Orders</h2>
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
                                            <th></th>
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
                                                <span class="badge badge-success">complete</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown show d-inline-block widget-dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                        id="dropdown-recent-order1" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-display="static"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdown-recent-order1">

                                                        <li class="dropdown-item">
                                                            <a href="#">Remove</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <span class="badge badge-success">complete</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown show d-inline-block widget-dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                        id="dropdown-recent-order2" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-display="static"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdown-recent-order2">

                                                        <li class="dropdown-item">
                                                            <a href="#">Remove</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <span class="badge badge-success">complete</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown show d-inline-block widget-dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                        id="dropdown-recent-order3" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-display="static"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdown-recent-order3">

                                                        <li class="dropdown-item">
                                                            <a href="#">Remove</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <span class="badge badge-success">complete</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown show d-inline-block widget-dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                        id="dropdown-recent-order4" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-display="static"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdown-recent-order4">
                                                        <li class="dropdown-item">
                                                            <a href="#">Remove</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
                                                <span class="badge badge-success">complete</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown show d-inline-block widget-dropdown">
                                                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button"
                                                        id="dropdown-recent-order5" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"
                                                        data-display="static"></a>
                                                    <ul class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdown-recent-order5">
                                                        <li class="dropdown-item">
                                                            <a href="#">Remove</a>
                                                        </li>
                                                    </ul>
                                                </div>
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
