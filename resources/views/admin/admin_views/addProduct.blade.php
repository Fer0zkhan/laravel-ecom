@extends('admin.layouts.layout')

@section('main_content')
    {{-- @extends('admin.admin_views.header') --}}

    <div class="content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <!-- Recent Order Table -->
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Add New Product</h2>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">Product Name</label>
                                        <input type="text" class="form-control" id="validationServer01"
                                            placeholder="Product Name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer02">Product Price</label>
                                        <input type="number" class="form-control" id="validationServer02"
                                            placeholder="Product Price" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer02">Sale Price If:</label>
                                        <input type="number" class="form-control" id="validationServer02"
                                            placeholder="Product Price">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="exampleFormControlSelect12">Product Categeries</label>
                                        <select class="form-control" id="exampleFormControlSelect12">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="exampleFormControlTextarea1">Product Discription</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            required></textarea>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="exampleFormControlFile1">Product Image One</label>
                                        <input type="file" class="form-control-file" required id="exampleFormControlFile1">
                                        <div class="invalid-feedback">
                                            Please Add one or more then one image
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        <div class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Add Product</button>
                            </form>
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
