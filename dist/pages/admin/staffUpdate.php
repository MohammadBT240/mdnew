<?php
include("assets/php/connection.php");

$id = $_GET['id'];

$sql = "SELECT * FROM registration WHERE id = $id";
$result = mysqli_query($con, $sql);
$row = (mysqli_fetch_assoc($result));
$dispStaffId = $row['staff_id'];
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
                        Staff Registration Update
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
               </div>
               <!--end::Toolbar-->
            </div>
         </div>
         <!--end::Subheader-->

         <!--begin::Entry-->
         <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
               <div class="card card-custom">
                  <div class="card-body p-0">
                     <!--begin: Wizard-->
                     <div class="wizard wizard-2" id="kt_wizard_v2" data-wizard-state="step-first" data-wizard-clickable="true">
                        <!--begin: Wizard Nav-->
                        <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                           <!--begin::Wizard Step 1 Nav-->
                           <div class="wizard-steps">
                              <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                 <div class="wizard-wrapper">
                                    <div class="wizard-icon">
                                       <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                             </g>
                                          </svg><!--end::Svg Icon--></span>
                                    </div>
                                    <div class="wizard-label">
                                       <h3 class="wizard-title">Account Settings</h3>
                                       <div class="wizard-desc">
                                          Setup Account Details
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!--end::Wizard Step 1 Nav-->

                              <!--begin::Wizard Step 6 Nav-->
                              <div class="wizard-step" data-wizard-type="step">
                                 <div class="wizard-wrapper">
                                    <div class="wizard-icon">
                                       <span class="svg-icon svg-icon-2x"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Like.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z" fill="#000000" />
                                                <rect fill="#000000" opacity="0.3" x="2" y="9" width="5" height="11" rx="1" />
                                             </g>
                                          </svg><!--end::Svg Icon--></span>
                                    </div>
                                    <div class="wizard-label">
                                       <h3 class="wizard-title">Completed!</h3>
                                       <div class="wizard-desc">Review and Submit</div>
                                    </div>
                                 </div>
                              </div>
                              <!--end::Wizard Step 6 Nav-->
                           </div>
                        </div>
                        <!--end: Wizard Nav-->

                        <!--begin: Wizard Body-->
                        <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                           <!--begin: Wizard Form-->
                           <div class="row">
                              <div class="offset-xxl-2 col-xxl-8">
                                 <form class="form" action="assets/php/conn.php?id=<?php echo $id; ?>" method="post" id="kt_form" enctype="multipart/form-data">
                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                       <h4 class="mb-10 font-weight-bold text-dark">
                                          Enter Account Details
                                       </h4>
                                       <div class="row">
                                          <div class="form-group col-xl-6">
                                             <label class="col-lg-9 col-xl-6 col-form-label text-left">Photo</label>
                                             <div class="col-lg-9 col-xl-6">
                                                <div class="image-input image-input-outline" id="kt_image_1">
                                                   <div class="image-input-wrapper" style="background-image: url(assets/images/<?php echo $dispImg; ?>)"></div>

                                                   <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                      <i class="fa fa-pen icon-sm text-muted"></i>
                                                      <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" value="" />
                                                      <input type="hidden" name="profile_avatar_remove" />
                                                   </label>

                                                   <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                      <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                   </span>
                                                </div>
                                                <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                             </div>
                                          </div>
                                          <div class="col-xl-6">

                                             <div class="row-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                   <label>Staff ID</label>
                                                   <input type="text" class="form-control form-control-solid form-control-lg" name="staff_id" placeholder="ID" value="<?php echo $dispStaffId; ?>" />
                                                   <span class="form-text text-muted">Please enter staff ID.</span>
                                                </div>
                                                <!--end::Input-->
                                             </div>
                                             <div class="row-xl-4">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                   <label>First Name</label>
                                                   <input type="text" class="form-control form-control-solid form-control-lg" name="first_name" placeholder="First Name" value="<?php echo $dispFName; ?>" />
                                                   <span class="form-text text-muted">Please enter first name.</span>
                                                </div>
                                                <!--end::Input-->
                                             </div>
                                          </div>

                                       </div>
                                       <div class="row">
                                          <div class="col-xl-4">
                                             <!--begin::Input-->
                                             <div class="form-group">
                                                <label>Surname</label>
                                                <input type="tel" class="form-control form-control-solid form-control-lg" name="surname" placeholder="surname" value="<?php echo $dispSName; ?>" />
                                                <span class="form-text text-muted">Please enter surname.</span>
                                             </div>
                                             <!--end::Input-->
                                          </div>
                                          <div class="col-xl-4">
                                             <!--begin::Input-->
                                             <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="last_name" placeholder="Last Name" value="<?php echo $dispLName; ?>" />
                                                <span class="form-text text-muted">Please enter last name.</span>
                                             </div>
                                             <!--end::Input-->
                                          </div>
                                          <div class="col-xl-4">
                                             <!--begin::Input-->
                                             <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="email" placeholder="Email" value="<?php echo $dispEmail; ?>" data-control="select2" />
                                                <span class="form-text text-muted">Please enter your Email.</span>
                                             </div>
                                             <!--end::Input-->
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-xl-6">
                                             <!--begin::Input-->
                                             <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="number" class="form-control form-control-solid form-control-lg" name="phone_number" placeholder="+12345678" value="<?php echo $dispPNo; ?>" data-control="select2" />
                                                <span class="form-text text-muted">Please enter your Phone Number.</span>
                                             </div>
                                             <!--end::Input-->
                                          </div>
                                          <div class="col-xl-6">
                                             <!--begin::Input-->
                                             <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control form-control-solid form-control-lg" name="password" placeholder="password" value="" />
                                                <span class="form-text text-muted">Please enter password.</span>
                                             </div>
                                             <!--end::Input-->
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-xl-6">
                                             <!--begin::Select-->
                                             <div class="form-group">
                                                <label>Gender:</label>
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
                                             <!--end::Select-->
                                          </div>
                                          <div class="col-xl-6">
                                             <!--begin::Select-->
                                             <div class="form-group">
                                                <label>Account Type:</label>
                                                <select name="type" class="form-control form-control-solid form-control-lg">
                                                   <option value="<?php echo $dispType; ?>">
                                                   <?php echo $dispType; ?>
                                                   </option> 
                                                   <option value="Executive">
                                                      Executive
                                                   </option>
                                                   <option value="Admin" selected>
                                                      Admin
                                                   </option>
                                                </select>
                                             </div>
                                             <!--end::Select-->
                                          </div>
                                       </div>
                                    </div>
                                    <!--end: Wizard Step 1-->

                                    <!--begin: Wizard Step 6-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                       <!--begin::Section-->
                                       <h2 class="mb-10 font-weight-bold text-dark">
                                          Are You sure the details you provided are correct?
                                       </h2>
                                       <!-- <div class="separator separator-dashed my-5"></div> -->
                                       <!--end::Section-->
                                    </div>
                                    <!--end: Wizard Step 6-->

                                    <!--begin: Wizard Actions-->
                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                       <div class="mr-2">
                                          <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">
                                             Previous
                                          </button>
                                       </div>
                                       <div>
                                          <button id="submitBtn" type="button" class="btn btn-success font-weight-bold text-uppercase px-9 py-4" data-toggle="modal" data-target="#exampleModal" data-wizard-type="action-submit">
                                             Submit
                                          </button>
                                          <button type="button" class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">
                                             Next
                                          </button>
                                       </div>
                                    </div>
                                    <!--end: Wizard Actions-->

                                    <!--begin::Modal-->
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
                                             </div>
                                             <div class="modal-body">
                                                Please Make Sure all the records provided are correct.
                                             </div>
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" name="submit" value="staffUpdate" class="btn btn-success" data-bs-dismiss="modal">Submit</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!--end::Modal-->
                                 </form>
                              </div>
                              <!--end: Wizard-->
                           </div>
                           <!--end: Wizard Form-->
                        </div>
                        <!--end: Wizard Body-->
                     </div>
                     <!--end: Wizard-->
                  </div>
               </div>
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
   <script src="assets/js/pages/custom/wizard/wizard-2.js"></script>

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