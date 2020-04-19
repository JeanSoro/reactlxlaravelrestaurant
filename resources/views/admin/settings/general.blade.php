@extends('layouts.admin');

@section('content')

<div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit General setting </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit General settings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic form -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Edit General setting</h5>
                    <div class="card-body">
                        <form method="POST" action="/admin/settings/general">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="inputTitle">Business Name</label>
                                <input id="inputTitle" type="text" class="form-control form-control-lg @error('site_title') is-invalid @enderror" name="site_title" value="{{ old('site_title', $general_setting->site_title) }}" required autocomplete="site_title" autofocus placeholder="site title">
                                @error('site_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror       
                            </div>
                            <div class="form-group">
                                <label for="inputAddress1">Main Location</label>
                                <input id="inputAddress1" type="text" class="form-control form-control-lg @error('address_1') is-invalid @enderror" name="address_1" value="{{ old('address_1', $general_setting->address_1) }}" required autocomplete="address_1" autofocus placeholder="Add main address">
                                @error('address_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror       
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Apt/Suite/ect...</label>
                                <input id="inputAddress2" type="text" class="form-control form-control-lg @error('address_2') is-invalid @enderror" name="address_2" value="{{ old('address_2', $general_setting->address_2) }}" autocomplete="address_2" autofocus placeholder="Add Apt/Suite/ect... number">
                                @error('address_2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror       
                            </div>
                            <div class="form-group">
                                <label for="inputCity">City</label>
                                <input id="inputCity" type="text" class="form-control form-control-lg @error('city') is-invalid @enderror" name="city" value="{{ old('city', $general_setting->city) }}" required autocomplete="city" autofocus placeholder="Add a city">
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror       
                            </div>
                            <div class="form-group">
                                <label for="inputProvince">Province</label>
                                <input id="inputProvince" type="text" class="form-control form-control-lg @error('province') is-invalid @enderror" name="province" value="{{ old('province', $general_setting->province) }}" required autocomplete="province" autofocus placeholder="Add a province">
                                @error('province')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror       
                            </div>
                            <div class="form-group">
                                <label for="inputPostalCode">Postal Code</label>
                                <input id="inputPostalCode" type="text" class="form-control form-control-lg @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code', $general_setting->postal_code) }}" required autocomplete="postal_code" autofocus placeholder="Add a postal code">
                                @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror       
                            </div>
                            <div class="form-group">
                                <label for="inputPhoneNumber">Phone Number</label>
                                <input id="inputPhoneNumber" type="text" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $general_setting->phone_number) }}" required autocomplete="phone_number" autofocus placeholder="Add a phone number">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror       
                            </div>

                            <div class="row">
                                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                    
                                </div>
                                <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                        <button type="submit" class="btn btn-space btn-primary">Click To Edit</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic form -->
            <!-- ============================================================== -->
        </div>
    </div>
@endsection

