@extends('../masters')
@section('main')



    <!-- main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area common-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>đăng ký</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">đăng ký</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- login register wrapper start -->
        <div class="login-register-wrapper section-space pb-0">
            <div class="container">
                <div class="member-area-from-wrap">
                    <div class="row">


                        <!-- Register Content Start -->
                        <div class="col-lg-10">
                            <div class="login-reg-form-wrap sign-up-form">
                                <h2>đăng ký</h2>

                                <form action="{{route('register.admin')}}" method="post">
                                    @csrf
                                    <div class="single-input-item">
                                        <input type="text" placeholder="Full Name" name="username" required/>
                                    </div>
                                    <div class="single-input-item">
                                        <input type="email" placeholder="Enter your Email" name="email" required/>
                                    </div>
                                    <div class="single-input-item">
                                        <input type="text" placeholder="Enter your Address" name="address" required/>
                                    </div>
                                    <div class="single-input-item">
                                        <input type="number" placeholder="Enter your Phone" name="phone" required/>
                                    </div>
                                    <div class="single-input-item">
                                        <input type="password" placeholder="Enter your Password" name="password"
                                               required/>
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="subnewsletter">
                                                    <label class="custom-control-label" for="subnewsletter">Theo dõi Bản
                                                        tin của chúng tôi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="btn btn__bg"
                                                style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);"
                                                type="submit">Đăng ký
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Register Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- login register wrapper end -->
    </main>
    <!-- main wrapper end -->

@stop
