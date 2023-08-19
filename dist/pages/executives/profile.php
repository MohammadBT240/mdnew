<?php
include "assets/php/connection.php";

$id = $_SESSION['id'];
$sql = "SELECT * FROM registration WHERE id = $id";
$result = mysqli_query($con, $sql);
$row = (mysqli_fetch_assoc($result));

$dispId = $row['staff_id'];
$dispFName = $row['first_name'];
$dispSName = $row['surname'];
$dispLName = $row['last_name'];
$dispGender = $row['gender'];
$dispPNo = $row['phone_number'];
$dispEmail = $row['email'];
$dispType = $row['type'];
$dispImg = $row['profile_avatar'];
?>
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->

    <!--end::Header Mobile-->
    <!-- <div class="d-flex flex-column flex-root"> -->
    <!--begin::Page-->
    <!-- <div class="d-flex flex-row flex-column-fluid page"> -->
    <!--begin::Aside-->

    <!--end::Aside-->

    <!--begin::Wrapper-->
    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <!--begin::Header-->
        <!--end::Header-->

        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Subheader-->
            <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
                <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center flex-wrap mr-1">
                        <!--begin::Page Heading-->
                        <div class="d-flex align-items-baseline flex-wrap mr-5">
                            <!--begin::Page Title-->
                            <h5 class="text-dark font-weight-bold my-1 mr-5">
                                View Profile 
                            </h5>
                            <!--end::Page Title-->

                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a href="" class="text-muted"> IGS </a>
                                </li>
                                <!-- <li class="breadcrumb-item">
                           <a href="" class="text-muted">  </a>
                        </li> -->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page Heading-->
                    </div>
                    <!--end::Info-->

                    <!--begin::Toolbar-->
                    <div class="d-flex align-items-center">
                        <!--begin::Actions-->

                        <!--end::Actions-->

                        <!--begin::Daterange-->
                        <a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
                            <span class="text-muted font-size-base font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today</span>
                            <span class="text-primary font-size-base font-weight-bolder" id="kt_dashboard_daterangepicker_date">Aug 16</span>
                        </a>
                        <!--end::Daterange-->

                        <!--begin::Dropdowns-->

                        <!--end::Dropdowns-->
                    </div>
                    <!--end::Toolbar-->
                </div>
            </div>
            <!--end::Subheader-->

            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Profile Account Information-->
                    <div class="d-flex flex-row">
                        <!--begin::Aside-->
                        <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                            <!--begin::Profile Card-->
                            <div class="card card-custom card-stretch">
                                <!--begin::Body-->
                                <div class="card-body pt-4">
                                    <!--begin::Toolbar-->
                                    <!--end::Toolbar-->

                                    <!--begin::User-->
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                            <div class="symbol-label" style="background-image: url(assets/images/<?php echo  $dispImg; ?>)"></div>
                                            <i class="symbol-badge bg-success"></i>
                                        </div>
                                        <div>
                                            <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">
                                                <?php echo $dispFName . " " . $dispSName; ?>
                                            </a>
                                            <div class="text-muted">
                                                Application Developer
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Contact-->
                                    <div class="py-9">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="font-weight-bold mr-2">Email:</span>
                                            <a href="#" class="text-muted text-hover-primary"><?php echo $dispEmail; ?></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="font-weight-bold mr-2">Phone:</span>
                                            <span class="text-muted"><?php echo $dispPNo;  ?></span>
                                        </div>
                                    </div>
                                    <!--end::Contact-->

                                    <!--begin::Nav-->
                                    <div class="navi navi-bold navi-hover navi-active navi-link-rounded">

                                        <div class="navi-item mb-2">
                                            <a href="#" class="navi-link py-4 active">
                                                <span class="navi-icon mr-2">
                                                    <span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                        </svg><!--end::Svg Icon--></span> </span>
                                                <span class="navi-text font-size-lg">
                                                    Personal Information
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Nav-->
                                    <!--begin::Nav-->
                                    <!-- <div class="navi navi-bold navi-hover navi-active navi-link-rounded" data-toggle="modal" data-target="#request">

                                        <div class="navi-item mb-2">
                                            <a href="#" class="navi-link py-4 active">
                                                <span class="navi-text font-size-lg" style="text-align:center">
                                                    Request update
                                                </span>
                                            </a>
                                        </div>
                                    </div> -->
                                    <!--end::Nav-->


                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Profile Card-->
                        </div>
                        <!--end::Aside-->

                        <!--begin::Content-->
                        <div class="flex-row-fluid ml-lg-8">
                            <!--begin::Card-->
                            <div class="card card-custom">
                                <!--begin::Header-->
                                <div class="card-header py-3">
                                    <div class="card-title align-items-start flex-column">
                                        <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
                                        <span class="text-muted font-weight-bold font-size-sm mt-1">Change your account settings</span>
                                    </div>
                                    <div class="card-toolbar">
                                        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-success mr-2">Save Changes</button>
                                        <!-- <a href="epreprofileView.php" type="reset" class="btn btn-secondary">Cancel</a> -->
                                    </div>
                                </div>
                                <center>
                                    <div>
                                        <?php  ?>
                                    </div>
                                </center>
                                <!--end::Header-->
                                <!--begin::Form-->
                                <form class="form" method="POST" action="assets/php/conn.php" enctype="multipart/form-data">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h5 class="font-weight-bold mb-6">User Info</h5>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Photo</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="image-input image-input-outline" id="kt_image_1">
                                                    <div class="image-input-wrapper" style="background-image: url(assets/images/<?php echo  $dispImg; ?>)"></div>

                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="profile_avatar_remove" />
                                                    </label>

                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                </div>
                                                <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Staff ID</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input name="staff_id" readonly class="form-control form-control-lg form-control-solid" type="text" value="<?php echo $dispId ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">First Name</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input name="first_name" class="form-control form-control-lg form-control-solid" type="text" value="<?php echo $dispFName ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Surname</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input name="surname" class="form-control form-control-lg form-control-solid" type="text" value="<?php echo $dispSName ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Last Name</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input name="last_name" class="form-control form-control-lg form-control-solid" type="text" value="<?php echo $dispLName ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Gender</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <select name="gender" class="form-control form-control-solid form-control-lg">
                                                    <option value="<?php echo $dispGender; ?>" selected>
                                                        <?php echo $dispGender; ?>
                                                    </option>
                                                    <option value="Male">
                                                        Male
                                                    </option>
                                                    <option value="Female">
                                                        Female
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="password" class="form-control form-control-solid form-control-lg" name="password" placeholder="password" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group row"> 
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Account Type</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <select name="type" class="form-control form-control-solid form-control-lg">
                                                    <option value="<?php echo $dispType; ?>" selected>
                                                        <?php echo $dispType; ?>
                                                    </option>
                                                    <option value="Executive">
                                                        Executive
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Contact Phone</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                    <input name="phone_number" type="text" class="form-control form-control-lg form-control-solid" placeholder="Phone" value="<?php echo $dispPNo ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Email Address</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                    <input name="email" type="text" class="form-control form-control-lg form-control-solid" placeholder="Email" value="<?php echo $dispEmail ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                        <a href="#" class="btn btn-icon btn-light-danger pulse pulse-danger mr-5">
                                                            <i class="flaticon2-information"></i>
                                                            <span class="pulse-ring"></span>
                                                        </a>
                                                        Confirmation!!
                                                    </h1>
                                                    <!-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> -->
                                                </div>
                                                <div class="modal-body">
                                                    Please Make Sure all the records provided are correct.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                    <input type="hidden" name="staff_id" value="<?php echo $dispId; ?>">
                                                    <button type="submit" name="submit" value="profile" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Modal-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card-->

                            <!--begin::Modal-->
                            <form action="profileRequestConn.php" method="post">
                                <div class="modal fade" id="request" tabindex="1" aria-labelledby="requestModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="request">
                                                    <a href="#" class="btn btn-icon btn-light-danger pulse pulse-danger mr-5">
                                                        <i class="flaticon2-information"></i>
                                                        <span class="pulse-ring"></span>
                                                    </a>
                                                    Request Form
                                                </h1> <!-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> -->
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label class="col-form-label text-right col-lg-3 col-sm-3">Enter Your Request</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-9">
                                                        <textarea name="request" class="form-control" id="kt_autosize_1" rows="3"></textarea>
                                                        <span>NOTE: Request will be treated after 24 Hours</span>
                                                    </div>
                                                    <input type="hidden" name="req_id" value="<?php echo $dispId; ?>">
                                                    <input type="hidden" name="name" value="<?php echo $dispFName . ' ' . $dispSName; ?>">

                                                    <!-- <input type="hidden" name="module" value="Executive"> -->
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" name="submit" value="<?php echo $id; ?>" class="btn btn-success" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--end::Modal-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Profile Account Information-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
        <!--end::Content-->

        <!--begin::Footer-->
        <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
    <!-- </div> -->
    <!--end::Page-->
    <!-- </div> -->
    <!--end::Main-->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get("status");
            const message = urlParams.get("message");

            if (status === "Valid") {
                swal.fire({
                    text: message,
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary",
                    },
                }).then(function() {
                    KTUtil.scrollTop();
                });
            } else if (status === "Invalid") {
                swal.fire({
                    text: message,
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-light-primary",
                    },
                }).then(function() {
                    KTUtil.scrollTop();
                });
            }
        });
    </script>
</body>
<!--end::Body-->