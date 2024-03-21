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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Folder</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="" class="text-muted text-hover-primary">Images</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                    {{--                        <li class="breadcrumb-item">--}}
                    {{--                            <span class="bullet bg-gray-200 w-5px h-2px"></span>--}}
                    {{--                        </li>--}}
                    {{--                        <!--end::Item-->--}}
                    {{--                        <!--begin::Item-->--}}
                    {{--                        <li class="breadcrumb-item text-muted">Pages</li>--}}
                    {{--                        <!--end::Item-->--}}
                    {{--                        <!--begin::Item-->--}}
                    {{--                        <li class="breadcrumb-item">--}}
                    {{--                            <span class="bullet bg-gray-200 w-5px h-2px"></span>--}}
                    {{--                        </li>--}}
                    {{--                        <!--end::Item-->--}}
                    {{--                        <!--begin::Item-->--}}
                    {{--                        <li class="breadcrumb-item text-muted">Projects</li>--}}
                    {{--                        <!--end::Item-->--}}
                    {{--                        <!--begin::Item-->--}}
                    {{--                        <li class="breadcrumb-item">--}}
                    {{--                            <span class="bullet bg-gray-200 w-5px h-2px"></span>--}}
                    {{--                        </li>--}}
                    {{--                        <!--end::Item-->--}}
                    {{--                        <!--begin::Item-->--}}
                    {{--                        <li class="breadcrumb-item text-dark">Users</li>--}}
                    <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">
                    <!--begin::Wrapper-->
                {{--                    <div class="me-4">--}}
                {{--                        <!--begin::Menu-->--}}
                {{--                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">--}}
                {{--                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->--}}
                {{--                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">--}}
                {{--											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
                {{--												<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />--}}
                {{--											</svg>--}}
                {{--										</span>--}}
                {{--                            <!--end::Svg Icon-->Filter</a>--}}
                {{--                        <!--begin::Menu 1-->--}}
                {{--                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61484c07acae8">--}}
                {{--                            <!--begin::Header-->--}}
                {{--                            <div class="px-7 py-5">--}}
                {{--                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>--}}
                {{--                            </div>--}}
                {{--                            <!--end::Header-->--}}
                {{--                            <!--begin::Menu separator-->--}}
                {{--                            <div class="separator border-gray-200"></div>--}}
                {{--                            <!--end::Menu separator-->--}}
                {{--                            <!--begin::Form-->--}}
                {{--                            <div class="px-7 py-5">--}}
                {{--                                <!--begin::Input group-->--}}
                {{--                                <div class="mb-10">--}}
                {{--                                    <!--begin::Label-->--}}
                {{--                                    <label class="form-label fw-bold">Status:</label>--}}
                {{--                                    <!--end::Label-->--}}
                {{--                                    <!--begin::Input-->--}}
                {{--                                    <div>--}}
                {{--                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61484c07acae8" data-allow-clear="true">--}}
                {{--                                            <option></option>--}}
                {{--                                            <option value="1">Approved</option>--}}
                {{--                                            <option value="2">Pending</option>--}}
                {{--                                            <option value="2">In Process</option>--}}
                {{--                                            <option value="2">Rejected</option>--}}
                {{--                                        </select>--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Input-->--}}
                {{--                                </div>--}}
                {{--                                <!--end::Input group-->--}}
                {{--                                <!--begin::Input group-->--}}
                {{--                                <div class="mb-10">--}}
                {{--                                    <!--begin::Label-->--}}
                {{--                                    <label class="form-label fw-bold">Member Type:</label>--}}
                {{--                                    <!--end::Label-->--}}
                {{--                                    <!--begin::Options-->--}}
                {{--                                    <div class="d-flex">--}}
                {{--                                        <!--begin::Options-->--}}
                {{--                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">--}}
                {{--                                            <input class="form-check-input" type="checkbox" value="1" />--}}
                {{--                                            <span class="form-check-label">Author</span>--}}
                {{--                                        </label>--}}
                {{--                                        <!--end::Options-->--}}
                {{--                                        <!--begin::Options-->--}}
                {{--                                        <label class="form-check form-check-sm form-check-custom form-check-solid">--}}
                {{--                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />--}}
                {{--                                            <span class="form-check-label">Customer</span>--}}
                {{--                                        </label>--}}
                {{--                                        <!--end::Options-->--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Options-->--}}
                {{--                                </div>--}}
                {{--                                <!--end::Input group-->--}}
                {{--                                <!--begin::Input group-->--}}
                {{--                                <div class="mb-10">--}}
                {{--                                    <!--begin::Label-->--}}
                {{--                                    <label class="form-label fw-bold">Notifications:</label>--}}
                {{--                                    <!--end::Label-->--}}
                {{--                                    <!--begin::Switch-->--}}
                {{--                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">--}}
                {{--                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />--}}
                {{--                                        <label class="form-check-label">Enabled</label>--}}
                {{--                                    </div>--}}
                {{--                                    <!--end::Switch-->--}}
                {{--                                </div>--}}
                {{--                                <!--end::Input group-->--}}
                {{--                                <!--begin::Actions-->--}}
                {{--                                <div class="d-flex justify-content-end">--}}
                {{--                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>--}}
                {{--                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>--}}
                {{--                                </div>--}}
                {{--                                <!--end::Actions-->--}}
                {{--                            </div>--}}
                {{--                            <!--end::Form-->--}}
                {{--                        </div>--}}
                {{--                        <!--end::Menu 1-->--}}
                {{--                        <!--end::Menu-->--}}
                {{--                    </div>--}}
                <!--end::Wrapper-->
                    <!--begin::Button-->
                {{--                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>--}}
                <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Navbar-->
                <div class="card mb-8">
                    <div class="card-body pt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                            <!--begin::Image-->
                            <div
                                class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                                {{--                                <img class="mw-50px mw-lg-75px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="image" />--}}
                                {!! QrCode::size(200)->generate('https://www.youtube.com/watch?v=S8tiai8LBwY') !!}
                            </div>
                            <!--end::Image-->
                            <!--begin::Wrapper-->
                            <div class="flex-grow-1">
                                <!--begin::Head-->
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Status-->
                                        <div class="d-flex align-items-center mb-1">
                                            <a href="#"
                                               class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3">{{ $folder->name }}</a>
                                            <span class="badge badge-light-success me-auto">In Progress</span>
                                        </div>
                                        <!--end::Status-->
                                        <!--begin::Description-->
                                        <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400">#1 Upload your
                                            images to get view and shareable to multiple user
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Actions-->
                                    <div class="d-flex mb-4">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                            <span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
														<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
													</svg>
												</span>
                                            <!--end::Svg Icon-->Add User</button>
                                        {{--                                        <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add </a>--}}
                                        <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal"
                                           data-bs-target="#kt_modal_new_target">Add Images</a>
                                        <!--begin::Menu-->
                                    {{--                                        <div class="me-0">--}}
                                    {{--                                            <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">--}}
                                    {{--                                                <i class="bi bi-three-dots fs-3"></i>--}}
                                    {{--                                            </button>--}}
                                    {{--                                            <!--begin::Menu 3-->--}}
                                    {{--                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">--}}
                                    {{--                                                <!--begin::Heading-->--}}
                                    {{--                                                <div class="menu-item px-3">--}}
                                    {{--                                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!--end::Heading-->--}}
                                    {{--                                                <!--begin::Menu item-->--}}
                                    {{--                                                <div class="menu-item px-3">--}}
                                    {{--                                                    <a href="#" class="menu-link px-3">Create Invoice</a>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!--end::Menu item-->--}}
                                    {{--                                                <!--begin::Menu item-->--}}
                                    {{--                                                <div class="menu-item px-3">--}}
                                    {{--                                                    <a href="#" class="menu-link flex-stack px-3">Create Payment--}}
                                    {{--                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!--end::Menu item-->--}}
                                    {{--                                                <!--begin::Menu item-->--}}
                                    {{--                                                <div class="menu-item px-3">--}}
                                    {{--                                                    <a href="#" class="menu-link px-3">Generate Bill</a>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!--end::Menu item-->--}}
                                    {{--                                                <!--begin::Menu item-->--}}
                                    {{--                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">--}}
                                    {{--                                                    <a href="#" class="menu-link px-3">--}}
                                    {{--                                                        <span class="menu-title">Subscription</span>--}}
                                    {{--                                                        <span class="menu-arrow"></span>--}}
                                    {{--                                                    </a>--}}
                                    {{--                                                    <!--begin::Menu sub-->--}}
                                    {{--                                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">--}}
                                    {{--                                                        <!--begin::Menu item-->--}}
                                    {{--                                                        <div class="menu-item px-3">--}}
                                    {{--                                                            <a href="#" class="menu-link px-3">Plans</a>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                        <!--end::Menu item-->--}}
                                    {{--                                                        <!--begin::Menu item-->--}}
                                    {{--                                                        <div class="menu-item px-3">--}}
                                    {{--                                                            <a href="#" class="menu-link px-3">Billing</a>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                        <!--end::Menu item-->--}}
                                    {{--                                                        <!--begin::Menu item-->--}}
                                    {{--                                                        <div class="menu-item px-3">--}}
                                    {{--                                                            <a href="#" class="menu-link px-3">Statements</a>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                        <!--end::Menu item-->--}}
                                    {{--                                                        <!--begin::Menu separator-->--}}
                                    {{--                                                        <div class="separator my-2"></div>--}}
                                    {{--                                                        <!--end::Menu separator-->--}}
                                    {{--                                                        <!--begin::Menu item-->--}}
                                    {{--                                                        <div class="menu-item px-3">--}}
                                    {{--                                                            <div class="menu-content px-3">--}}
                                    {{--                                                                <!--begin::Switch-->--}}
                                    {{--                                                                <label class="form-check form-switch form-check-custom form-check-solid">--}}
                                    {{--                                                                    <!--begin::Input-->--}}
                                    {{--                                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />--}}
                                    {{--                                                                    <!--end::Input-->--}}
                                    {{--                                                                    <!--end::Label-->--}}
                                    {{--                                                                    <span class="form-check-label text-muted fs-6">Recuring</span>--}}
                                    {{--                                                                    <!--end::Label-->--}}
                                    {{--                                                                </label>--}}
                                    {{--                                                                <!--end::Switch-->--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                        <!--end::Menu item-->--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                    <!--end::Menu sub-->--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!--end::Menu item-->--}}
                                    {{--                                                <!--begin::Menu item-->--}}
                                    {{--                                                <div class="menu-item px-3 my-1">--}}
                                    {{--                                                    <a href="#" class="menu-link px-3">Settings</a>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!--end::Menu item-->--}}
                                    {{--                                            </div>--}}
                                    {{--                                            <!--end::Menu 3-->--}}
                                    {{--                                        </div>--}}
                                    <!--end::Menu-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Head-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap justify-content-start">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <div
                                                    class="fs-4 fw-bolder">{{ date("d-M-Y", strtotime($folder->due_date)) }}</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-6 text-gray-400">Due Date</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="11" y="18" width="13"
                                                                              height="2" rx="1"
                                                                              transform="rotate(-90 11 18)"
                                                                              fill="black"/>
																		<path
                                                                            d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                                            fill="black"/>
																	</svg>
																</span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-4 fw-bolder" data-kt-countup="true"
                                                     data-kt-countup-value="5">0
                                                </div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-6 text-gray-400">Images</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-3 svg-icon-success me-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="13" y="6" width="13"
                                                                              height="2" rx="1"
                                                                              transform="rotate(90 13 6)" fill="black"/>
																		<path
                                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                            fill="black"/>
																	</svg>
																</span>
                                                <!--end::Svg Icon-->
                                                <div class="fs-4 fw-bolder" data-kt-countup="true"
                                                     data-kt-countup-value="15000" data-kt-countup-prefix="$">0
                                                </div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-6 text-gray-400">Budget Spent</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                    <!--begin::Users-->
                                    <div class="symbol-group symbol-hover mb-3">
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Alan Warden">
                                            <span
                                                class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Michael Eberon">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/150-12.jpg') }}"/>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Michelle Swanston">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/150-13.jpg') }}"/>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Francis Mitcham">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/150-5.jpg') }}"/>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Susan Redwood">
                                            <span
                                                class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Melody Macy">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/150-3.jpg') }}"/>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Perry Matthew">
                                            <span class="symbol-label bg-info text-inverse-info fw-bolder">P</span>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                             title="Barry Walter">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/150-7.jpg') }}"/>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::All users-->
                                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                           data-bs-target="#kt_modal_view_users">
                                            <span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bolder"
                                                  data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                  title="View more users">+42</span>
                                        </a>
                                        <!--end::All users-->
                                    </div>
                                    <!--end::Users-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Details-->
                        <div class="separator"></div>
                        <!--begin::Nav wrapper-->
                    {{--                        <div class="d-flex overflow-auto h-55px">--}}
                    {{--                            <!--begin::Nav links-->--}}
                    {{--                            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder flex-nowrap">--}}
                    {{--                                <!--begin::Nav item-->--}}
                    {{--                                <li class="nav-item">--}}
                    {{--                                    <a class="nav-link text-active-primary me-6" href="../../demo1/dist/pages/projects/project.html">Overview</a>--}}
                    {{--                                </li>--}}
                    {{--                                <!--end::Nav item-->--}}
                    {{--                                <!--begin::Nav item-->--}}
                    {{--                                <li class="nav-item">--}}
                    {{--                                    <a class="nav-link text-active-primary me-6" href="../../demo1/dist/pages/projects/targets.html">Targets</a>--}}
                    {{--                                </li>--}}
                    {{--                                <!--end::Nav item-->--}}
                    {{--                                <!--begin::Nav item-->--}}
                    {{--                                <li class="nav-item">--}}
                    {{--                                    <a class="nav-link text-active-primary me-6" href="../../demo1/dist/pages/projects/budget.html">Budget</a>--}}
                    {{--                                </li>--}}
                    {{--                                <!--end::Nav item-->--}}
                    {{--                                <!--begin::Nav item-->--}}
                    {{--                                <li class="nav-item">--}}
                    {{--                                    <a class="nav-link text-active-primary me-6 active" href="../../demo1/dist/pages/projects/users.html">Users</a>--}}
                    {{--                                </li>--}}
                    {{--                                <!--end::Nav item-->--}}
                    {{--                                <!--begin::Nav item-->--}}
                    {{--                                <li class="nav-item">--}}
                    {{--                                    <a class="nav-link text-active-primary me-6" href="../../demo1/dist/pages/projects/files.html">Files</a>--}}
                    {{--                                </li>--}}
                    {{--                                <!--end::Nav item-->--}}
                    {{--                                <!--begin::Nav item-->--}}
                    {{--                                <li class="nav-item">--}}
                    {{--                                    <a class="nav-link text-active-primary me-6" href="../../demo1/dist/pages/projects/activity.html">Activity</a>--}}
                    {{--                                </li>--}}
                    {{--                                <!--end::Nav item-->--}}
                    {{--                                <!--begin::Nav item-->--}}
                    {{--                                <li class="nav-item">--}}
                    {{--                                    <a class="nav-link text-active-primary me-6" href="../../demo1/dist/pages/projects/settings.html">Settings</a>--}}
                    {{--                                </li>--}}
                    {{--                                <!--end::Nav item-->--}}
                    {{--                            </ul>--}}
                    {{--                            <!--end::Nav links-->--}}
                    {{--                        </div>--}}
                    <!--end::Nav wrapper-->
                    </div>
                </div>
                <!--end::Navbar-->
                <!--begin::Modals-->
                <!--begin::Modal - View Users-->
                <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog mw-650px">
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
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                                  rx="1" transform="rotate(-45 6 17.3137)"
                                                                  fill="black"/>
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
                            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                <!--begin::Heading-->
                                <div class="text-center mb-13">
                                    <!--begin::Title-->
                                    <h1 class="mb-3">Browse Users</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-bold fs-5">If you need more info, please check out our
                                        <a href="#" class="link-primary fw-bolder">Users Directory</a>.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Users-->
                                <div class="mb-15">
                                    <!--begin::List-->
                                    <div class="mh-375px scroll-y me-n7 pe-7">
                                        <!--begin::User-->
                                        <div
                                            class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-1.jpg"/>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                       class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma
                                                        Smith
                                                        <span
                                                            class="badge badge-light fs-8 fw-bold ms-2">Art Director</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div
                                            class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span
                                                        class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                       class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Melody
                                                        Macy
                                                        <span class="badge badge-light fs-8 fw-bold ms-2">Marketing Analytic</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">melody@altbox.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$50,500</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div
                                            class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-26.jpg"/>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                       class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Max
                                                        Smith
                                                        <span class="badge badge-light fs-8 fw-bold ms-2">Software Enginer</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">max@kt.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$75,900</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div
                                            class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-4.jpg"/>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                       class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Sean
                                                        Bean
                                                        <span
                                                            class="badge badge-light fs-8 fw-bold ms-2">Web Developer</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">sean@dellito.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$10,500</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div
                                            class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-15.jpg"/>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                       class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Brian
                                                        Cox
                                                        <span
                                                            class="badge badge-light fs-8 fw-bold ms-2">UI/UX Designer</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">brian@exchange.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$20,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div
                                            class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span
                                                        class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                       class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Mikaela
                                                        Collins
                                                        <span class="badge badge-light fs-8 fw-bold ms-2">Head Of Marketing</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$9,300</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div
                                            class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-8.jpg"/>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                       class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Francis
                                                        Mitcham
                                                        <span class="badge badge-light fs-8 fw-bold ms-2">Software Arcitect</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$15,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div
                                            class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span
                                                        class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                       class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Olivia
                                                        Wild
                                                        <span
                                                            class="badge badge-light fs-8 fw-bold ms-2">System Admin</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$23,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div
                                            class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span
                                                        class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                       class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Neil
                                                        Owen
                                                        <span class="badge badge-light fs-8 fw-bold ms-2">Account Manager</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$45,800</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div
                                            class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-6.jpg"/>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                       class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Dan
                                                        Wilson
                                                        <span
                                                            class="badge badge-light fs-8 fw-bold ms-2">Web Desinger</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">dam@consilting.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$90,500</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div
                                            class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span
                                                        class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                       class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Emma
                                                        Bold
                                                        <span class="badge badge-light fs-8 fw-bold ms-2">Corporate Finance</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">emma@intenso.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$5,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div
                                            class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/150-7.jpg"/>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                       class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Ana
                                                        Crown
                                                        <span class="badge badge-light fs-8 fw-bold ms-2">Customer Relationship</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$70,000</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::User-->
                                        <div class="d-flex flex-stack py-5">
                                            <!--begin::Details-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <!--begin::Name-->
                                                    <a href="#"
                                                       class="d-flex align-items-center fs-5 fw-bolder text-dark text-hover-primary">Robert
                                                        Doe
                                                        <span class="badge badge-light fs-8 fw-bold ms-2">Marketing Executive</span></a>
                                                    <!--end::Name-->
                                                    <!--begin::Email-->
                                                    <div class="fw-bold text-muted">robert@benko.com</div>
                                                    <!--end::Email-->
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Details-->
                                            <!--begin::Stats-->
                                            <div class="d-flex">
                                                <!--begin::Sales-->
                                                <div class="text-end">
                                                    <div class="fs-5 fw-bolder text-dark">$45,500</div>
                                                    <div class="fs-7 text-muted">Sales</div>
                                                </div>
                                                <!--end::Sales-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::List-->
                                </div>
                                <!--end::Users-->
                                <!--begin::Notice-->
                                <div class="d-flex justify-content-between">
                                    <!--begin::Label-->
                                    <div class="fw-bold">
                                        <label class="fs-6">Adding Users by Team Members</label>
                                        <div class="fs-7 text-muted">If you need more info, please check budget
                                            planning
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" checked="checked"/>
                                        <span class="form-check-label fw-bold text-muted">Allowed</span>
                                    </label>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - View Users-->
                <!--begin::Modal - Users Search-->
                <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
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
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                                  rx="1" transform="rotate(-45 6 17.3137)"
                                                                  fill="black"/>
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
                            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                <!--begin::Content-->
                                <div class="text-center mb-13">
                                    <h1 class="mb-3">Search Users</h1>
                                    <div class="text-muted fw-bold fs-5">Invite Collaborators To Your Project</div>
                                </div>
                                <!--end::Content-->
                                <!--begin::Search-->
                                <div id="kt_modal_users_search_handler" data-kt-search-keypress="true"
                                     data-kt-search-min-length="2" data-kt-search-enter="enter"
                                     data-kt-search-layout="inline">
                                    <!--begin::Form-->
                                    <form data-kt-search-element="form" class="w-100 position-relative mb-5"
                                          autocomplete="off">
                                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                                        <input type="hidden"/>
                                        <!--end::Hidden input-->
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span
                                            class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="17.0365" y="15.1223"
                                                                      width="8.15546" height="2" rx="1"
                                                                      transform="rotate(45 17.0365 15.1223)"
                                                                      fill="black"/>
																<path
                                                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                                    fill="black"/>
															</svg>
														</span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                               name="search" value=""
                                               placeholder="Search by username, full name or email..."
                                               data-kt-search-element="input"/>
                                        <!--end::Input-->
                                        <!--begin::Spinner-->
                                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                              data-kt-search-element="spinner">
															<span
                                                                class="spinner-border h-15px w-15px align-middle text-muted"></span>
														</span>
                                        <!--end::Spinner-->
                                        <!--begin::Reset-->
                                        <span
                                            class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                            data-kt-search-element="clear">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                          height="2" rx="1"
                                                                          transform="rotate(-45 6 17.3137)"
                                                                          fill="black"/>
																	<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                          transform="rotate(45 7.41422 6)"
                                                                          fill="black"/>
																</svg>
															</span>
                                            <!--end::Svg Icon-->
														</span>
                                        <!--end::Reset-->
                                    </form>
                                    <!--end::Form-->
                                    <!--begin::Wrapper-->
                                    <div class="py-5">
                                        <!--begin::Suggestions-->
                                        <div data-kt-search-element="suggestions">
                                            <!--begin::Heading-->
                                            <h3 class="fw-bold mb-5">Recently searched:</h3>
                                            <!--end::Heading-->
                                            <!--begin::Users-->
                                            <div class="mh-375px scroll-y me-n7 pe-7">
                                                <!--begin::User-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <img alt="Pic" src="assets/media/avatars/150-1.jpg"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                                        <span class="badge badge-light">Art Director</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <span
                                                            class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                                        <span class="badge badge-light">Marketing Analytic</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <img alt="Pic" src="assets/media/avatars/150-26.jpg"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                                        <span class="badge badge-light">Software Enginer</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <img alt="Pic" src="assets/media/avatars/150-4.jpg"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                                        <span class="badge badge-light">Web Developer</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::User-->
                                                <!--begin::User-->
                                                <a href="#"
                                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px symbol-circle me-5">
                                                        <img alt="Pic" src="assets/media/avatars/150-15.jpg"/>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Info-->
                                                    <div class="fw-bold">
                                                        <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                                        <span class="badge badge-light">UI/UX Designer</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </a>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Users-->
                                        </div>
                                        <!--end::Suggestions-->
                                        <!--begin::Results(add d-none to below element to hide the users list by default)-->
                                        <div data-kt-search-element="results" class="d-none">
                                            <!--begin::Users-->
                                            <div class="mh-375px scroll-y me-n7 pe-7">
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="0">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='0']" value="0"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                                Smith</a>
                                                            <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="1">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='1']" value="1"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
                                                                Macy</a>
                                                            <div class="fw-bold text-muted">melody@altbox.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1" selected="selected">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="2">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='2']" value="2"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
                                                                Smith</a>
                                                            <div class="fw-bold text-muted">max@kt.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="3">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='3']" value="3"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-4.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
                                                                Bean</a>
                                                            <div class="fw-bold text-muted">sean@dellito.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="4">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='4']" value="4"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
                                                                Cox</a>
                                                            <div class="fw-bold text-muted">brian@exchange.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="5">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='5']" value="5"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
                                                                Collins</a>
                                                            <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="6">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='6']" value="6"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-8.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
                                                                Mitcham</a>
                                                            <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="7">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='7']" value="7"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
                                                                Wild</a>
                                                            <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="8">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='8']" value="8"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
                                                                Owen</a>
                                                            <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1" selected="selected">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="9">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='9']" value="9"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-6.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
                                                                Wilson</a>
                                                            <div class="fw-bold text-muted">dam@consilting.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="10">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='10']"
                                                                   value="10"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                                Bold</a>
                                                            <div class="fw-bold text-muted">emma@intenso.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="11">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='11']"
                                                                   value="11"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-7.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
                                                                Crown</a>
                                                            <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1" selected="selected">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="12">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='12']"
                                                                   value="12"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-info text-info fw-bold">A</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
                                                                Doe</a>
                                                            <div class="fw-bold text-muted">robert@benko.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="13">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='13']"
                                                                   value="13"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-17.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
                                                                Miller</a>
                                                            <div class="fw-bold text-muted">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="14">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='14']"
                                                                   value="14"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-success text-success fw-bold">L</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
                                                                Kunic</a>
                                                            <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected="selected">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="15">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='15']"
                                                                   value="15"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-10.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
                                                                Wilder</a>
                                                            <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1" selected="selected">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Separator-->
                                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                <!--end::Separator-->
                                                <!--begin::User-->
                                                <div class="rounded d-flex flex-stack bg-active-lighten p-4"
                                                     data-user-id="16">
                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Checkbox-->
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox" name="users"
                                                                   data-kt-check="true"
                                                                   data-kt-check-target="[data-user-id='16']"
                                                                   value="16"/>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-17.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Details-->
                                                        <div class="ms-5">
                                                            <a href="#"
                                                               class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
                                                                Miller</a>
                                                            <div class="fw-bold text-muted">miller@mapple.com</div>
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Details-->
                                                    <!--begin::Access menu-->
                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm"
                                                                data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected="selected">Can Edit</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Access menu-->
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Users-->
                                            <!--begin::Actions-->
                                            <div class="d-flex flex-center mt-15">
                                                <button type="reset" id="kt_modal_users_search_reset"
                                                        data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel
                                                </button>
                                                <button type="submit" id="kt_modal_users_search_submit"
                                                        class="btn btn-primary">Add Selected Users
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Results-->
                                        <!--begin::Empty-->
                                        <div data-kt-search-element="empty" class="text-center d-none">
                                            <!--begin::Message-->
                                            <div class="fw-bold py-10">
                                                <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                                <div class="text-muted fs-6">Try to search by username, full name or
                                                    email...
                                                </div>
                                            </div>
                                            <!--end::Message-->
                                            <!--begin::Illustration-->
                                            <div class="text-center px-5">
                                                <img src="assets/media/illustrations/sketchy-1/1.png" alt=""
                                                     class="w-100 h-200px h-sm-325px"/>
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                        <!--end::Empty-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - Users Search-->
                <!--begin::Modal - New Target-->
                <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content rounded">
                            <!--begin::Modal header-->
                            <div class="modal-header pb-0 border-0 justify-content-end">
                                <!--begin::Close-->
                                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                                  rx="1" transform="rotate(-45 6 17.3137)"
                                                                  fill="black"/>
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
                            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                <!--begin:Form-->
                                <form id="kt_modal_new_target_form" class="form" action="#">
                                    <!--begin::Heading-->
                                    <div class="mb-13 text-center">
                                        <!--begin::Title-->
                                        <h1 class="mb-3">Set First Target</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-bold fs-5">If you need more info, please check
                                            <a href="#" class="fw-bolder link-primary">Project Guidelines</a>.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">
                                            Cancel
                                        </button>
                                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
															<span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end:Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - New Target-->
                <!--end::Modals-->
                <!--begin::Toolbar-->
                <div class="d-flex flex-wrap flex-stack pb-7">
                    <!--begin::Title-->
                    <div class="d-flex flex-wrap align-items-center my-1">
                        <h3 class="fw-bolder me-5 my-1">Images ({{ count($images) }})</h3>
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-3 position-absolute ms-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                          height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                          fill="black"/>
													<path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="black"/>
												</svg>
											</span>
                            <!--end::Svg Icon-->
                            <input type="text" id="kt_filter_search"
                                   class="form-control form-control-white form-control-sm w-150px ps-9"
                                   placeholder="Search"/>
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Title-->
                    <!--begin::Controls-->
                    <div class="d-flex flex-wrap my-1">
                        <!--begin::Tab nav-->
                        <ul class="nav nav-pills me-6 mb-2 mb-sm-0">
                            <li class="nav-item m-0">
                                <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active"
                                   data-bs-toggle="tab" href="#kt_project_users_card_pane">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                    <span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                             height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1"
                                                                      fill="#000000"/>
																<rect x="14" y="5" width="5" height="5" rx="1"
                                                                      fill="#000000" opacity="0.3"/>
																<rect x="5" y="14" width="5" height="5" rx="1"
                                                                      fill="#000000" opacity="0.3"/>
																<rect x="14" y="14" width="5" height="5" rx="1"
                                                                      fill="#000000" opacity="0.3"/>
															</g>
														</svg>
													</span>
                                    <!--end::Svg Icon-->
                                </a>
                            </li>
                            <li class="nav-item m-0">
                                <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary"
                                   data-bs-toggle="tab" href="#kt_project_users_table_pane">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24" fill="none">
															<path
                                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                                fill="black"/>
															<path opacity="0.3"
                                                                  d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                                  fill="black"/>
														</svg>
													</span>
                                    <!--end::Svg Icon-->
                                </a>
                            </li>
                        </ul>
                        <!--end::Tab nav-->
                        <!--begin::Actions-->
                        <div class="d-flex my-0">
                            <!--begin::Select-->
                            <select name="status" data-control="select2" data-hide-search="true"
                                    data-placeholder="Filter"
                                    class="form-select form-select-white form-select-sm w-150px me-5">
                                <option value="1">Recently Updated</option>
                                <option value="2">Last Month</option>
                                <option value="3">Last Quarter</option>
                                <option value="4">Last Year</option>
                            </select>
                            <!--end::Select-->
                            <!--begin::Select-->
                            <select name="status" data-control="select2" data-hide-search="true"
                                    data-placeholder="Export"
                                    class="form-select form-select-white form-select-sm w-100px">
                                <option value="1">Excel</option>
                                <option value="1">PDF</option>
                                <option value="2">Print</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Controls-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Tab Content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div id="kt_project_users_card_pane" class="tab-pane fade show active">
                        <!--begin::Row-->
                        <div id="kt_content_container" class="container-xxl">
                            <!--begin::About card-->
                            <div class="card">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Team-->
                                    <div class="">
                                        <!--begin::Wrapper-->
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 gy-10">
                                            <!--begin::Item-->
                                            <div class="col text-center mb-9">
                                                <!--begin::Photo-->
                                                <div
                                                    class="octagon mx-auto mb-2 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center"
                                                    style="background-image:url('{{ asset('assets/media/avatars/150-2.jpg') }}')"></div>
                                                <!--end::Photo-->
                                                <!--begin::Person-->
                                                <div class="mb-0">
                                                    <!--begin::Name-->
                                                    <a href="../../demo1/dist/pages/profile/projects.html"
                                                       class="text-dark fw-bolder text-hover-primary fs-3">Paul
                                                        Miles</a>
                                                    <!--end::Name-->
                                                    <!--begin::Position-->
                                                    <div class="text-muted fs-6 fw-bold">Development Lead</div>
                                                    <!--begin::Position-->
                                                </div>
                                                <!--end::Person-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Team-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::About card-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Pagination-->
                        <div class="d-flex flex-stack flex-wrap pt-10">
                            <div class="fs-6 fw-bold text-gray-700">Showing 1 to 10 of 50 entries</div>
                            <!--begin::Pages-->
                            <ul class="pagination">
                                <li class="page-item previous">
                                    <a href="#" class="page-link">
                                        <i class="previous"></i>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">6</a>
                                </li>
                                <li class="page-item next">
                                    <a href="#" class="page-link">
                                        <i class="next"></i>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Pages-->
                        </div>
                        <!--end::Pagination-->
                    </div>
                    <!--end::Tab pane-->
                    <!--begin::Tab pane-->
                    <div id="kt_project_users_table_pane" class="tab-pane fade">
                        <!--begin::Card-->
                        <div class="card card-flush">
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table id="kt_project_users_table"
                                           class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                                        <!--begin::Head-->
                                        <thead class="fs-7 text-gray-400 text-uppercase">
                                        <tr>
                                            <th class="min-w-250px">Manager</th>
                                            <th class="min-w-150px">Date</th>
                                            <th class="min-w-90px">Amount</th>
                                            <th class="min-w-90px">Status</th>
                                            <th class="min-w-50px text-end">Details</th>
                                        </tr>
                                        </thead>
                                        <!--end::Head-->
                                        <!--begin::Body-->
                                        <tbody class="fs-6">
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Emma
                                                            Smith</a>
                                                        <div class="fw-bold fs-6 text-gray-400">e.smith@kpmg.com.au
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jul 25, 2021</td>
                                            <td>$824.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Melody
                                                            Macy</a>
                                                        <div class="fw-bold fs-6 text-gray-400">melody@altbox.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Mar 10, 2021</td>
                                            <td>$449.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Max
                                                            Smith</a>
                                                        <div class="fw-bold fs-6 text-gray-400">max@kt.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Feb 21, 2021</td>
                                            <td>$811.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-4.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Sean
                                                            Bean</a>
                                                        <div class="fw-bold fs-6 text-gray-400">sean@dellito.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Sep 22, 2021</td>
                                            <td>$973.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Brian
                                                            Cox</a>
                                                        <div class="fw-bold fs-6 text-gray-400">brian@exchange.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jun 24, 2021</td>
                                            <td>$612.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Mikaela
                                                            Collins</a>
                                                        <div class="fw-bold fs-6 text-gray-400">mikaela@pexcom.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>May 05, 2021</td>
                                            <td>$581.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-8.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Francis
                                                            Mitcham</a>
                                                        <div class="fw-bold fs-6 text-gray-400">f.mitcham@kpmg.com.au
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Nov 10, 2021</td>
                                            <td>$461.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Olivia
                                                            Wild</a>
                                                        <div class="fw-bold fs-6 text-gray-400">olivia@corpmail.com
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Nov 10, 2021</td>
                                            <td>$874.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Neil
                                                            Owen</a>
                                                        <div class="fw-bold fs-6 text-gray-400">owen.neil@gmail.com
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Dec 20, 2021</td>
                                            <td>$939.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-6.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Dan
                                                            Wilson</a>
                                                        <div class="fw-bold fs-6 text-gray-400">dam@consilting.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Apr 15, 2021</td>
                                            <td>$980.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Emma
                                                            Bold</a>
                                                        <div class="fw-bold fs-6 text-gray-400">emma@intenso.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jun 20, 2021</td>
                                            <td>$667.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-7.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Ana
                                                            Crown</a>
                                                        <div class="fw-bold fs-6 text-gray-400">ana.cf@limtel.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jun 24, 2021</td>
                                            <td>$707.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-info text-info fw-bold">A</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Robert
                                                            Doe</a>
                                                        <div class="fw-bold fs-6 text-gray-400">robert@benko.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Sep 22, 2021</td>
                                            <td>$612.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-17.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">John
                                                            Miller</a>
                                                        <div class="fw-bold fs-6 text-gray-400">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Oct 25, 2021</td>
                                            <td>$504.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-success text-success fw-bold">L</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Lucy
                                                            Kunic</a>
                                                        <div class="fw-bold fs-6 text-gray-400">lucy.m@fentech.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jul 25, 2021</td>
                                            <td>$444.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-10.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Ethan
                                                            Wilder</a>
                                                        <div class="fw-bold fs-6 text-gray-400">ethan@loop.com.au</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jul 25, 2021</td>
                                            <td>$735.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Olivia
                                                            Wild</a>
                                                        <div class="fw-bold fs-6 text-gray-400">olivia@corpmail.com
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Dec 20, 2021</td>
                                            <td>$449.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-7.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Ana
                                                            Crown</a>
                                                        <div class="fw-bold fs-6 text-gray-400">ana.cf@limtel.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Dec 20, 2021</td>
                                            <td>$768.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Brian
                                                            Cox</a>
                                                        <div class="fw-bold fs-6 text-gray-400">brian@exchange.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Aug 19, 2021</td>
                                            <td>$919.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-8.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Francis
                                                            Mitcham</a>
                                                        <div class="fw-bold fs-6 text-gray-400">f.mitcham@kpmg.com.au
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jul 25, 2021</td>
                                            <td>$516.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Brian
                                                            Cox</a>
                                                        <div class="fw-bold fs-6 text-gray-400">brian@exchange.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jun 24, 2021</td>
                                            <td>$942.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Olivia
                                                            Wild</a>
                                                        <div class="fw-bold fs-6 text-gray-400">olivia@corpmail.com
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Apr 15, 2021</td>
                                            <td>$713.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Melody
                                                            Macy</a>
                                                        <div class="fw-bold fs-6 text-gray-400">melody@altbox.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jul 25, 2021</td>
                                            <td>$845.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-17.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">John
                                                            Miller</a>
                                                        <div class="fw-bold fs-6 text-gray-400">miller@mapple.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jun 24, 2021</td>
                                            <td>$404.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-6.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Dan
                                                            Wilson</a>
                                                        <div class="fw-bold fs-6 text-gray-400">dam@consilting.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jun 20, 2021</td>
                                            <td>$580.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span
                                                                class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Online-->
                                                        <div
                                                            class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                        <!--end::Online-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Melody
                                                            Macy</a>
                                                        <div class="fw-bold fs-6 text-gray-400">melody@altbox.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Feb 21, 2021</td>
                                            <td>$706.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Max
                                                            Smith</a>
                                                        <div class="fw-bold fs-6 text-gray-400">max@kt.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Jul 25, 2021</td>
                                            <td>$708.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Emma
                                                            Smith</a>
                                                        <div class="fw-bold fs-6 text-gray-400">e.smith@kpmg.com.au
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Feb 21, 2021</td>
                                            <td>$646.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Max
                                                            Smith</a>
                                                        <div class="fw-bold fs-6 text-gray-400">max@kt.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Oct 25, 2021</td>
                                            <td>$661.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::User-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Wrapper-->
                                                    <div class="me-5 position-relative">
                                                        <!--begin::Avatar-->
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/150-4.jpg"/>
                                                        </div>
                                                        <!--end::Avatar-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="" class="mb-1 text-gray-800 text-hover-primary">Sean
                                                            Bean</a>
                                                        <div class="fw-bold fs-6 text-gray-400">sean@dellito.com</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::User-->
                                            </td>
                                            <td>Apr 15, 2021</td>
                                            <td>$897.00</td>
                                            <td>
                                                <span
                                                    class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-light btn-sm">View</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Tab pane-->
                </div>
                <!--end::Tab Content-->

{{--         add user modal       --}}
            <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header" id="kt_modal_add_user_header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">Add User</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																		<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
																	</svg>
																</span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form id="kt_modal_add_user_form" class="form" action="#">
                                <!--begin::Scroll-->
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="d-block fw-bold fs-6 mb-5">Avatar</label>
                                        <!--end::Label-->
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/150-1.jpg);"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																				<i class="bi bi-x fs-2"></i>
																			</span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																				<i class="bi bi-x fs-2"></i>
																			</span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-bold fs-6 mb-2">Full Name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="Emma Smith" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-bold fs-6 mb-2">Email</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="e.smith@kpmg.com.au" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-bold fs-6 mb-5">Role</label>
                                        <!--end::Label-->
                                        <!--begin::Roles-->
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                    <div class="fw-bolder text-gray-800">Administrator</div>
                                                    <div class="text-gray-600">Best for business owners and company administrators</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                    <div class="fw-bolder text-gray-800">Developer</div>
                                                    <div class="text-gray-600">Best for developers or people primarily using the API</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                    <div class="fw-bolder text-gray-800">Analyst</div>
                                                    <div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                    <div class="fw-bolder text-gray-800">Support</div>
                                                    <div class="text-gray-600">Best for employees who regularly refund payments and respond to disputes</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                    <div class="fw-bolder text-gray-800">Trial</div>
                                                    <div class="text-gray-600">Best for people who need to preview content data, but don't need to make any updates</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <!--end::Roles-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Scroll-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
{{--                end add user modal--}}

            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection

@section('scripts')

@endsection
