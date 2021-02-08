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
                            <h2>Deactive Product</h2>
                        </div>
                        <div class="card-body pt-0 pb-5">
                            <div class="table-responsive">
                                <table class="table card-table table-responsive" id="table_id" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th class="d-none d-md-table-cell">Price</th>
                                            <th class="d-none d-md-table-cell">Category</th>
                                            <th class="d-none d-md-table-cell">Image URL</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2441</td>
                                            <td>
                                                <a class="text-dark">Umar Khan</a>
                                            </td>
                                            <td class="d-none d-md-table-cell">umar@gmail.com</td>
                                            <td class="d-none d-md-table-cell">123123123</td>
                                            <td class="d-none d-md-table-cell">Islamabad</td>
                                            <td>
                                                <span class="badge badge-danger">Deactive</span>
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
                                                            <a href="#">Active</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24541</td>
                                            <td>
                                                <a class="text-dark">Umar Khan</a>
                                            </td>
                                            <td class="d-none d-md-table-cell">umar@gmail.com</td>
                                            <td class="d-none d-md-table-cell">123432231</td>
                                            <td class="d-none d-md-table-cell">Islamabad</td>
                                            <td>
                                                <span class="badge badge-danger">Deactive</span>
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
                                                            <a href="#">Active</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24541</td>
                                            <td>
                                                <a class="text-dark">Umar Khan</a>
                                            </td>
                                            <td class="d-none d-md-table-cell">umar@gmail.com</td>
                                            <td class="d-none d-md-table-cell">23423423123</td>
                                            <td class="d-none d-md-table-cell">Islamabad</td>
                                            <td>
                                                <span class="badge badge-danger">deactive</span>
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
                                                            <a href="#">Active</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24541</td>
                                            <td>
                                                <a class="text-dark" href="">Umar Khan</a>
                                            </td>
                                            <td class="d-none d-md-table-cell">umar@gmail.com</td>
                                            <td class="d-none d-md-table-cell">2343242321</td>
                                            <td class="d-none d-md-table-cell">Islamabad</td>
                                            <td>
                                                <span class="badge badge-danger">Deactive</span>
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
                                                            <a href="#">Active</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24541</td>
                                            <td>
                                                <a class="text-dark">Ali Raza</a>
                                            </td>
                                            <td class="d-none d-md-table-cell">aliraza@gmail.com</td>
                                            <td class="d-none d-md-table-cell">03448263738</td>
                                            <td class="d-none d-md-table-cell">Lahore</td>
                                            <td>
                                                <span class="badge badge-danger">Deactive</span>
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
                                                            <a href="#">Active</a>
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
