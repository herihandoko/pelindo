    @php
        $contact = @App\Models\ContactPage::first();
    @endphp
    <!-- Divider: Contact -->
    <section class="divider">
        <div class="container">
            <div class="row pt-30">
                <div class="col-lg-7">
                    <h2 class="mt-0 mb-0">{{@$contact->form_title}}</h2>
                    <p class="font-size-20">{{@$contact->form_subtitle}}</p>
                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class=""
                        action="{{route('contact_message')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>{{trans('frontend.Name')}} <small>*</small></label>
                                    <input name="name" class="form-control" type="text" placeholder="{{trans('frontend.Enter Name')}}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>{{trans('frontend.Email')}} <small>*</small></label>
                                    <input name="email" class="form-control required email" type="email"
                                        placeholder="{{trans('frontend.Enter Email')}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>{{trans('frontend.Subject')}} <small>*</small></label>
                                    <input name="subject" class="form-control" type="text"
                                        placeholder="{{trans('frontend.Enter Subject')}}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>{{trans('frontend.Phone (Optional)')}}</label>
                                    <input name="phone" class="form-control" type="text"
                                        placeholder="{{trans('frontend.Enter Phone')}}">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>{{trans('frontend.Message')}}</label>
                            <textarea name="message" class="form-control required" rows="5"
                                placeholder="{{trans('frontend.Enter Message')}}" required></textarea>
                        </div>
                        <div class="mb-3">

                            <button type="submit"
                                class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">{{trans('frontend.Send your message')}}</button>

                            </div>
                    </form>

                </div>
                <div class="col-lg-5">
                    <h3 class="mt-0">{{@$contact->contact_title}}</h3>
                    <p>{{@$contact->contact_subtitle}}</p>
                    <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon"> <i class="flaticon-contact-044-call-1"></i> </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">{{trans('frontend.Phone')}}</h5>
                                <div class="content"><a href="tel:{{@$contact->phone}}">{{@$contact->phone}}</a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon"> <i class="flaticon-contact-043-email-1"></i> </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">{{trans('frontend.Email')}}</h5>
                                <div class="content"><a
                                        href="mailto:{{@$contact->email}}">{{@$contact->email}}</a></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon"> <i class="flaticon-contact-025-world"></i> </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">{{trans('frontend.Address')}}</h5>
                                <div class="content">{{@$contact->address}}</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row">

                <!-- Google Map HTML Codes -->
                <iframe
                    src="{{@App\Models\GoogleMap::first()->link}}"
                    data-tm-width="100%" height="500" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
