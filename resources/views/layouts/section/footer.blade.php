<!-- Start Footer Area -->
<footer class="htc__footer__area">
    <!-- Start Footer Top Area -->
    <div class="footer__top" data--black__overlay="8"
         style="background: rgba(0, 0, 0, 0) url('{{ asset('assets/images/bg/footer1.png') }}') no-repeat scroll 0 0 / cover ;">
        <div class="container">
            <div class="row footer__wrap">
                <!-- Start Single Content -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer">
                        <div class="ft__logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/logo/SLR.png') }}" alt="footer logo" style="max-width: 35%;">
                            </a>
                        </div>
                        <div class="ft__deatails">
                            <p>
                                Introducing {{  config('app.name') }} : Explore the world of sign language with our advanced AI model. Learn, practice, and communicate effortlessly from anywhere. Start your sign language journey with SignAI today!.
                            </p>
                        </div>
                        <ul class="social__icon">
                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Content -->
                <!-- Start Single Content -->
                <div class="col-lg-2 offset-lg-1 col-md-6 col-12 xsmt--40">
                    <div class="footer">
                        <h2 class="footer__title">Information</h2>
                        <div class="footer__content">
                            <ul class="ft__menu">
                                <li><a href="#">about</a></li>
                                <li><a href="#">learn guide</a></li>
                                <li><a href="#">blog</a></li>
                           </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Content -->
                <!-- Start Single Content -->
                <div class="col-lg-5 col-12 smmt--30 xsmt--40">
                    <div class="footer">
                        <h2 class="footer__title">Recently News</h2>
                        <div class="ft__recent__post" style="justify-content: space-between;">

                        </div>
                    </div>
                </div>
                <!-- End Single Content -->
            </div>
        </div>
    </div>
    <!-- End Footer Top Area -->
    <!-- Start Footer Bottom -->
    <div class="footer__bottom bg__cat--1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <div class="copyright__inner">
                            <p>Copyright
                                {{ \Carbon\Carbon::now()->format('Y') }}
                                <a href="{{ url('/') }}">{{ config('app.name') }}.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer Area -->
