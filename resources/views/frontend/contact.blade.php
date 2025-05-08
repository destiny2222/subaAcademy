@extends('layouts.main')
@section('content')
<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="breadcrumb-head">
                    <span>SUBA CAPITAL</span>
                    <h1>Contact us</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ptb contact-us">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 mb-5" data-aos="fade-down" data-aos-duration="3000">
                <!-- <span>Connecting Farmers</span> -->
                <h2 class="suba-offer-title-h2">Get in Touch with Us</h2>
                <p>
                    If you are an angel investor or venture capital firm and want to invest with us, 
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 mb-4" data-aos="fade-up" data-aos-duration="3000">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-4">
                            <input type="text" name="" id="" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-12 col-md-6 mb-4">
                            <input type="email" name="" id="" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-md-12 mb-4">
                            <input type="number" name="" id="" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="col-md-12 mb-4">
                            <input type="text" name="" id="" class="form-control" placeholder="Subject">
                        </div>
                        <div class="col-md-12 mb-4">
                            <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <input type="submit" class="send-message" value="Send a message">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection