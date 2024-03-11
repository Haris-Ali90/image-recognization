@extends('admin.partial.main')

@section('styles')
@endsection

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                     data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                     class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Create Folder</h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card body-->
                    <div class="card-body pb-0">
                        <!--begin::Heading-->
                        <div class="card-px text-center pt-20 pb-5">
                            <!--begin::Title-->
                            <h2 class="fs-2x fw-bolder mb-0">Create Start Up Folder</h2>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <p class="text-gray-400 fs-4 fw-bold py-7">Click on the below button to start up
                                <br/>your folder development.</p>
                            <!--end::Description-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal"
                               data-bs-target="#kt_modal_share_earn">Start Up</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Illustration-->
                        <div class="text-center px-5">
                            <img src="{{ asset('assets/media/illustrations/sketchy-1/9.png') }}" alt=""
                                 class="mw-100 h-200px h-sm-325px"/>
                        </div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Modal - Share & Earn-->
                <div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-800px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header pb-0 border-0 justify-content-end">
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                  transform="rotate(-45 6 17.3137)" fill="black"/>
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                  transform="rotate(45 7.41422 6)" fill="black"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--begin::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y pt-0 pb-15">
                                <!--begin::Wrapper-->
                                <div class="mw-lg-600px mx-auto">
                                    <!--begin::Heading-->
                                    <div class="mb-13 text-center">
                                        <!--begin::Title-->
                                        <h1 class="mb-3">Folder</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-bold fs-5">This folder is used for image uploading and
                                            downloading etc..
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::form-->
                                    <form id="folder-form" class="w-100 position-relative mb-3"
                                          autocomplete="off">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Title-->
                                            <!--end::Title-->
                                            <div class="fv-row mb-10 fv-plugins-icon-container">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                    <span class="required">Folder Name</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                       data-bs-toggle="tooltip"
                                                       title="" data-bs-original-title="Specify your unique app name"
                                                       aria-label="Specify your unique app name"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="text"
                                                       class="form-control form-control-lg form-control-solid"
                                                       name="name" placeholder="" value="">
                                                <!--end::Input-->
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <!--begin::Title-->
                                            <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                <span class="required">Shareable Link</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                   title="" data-bs-original-title="Its auto generated link"
                                                   aria-label="Specify your unique app name"></i>
                                            </label>
                                            <div class="d-flex">

                                                <input id="kt_share_earn_link_input" type="text"
                                                       class="form-control form-control-solid me-3 flex-grow-1"
                                                       name="link" readonly
                                                       value="https://keenthemes.com/?ref=skitechnology">
                                                <button id="kt_share_earn_link_copy_button"
                                                        class="btn btn-light fw-bolder flex-shrink-0"
                                                        data-clipboard-target="#kt_share_earn_link_input">Copy Link
                                                </button>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-stack pt-10">
                                            <!--begin::Wrapper-->
                                            <div>
                                                <button type="button" class="btn btn-lg btn-primary d-inline-block"
                                                        id="myButton">dddddddd
                                                </button>
												<span class="indicator-label">Submit
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-3 ms-2 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                              transform="rotate(-180 18 13)" fill="black"></rect>
														<path
                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                            fill="black"></path>
													</svg>
												</span>
                                                    <!--end::Svg Icon--></span>
                                                    <span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <button type="button" class="btn btn-lg btn-primary d-none"
                                                        data-kt-stepper-action="next">Continue
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                    <span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                          transform="rotate(-180 18 13)" fill="black"></rect>
													<path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="black"></path>
												</svg>
											</span>
                                                    <!--end::Svg Icon--></button>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::form-->


                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - Share & Earn-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>



@endsection

@section('scripts')
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>--}}
    <script>

        document.getElementById('myButton').addEventListener('click', function() {
            // Your code here
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            var formData = $('#folder-form').serialize();

            // Make an AJAX request
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.folder.store') }}', // Replace with your server endpoint
                data: formData,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', csrfToken);
                },
                success: function (response) {
                    // Handle the successful responseo
                    window.location.href = '<?php echo route('admin.folder.index') ?>';
                    console.log('Form submitted successfully');
                    console.log('Server response:', response);
                },
                error: function (error) {
                    // Handle errors
                    console.error('Error submitting form:', error);
                }
            });
        });

            // function FolderFormSubmit(){
            //
            // }
            // Intercept the form submission
            // $('#folder-form').submit(function (e) {
            //     e.preventDefault(); // Prevent the default form submission
            //
            //     // Serialize the form data
            //
            // });
    </script>


@endsection
