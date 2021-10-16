@extends('layout.app')
@section('content')

<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95"
        style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">
            <h2>Admission</h2>

        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Admission</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> Admission </h4>
                        </a>

                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="{{ route('admission.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Name <small>*</small></label>
                                                    <input name="name" type="text" placeholder="Enter Name"
                                                     class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Email <small>*</small></label>
                                                    <input name="email" class="form-control required email"
                                                        type="email"  placeholder="Enter Email">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Phone/Tel <small>*</small></label>
                                                    <input name="phone" class="form-control required email"
                                                         type="text" placeholder="Enter Phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                              <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label>Address <small>*</small></label>
                                                    <input name="address" class="form-control required email"
                                                         type="text" placeholder="Enter Address">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-check">
                                                    <label>Skill</label><br>
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="skill" id=""
                                                            value="C++" checked>
                                                        C++
                                                    </label><br>
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="skill" id=""
                                                            value="Python">
                                                        Python
                                                    </label>
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" name="skill" id=""
                                                            value="html/css">
                                                        Html/css
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Gender</label><br>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" name="gender" id="" value="Male"
                                                        class="custom-control-input">Male
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description"></span>
                                                </label><br>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" name="gender" id="" value="Female"
                                                        class="custom-control-input">Female
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description"></span>
                                                </label>

                                            </div>


                                        </div>
                                        <div class="form-group">
                                            <label>Message <small>*</small></label>
                                            <textarea name="message" class="form-control required"
                                                placeholder="Your cover letter/message sent to the employer"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                            <button type="submit"
                                                class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10"
                                                data-loading-text="Please wait..." name="submit">Apply Now</button>
                                        </div>

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

@endsection
