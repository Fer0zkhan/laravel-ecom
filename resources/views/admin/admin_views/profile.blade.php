@extends('admin.layouts.layout')

@section('main_content')

    <div class="content-wrapper">
        <div class="content">
            <div class="bg-white border rounded">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-xl-3">
                        <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                            <div class="card text-center widget-profile px-0 border-0">
                                <div class="card-img mx-auto rounded-circle">
                                    <img src="assets/img/user/u6.jpg" alt="user image">
                                </div>
                                <div class="card-body">
                                    <h4 class="py-2 text-dark">Albrecht Straub</h4>
                                    <p>Albrecht.straub@gmail.com</p>
                                </div>
                            </div>

                            <hr class="w-100">
                            <div class="contact-info pt-4">
                                <h5 class="text-dark mb-1">Contact Information</h5>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                                <p>Albrecht.straub@gmail.com</p>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                                <p>+99 9539 2641 31</p>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Country</p>
                                <p>Pakistan</p>
                                <p class="text-dark font-weight-medium pt-4 mb-2">City</p>
                                <p>Lahore</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="profile-content-right py-5">
                            <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="timeline-tab" data-toggle="tab" href="#timeline"
                                        role="tab" aria-controls="timeline" aria-selected="true">Edit Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content px-3 px-xl-5" id="myTabContent">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-12">
                                        <!-- Recent Order Table -->
                                        <div class="card card-default">
                                            <div class="card-header card-header-border-bottom">
                                                <h2>Edit Profile</h2>
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationServer01">First Name</label>
                                                            <input type="text" class="form-control" id="validationServer01"
                                                                placeholder="First Name" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationServer01">Last Name</label>
                                                            <input type="text" class="form-control" id="validationServer01"
                                                                placeholder="Last Name" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationServer02">Email</label>
                                                            <input type="email" class="form-control" id="validationServer02"
                                                                placeholder="Email" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationServer02">Phone</label>
                                                            <input type="text" class="form-control" id="validationServer02"
                                                                placeholder="Phone" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="validationServer02">Password</label>
                                                            <input type="password" class="form-control"
                                                                id="validationServer02" placeholder="Password" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="validationServer02">Confirm Password</label>
                                                            <input type="password" class="form-control"
                                                                id="validationServer02" placeholder="Confirm Password"
                                                                required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="exampleFormControlTextarea1">Address</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                                rows="3" required></textarea>
                                                            <div class="invalid-feedback">
                                                                Please choose a username.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-5 mb-3">
                                                            <label for="validationServer02">Country</label>
                                                            <input type="text" class="form-control" id="validationServer02"
                                                                placeholder="Country" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationServer02">City</label>
                                                            <input type="text" class="form-control" id="validationServer02"
                                                                placeholder="City" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationServer02">Zip Code</label>
                                                            <input type="number" class="form-control"
                                                                id="validationServer02" placeholder="City" required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="exampleFormControlFile1">Image</label>
                                                            <input type="file" class="form-control-file" required
                                                                id="exampleFormControlFile1">
                                                            <div class="invalid-feedback">
                                                                Please Add one or more then one image
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
