@extends('admin.layouts.layout')

@section('main_content')

    <div class="content-wrapper" id="printableArea">
        <div class="content">
            <div class="invoice-wrapper rounded border bg-white py-5 px-3 px-md-4 px-lg-5">
                <div class="d-flex justify-content-between">

                    <h2 class="text-dark font-weight-medium">Invoice #2365546</h2>
                </div>
                <div class="row pt-5">
                    <div class="col-md-6">
                        <form>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label class="text-dark font-weight-medium" for="">Start Date</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-calendar-range"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" data-mask="00/00/0000" placeholder=""
                                            aria-label="" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="text-dark font-weight-medium" for="">End Date</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-calendar-range"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" data-mask="00/00/0000" placeholder=""
                                            aria-label="" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary">Genarate</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-xl-3 col-lg-4">
                        <p class="text-dark mb-2">From</p>
                        <address>
                            Company Name
                            <br> 47 Holmes Green, Sophiebury, WP9M 3ZZ
                            <br> Email: example@gmail.com
                            <br> Phone: +91 5264 251 325
                        </address>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <p class="text-dark mb-2">To</p>
                        <address>
                            Company Name
                            <br> 58 Jamie Ways, North Faye, Q5 5ZP
                            <br> Email: example@gmail.com
                            <br> Phone: +91 5264 521 943
                        </address>
                    </div>

                </div>
                <table class="table mt-3 table-striped table-responsive table-responsive-large" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Item</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Cost</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Platinum Support</td>
                            <td>1 year subcription 24/7</td>
                            <td>1</td>
                            <td>$3.999,00</td>
                            <td>$3.999,00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Custom Services</td>
                            <td>Instalation and Customization (cost per hour)</td>
                            <td>10</td>
                            <td>$250,00</td>
                            <td>$250,000</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Origin License</td>
                            <td>Extended License</td>
                            <td>1</td>
                            <td>$799,00</td>
                            <td>$799,00</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Hosting</td>
                            <td>1 year subcription</td>
                            <td>1</td>
                            <td>$599,00</td>
                            <td>$599,00</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row justify-content-end">
                    <div class="col-lg-5 col-xl-4 col-xl-3 ml-sm-auto">
                        <ul class="list-unstyled mt-4">
                            <li class="mid pb-3 text-dark"> Subtotal
                                <span class="d-inline-block float-right text-default">$7.897,00</span>
                            </li>
                            <li class="mid pb-3 text-dark">Vat(10%)
                                <span class="d-inline-block float-right text-default">$789,70</span>
                            </li>
                            <li class="pb-3 text-dark">Total
                                <span class="d-inline-block float-right">$8.686,70</span>
                            </li>
                        </ul>
                        <button onclick="printDiv('printableArea');" class="btn btn-block mt-2 btn-lg btn-primary btn-pill">
                            <i class="mdi mdi-content-save"></i> Save</button>
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
