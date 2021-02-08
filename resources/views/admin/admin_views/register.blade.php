@extends('admin.layouts.layout')

@section('main_content')
    @if (session('status'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <!-- Recent Order Table -->
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Add New Admin</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer01">First Name</label>
                                        <input type="text" name="first_name" class="form-control" id="validationServer01"
                                            placeholder="First Name" value="{{ old('first_name') }}" required>
                                        @error('first_name')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer01">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" id="validationServer01"
                                            placeholder="Last Name" value="{{ old('last_name') }}" required>
                                        @error('last_name')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer02">Email</label>
                                        <input type="email" name="email" class="form-control" id="validationServer02"
                                            placeholder="Email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer02">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="validationServer02"
                                            placeholder="Phone" value="{{ old('phone') }}" required>
                                        @error('phone')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer02">Password</label>
                                        <input type="password" name="password" class="form-control" id="validationServer02"
                                            placeholder="Password" required>
                                        @error('password')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer02">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="validationServer02" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="exampleFormControlTextarea1">Address</label>
                                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1"
                                            rows="3" required>{{ old('address') }}</textarea>
                                        @error('address')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-5 mb-3">
                                        <label for="validationServer02">Country</label>
                                        <input type="text" name="country" class="form-control" id="validationServer02"
                                            placeholder="Country" value="{{ old('country') }}" required>
                                        @error('country')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationServer02">City</label>
                                        <input type="text" name="city" class="form-control" id="validationServer02"
                                            placeholder="City" value="{{ old('city') }}" required>
                                        @error('city')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationServer02">Zip Code</label>
                                        <input type="number" name="zip_code" class="form-control" id="validationServer02"
                                            placeholder="Zip code" value="{{ old('zip_code') }}" required>
                                        @error('zip_code')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="exampleFormControlFile1">Image</label>
                                        <input type="file" name="image" accept="image/*" class="form-control-file" required
                                            id="exampleFormControlFile1" value="{{ old('image') }}">
                                        @error('image')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Add Admin</button>
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
