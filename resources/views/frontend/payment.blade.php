@extends('layouts.main')
@section('content')
<div class="program-section py-5">
    <div class="container container-sm-fluid">
        <div class="row mb-5">
            <div class="d-flex gap-3 align-items-center">
                <a href="#"><i class="fas fa-chevron-left" aria-hidden="true"></i></a>
                <h2>Enroll To Your Desired Program</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 mb-lg-3 mb-4">
                <form action="{{ route('initiate.payment') }}" method="POST">
                    @csrf
                    <input type="text" value="{{ $data['program'] }}" name="program" hidden>
                    <input type="text" value="{{ $data['specialization'] }}" name="specialization" hidden>
                    <input type="text" value="{{ $data['price'] }}" name="amount" hidden>
                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                    <div class="row">
                        <!-- Full Name -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name" id="fullName" placeholder="Enter your full name" required>
                        </div>
                        
                        <!-- Email Address -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="emailAddress" class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" id="emailAddress" placeholder="Enter your email" required>
                        </div>
                    </div>
            
                    <div class="row">
                        <!-- Gender -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-control" name="gender" id="gender" required>
                                <option selected disabled value="">Select your gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <!-- Date of Birth -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob" required>
                        </div>
                    </div>
            
                    <div class="row">
                        <!-- Phone Number -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" name="phone" id="phoneNumber" placeholder="Enter your phone number" required>
                        </div>
            
                        <!-- County -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="county" class="form-label">County</label>
                            <input type="text" class="form-control" name="county" id="county" placeholder="Enter your county" required>
                        </div>
                    </div>
            
                    <div class="row">
                        <!-- Employment Status -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="employmentStatus" class="form-label">Employment Status</label>
                            <input type="text" class="form-control" id="employment_status" name="employment_status" placeholder="Employment Status" required>
                        </div>
            
                        <!-- Educational Level -->
                        <div class="col-12 col-md-6 mb-3">
                            <label for="educationLevel" class="form-label">Educational Level</label>
                            <input type="text" class="form-control" name="education_level" id="educationLevel" placeholder="Educational Level" required>
                        </div>
                    </div>
            
                    <!-- Enroll Now Button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-enroll px-5">Enroll Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection