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
            <div class="col-12 col-lg-6 mb-lg-3 mb-4">
                <div class="program-card">
                    <div class="program-icon d-flex gap-3 align-items-center">
                        <img src="assets/image/backend.png" width="50" alt="">
                        <h3 class="program-title">Software Engineering</h3>
                    </div>
                    <p class="program-description">Master backend technologies through specialized, hands-on training designed to empower and innovate. Our program enhances your skills, preparing you to excel in the tech industry.</p>
                    <div class="form-group mb-4">
                        <label for="specialization">Choose your path:</label>
                        <div class="d-flex gap-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="specialization" id="frontend" value="Frontend Development" required>
                                <label class="form-check-label" for="frontend">
                                    Frontend Development
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="specialization" id="backend" value="Backend Development" required>
                                <label class="form-check-label" for="backend">
                                    Backend Development
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="learn">
                        <a onclick="event.preventDefault(); document.getElementById('payment-form-backend').submit();" class="enroll-btn">Enroll Now <i class="fa fa-arrow-circle-right ps-3"></i></a>
                    </div>
                </div>
                <form action="{{ route('payment.page') }}" method="POST" id="payment-form-backend">
                    @csrf
                    <input type="text" name="program" value="Software Engineering" hidden>
                    <input type="text" name="price" value="30000" hidden>
                    <input type="hidden" name="specialization" id="selected-specialization">
                </form>
            </div>
            <script>
                // JavaScript to capture selected specialization and pass it to the form
                document.querySelector('.enroll-btn').addEventListener('click', function() {
                    const selectedSpecialization = document.querySelector('input[name="specialization"]:checked');
                    if (selectedSpecialization) {
                        document.getElementById('selected-specialization').value = selectedSpecialization.value;
                        document.getElementById('payment-form').submit();
                    } else {
                        alert('Please choose a specialization before enrolling.');
                    }
                });
            </script>
            <div class="col-12 col-lg-6 mb-lg-3 mb-4">
                <div class="program-card">
                    <div class="program-icon d-flex gap-3 align-items-center">
                        <img src="assets/image/product.png" width="50" alt="">
                        <h3 class="program-title">Product Development</h3>
                    </div>
                    <p class="program-description">Master the dynamics of product development through specialized, hands-on training designed to empower and innovate. Our program enhances your skills, preparing you to excel in the tech industry.</p>
                   <!-- Specialization Options -->
                    <div class="form-group py-4">
                        <label for="specialization-product">Choose your path:</label>
                        <div class="d-flex gap-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="specialization-product" id="frontend-product" value="Product Design Development" required>
                                <label class="form-check-label" for="frontend-product">
                                    Product Design 
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="specialization-product" id="backend-product" value="Product Management" required>
                                <label class="form-check-label" for="backend-product">
                                   Product Management
                                </label>
                            </div>
                        </div>
                    </div>
                   
                    <div class="learn">
                        <a onclick="event.preventDefault(); document.getElementById('payment-form-product').submit();" class="enroll-btn">Enroll Now <i class="fa fa-arrow-circle-right ps-3"></i></a>
                    </div>
                </div>
                <form action="{{ route('payment.page') }}" method="POST" id="payment-form-product">
                    @csrf
                    <input type="text" name="program" value="Product Development" hidden>
                    <input type="text" name="price" value="30000" hidden>
                     <input type="hidden" name="specialization" id="selected-specialization-product">
                </form>
            </div>
            
            <!-- Repeat the same logic for other programs -->
            
            <div class="col-12 col-lg-6 mb-lg-3 mb-4">
                <div class="program-card">
                    <div class="program-icon d-flex gap-3 align-items-center">
                        <img src="assets/image/business.png" width="50" alt="">
                        <h3 class="program-title">Business Development</h3>
                    </div>
                    <p class="program-description">Master the dynamics of business development through specialized, hands-on training designed to empower and innovate. Our program enhances your skills, preparing you to excel in the tech industry.</p>
                    <div class="learn">
                        <a onclick="event.preventDefault(); document.getElementById('payment-form-business').submit();" class="enroll-btn">Enroll Now <i class="fa fa-arrow-circle-right ps-3"></i></a>
                    </div>
                </div>
                <form action="{{ route('payment.page') }}" method="POST" id="payment-form-business">
                    @csrf
                    <input type="text" name="program" value="Business Development" hidden>
                    <input type="text" name="price" value="30000" hidden>
                </form>
            </div>
            
            <div class="col-12 col-lg-6 mb-lg-3 mb-4">
                <div class="program-card">
                    <div class="program-icon d-flex gap-3 align-items-center">
                        <img src="assets/image/data.png" width="50" alt="">
                        <h3 class="program-title">Data Analyst</h3>
                    </div>
                    <p class="program-description">Master the dynamics of data through specialized, hands-on training designed to empower and innovate. Our program enhances your skills, preparing you to excel in the tech industry.</p>
                    <div class="learn">
                        <a onclick="event.preventDefault(); document.getElementById('payment-form-data').submit();" class="enroll-btn">Enroll Now <i class="fa fa-arrow-circle-right ps-3"></i></a>
                    </div>
                </div>
                <form action="{{ route('payment.page') }}" method="POST" id="payment-form-data">
                    @csrf
                    <input type="text" name="program" value="Data Analyst" hidden>
                    <input type="text" name="price" value="30000" hidden>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection