@extends('layouts.main')
@section('content')
    

<section class="portfolio-breadcrumb breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="breadcrumb-head" >
                    <h1 class="py-2">Portfolio</h1>
                    <p>
                        At SUBA Capital we offer a wide range of wealth creation vehicles leveraging;  high yield savings, a well diversified portfolio and a highly reliable lending  service to our subscribers that guarantees value for their money up to 25%  returns per annum depending on their chosen plans.  

                        We also bring healthy retruns to our angel and venture capital investors
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ptb portfolio">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-sm-12 col-md-5 col-lg-12 mb-5">
                <h2 class="suba-offer-title">Our Current portfolio</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                <div class="portfolio-box" data-aos="zoom-in" data-aos-duration="3000">
                    <h3>NGN7.76 million</h3>
                    <p> Asset Under Management</p>
                </div>
            </div>
            <!-- <div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-4">
                <div class="portfolio-box" data-aos="zoom-out" data-aos-duration="3000">
                    <h3 class="nums" data-val="5">5</h3>
                    <p> Subscribers </p>
                </div>
            </div> -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                <div class="portfolio-box" data-aos="zoom-in" data-aos-duration="3000">
                    <h3 class="" data-val="5">5</h3>
                    <p>Asset Classes</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                <div class="portfolio-box" data-aos="zoom-out" data-aos-duration="3000">
                    <h3>NGN19.34 million</h3>
                    <p> Traded Volume</p>
                </div>
            </div>
        </div>

        <!-- strategy -->
        <div class="row mb-5">
            <h3 class="stragtegy-h3">Strategy</h3>
            <p class="stragtegy-p">
                We adopt a socially responsible investment (SRI) strategy to make sure our business is creating meaningful impact as much as generating healthy returns for both our subscribers and investors. We allocate capital in a 40:30:30 ratio thus;
            </p>
        </div>
    </div>
</section>


<section class="ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper mb-5">
                        <div class="swiper-slide">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-12 col-lg-6 mb-lg-0 mb-4">
                                    <figure class="strategy-image">
                                        <img src="assets/image/strategy.jpeg" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-6 mb-lg-0 mb-4">
                                    <div class="strategy-content">
                                        <h3>Fixed Income Assets & Produce Trade:</h3>
                                        <p>
                                            As registered dealer-brokers with our SEC regulated partner, we allocate up to 40% of our generated capital revenue to fixed income assets and produce trade. We trade high demand grains for cash flow and make investments in low risk fixed income assets for capital growth and preservation. This helps basic subscribers preserve their capital against rising inflation through our high yield savings service and it returns up to 15% per annum.
                                        </p> 
                                        <div class="invest-now pt-4 text-center text-lg-start">
                                            <a href="#" class="btn-theme">Invest Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-12 col-lg-6 mb-lg-0 mb-4">
                                    <figure class="strategy-image">
                                        <img src="assets/image/strategy.jpeg" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-6 mb-lg-0 mb-4">
                                    <div class="strategy-content">
                                        <h3>Properties & Derivatives:</h3>
                                        <p>
                                            We allocate up to 30% of our generated capital to our dollar and pounds dominated properties and derivatives portfolio for both cashflow and capital appreciation. This helps our standard subscribers leverage foreign markets to hedge their investments against the ever rising inflation and take advantage of the foreign exchange gaps in the market returning up to 25% per annum to our subscribers
                                        </p> 
                                        <div class="invest-now pt-4 text-center text-lg-start">
                                            <a href="#" class="btn-theme">Invest Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row align-items-center">
                                <div class="col-12 col-sm-12 col-lg-6 mb-lg-0 mb-4">
                                    <figure class="strategy-image">
                                        <img src="assets/image/strategy.jpeg" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-6 mb-lg-0 mb-4">
                                    <div class="strategy-content">
                                        <h3> Lending & Farm Projects: </h3>
                                        <p>
                                            We allocate up to 30% of our generated capital revenue to our lending service as micro loans to professionals, small business owners to support their growing businesses and to smallholder farmers to finance farm projects. This helps subscribers get access to affordable micro capital with proven repayment strategy reducing defaults rates and returning up to 25% per annum to the lenders (premium subscribers).
                                        </p> 
                                        <div class="invest-now pt-4 text-center text-lg-start">
                                            <a href="#" class="btn-theme ">Invest Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

  