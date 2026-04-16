@extends('layouts.app')
@section('style')
@endsection

@section('content')
    <section class="mt-50 mb-50 overflow-hidden">
        <div class="container">
            <div class="row popupModel">
                <div class="col-md-12 col-xl-12">
                    {{-- <div class="booking-logo-area header-logo pb-30">
                        <img src="assets/img/E-vahan-logo.webp" class="header-logo-img" alt="E-Vahan" />
                    </div> --}}
                    <div class="booking-title-area mb-40 mb-sm-30">
                        <h4 class="booking-title-join pb-20">Join Our eVAHAN Team</h4>
                    </div>
                    <form action="{{ route('jointeam.submitForm') }}" method="POST" class="contact-form ajax-contact" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" name="name_of_candidate"
                                    placeholder="Name Of Candidate" required />
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" name="fathers_name" placeholder="Father's Name"
                                    required />
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="email" class="form-control" name="email" placeholder="Email Address"
                                    required />
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone Number" maxlength="12"
                                    required />
                                <i class="fa-light fa-phone"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" name="location" placeholder="Your Address"
                                    required />
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" name="city" placeholder="City" required />
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="number" class="form-control" name="zip_code" placeholder="Zip Code" maxlength="10"
                                    required />
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" name="education" placeholder="Education"
                                    required />
                                <i class="fa-thin fa-user-graduate"></i>
                            </div>
                            <div class="form-group col-12 col-md-4">
                                <input type="number" class="form-control" name="aadhar_card_number"
                                    placeholder="Aadhar Card Number" maxlength="12" required />
                                <i class="fa-thin fa-address-card"></i>
                            </div>
                            <div class="form-group col-12 booking-title-area mt-40 mb-40 pb-10 mb-sm-30">
                                <h4 class="booking-title">Please upload Copy of Education Certificate, Aadhar Card and
                                    Resume Attatch Documents</h4>
                            </div>

                            {{-- <div class="form-group col-12">
                                <input type="file" class="form-control-h-100" name="Choose_Files"
                                    placeholder="Choose Files Or Drag Here" required />
                                <i class="fa-thin fa-folder-arrow-up"></i>
                            </div> --}}


                            <div class="form-group col-12 pt-10 pb-40">
                                <div id="yourBtn" onclick="getFile()"><i class="fa-thin fa-folder-arrow-up"></i> Click To Upload A File</div>
                                <div style='height: 0px;width: 0px; overflow:hidden;'><input type="file" id="file_upload" name="file_upload"
                                    multiple  onchange="sub(this)" /></div>
                            </div>

                            <div class="form-btn col-12">
                                <button class="th-btn fw-btn" id="formsubmit thierdpdf btnPdf3">
                                    Submit Now <i class="fa-regular fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
