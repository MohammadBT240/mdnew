<?php
include("assets/php/connection.php");

$applicant_id = $_GET['applicant_id'];

$sql = "SELECT * FROM applicants WHERE applicant_id = '$applicant_id'";
$result = mysqli_query($con, $sql);
$row = (mysqli_fetch_assoc($result));

$id = $row['id'];
$dispId = $row['applicant_id'];
$dispTitle = $row['title'];
$dispFName = $row['first_name'];
$dispSName = $row['surname'];
$dispLName = $row['last_name'];
$dispGender = $row['gender'];
$dispDOB = $row['date_of_birth'];

$dispCountry = $row['country'];;
$dispState =  $row['state'];
$dispCity = $row['city'];
$dispWard = $row['ward'];
$dispPolling = $row['polling_unit'];
$dispRA = $row['residential_address'];
$dispA = $row['address'];
$dispPNo = $row['phone_number'];
$dispEmail = $row['email'];
$dispIdentification = $row['identification'];
$dispQual = $row['qualifications'];
$dispInstitution = $row['name_of_school'];
$dispCourse = $row['course'];
$dispOtherCourse = $row['other_course'];
$dispAwardDate = $row['date_of_award'];
$Pass = $row['password'];
$dispPass = password_verify($Pass, $Pass);
$dispCreditNo = $row['no_of_credits'];
$dispKinName = $row['name_of_kin'];
$dispKinRelation = $row['relationship_kin'];

$dispMarital = $row['marital_status'];
$dispPhotoId = $row['id_photo'];
$dispKinAddress = $row['kin_address'];
$dispKinPhone = $row['kin_phone'];
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
                        Applicants Registration Update
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
               <div class="card card-custom">
                  <div class="card-body p-0">
                     <!--begin::Wizard-->
                     <div class="wizard wizard-1" id="kt_wizard_v1" data-wizard-state="step-first" data-wizard-clickable="false">
                        <!--begin::Wizard Nav-->
                        <div class="wizard-nav border-bottom">
                           <div class="wizard-steps p-8 p-lg-10">
                              <!--begin::Wizard Step 1 Nav-->
                              <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                 <div class="wizard-label">
                                    <i class="wizard-icon flaticon-bus-stop"></i>
                                    <h3 class="wizard-title">Personal Details</h3>
                                 </div>
                                 <span class="svg-icon svg-icon-xl wizard-arrow"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                       <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <polygon points="0 0 24 0 24 24 0 24" />
                                          <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1" />
                                          <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                       </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                 </span>
                              </div>
                              <!--end::Wizard Step 1 Nav-->

                              <!--begin::Wizard Step 2 Nav-->
                              <div class="wizard-step" data-wizard-type="step">
                                 <div class="wizard-label">
                                    <i class="wizard-icon flaticon-globe"></i>
                                    <h3 class="wizard-title">Educational Details</h3>
                                 </div>
                                 <span class="svg-icon svg-icon-xl wizard-arrow"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                       <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <polygon points="0 0 24 0 24 24 0 24" />
                                          <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1" />
                                          <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                       </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                 </span>
                              </div>
                              <!--end::Wizard Step 2 Nav-->

                              <!--begin::Wizard Step 3 Nav-->
                              <div class="wizard-step" data-wizard-type="step">
                                 <div class="wizard-label">
                                    <i class="wizard-icon flaticon-list"></i>
                                    <h3 class="wizard-title">Next of kin</h3>
                                 </div>
                                 <span class="svg-icon svg-icon-xl wizard-arrow"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                       <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <polygon points="0 0 24 0 24 24 0 24" />
                                          <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1" />
                                          <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                       </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                 </span>
                              </div>
                              <!--end::Wizard Step 3 Nav-->

                              <!--begin::Wizard Step 4 Nav-->
                              <!--end::Wizard Step 4 Nav-->

                              <!--begin::Wizard Step 5 Nav-->
                              <div class="wizard-step" data-wizard-type="step">
                                 <div class="wizard-label">
                                    <i class="wizard-icon flaticon-responsive"></i>
                                    <h3 class="wizard-title">Submit</h3>
                                 </div>
                                 <span class="svg-icon svg-icon-xl wizard-arrow last"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                       <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                          <polygon points="0 0 24 0 24 24 0 24" />
                                          <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1" />
                                          <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                       </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                 </span>
                              </div>
                              <!--end::Wizard Step 5 Nav-->
                           </div>

                        </div>
                        <!--end::Wizard Nav-->

                        <!--begin::Wizard Body-->
                        <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                           <div class="col-xl-12 col-xxl-7">
                              <form action="assets/php/conn.php" method="post" class="form" id="kt_form" enctype="multipart/form-data">
                                 <!--begin::Wizard Step 1-->
                                 <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <h3 class="mb-10 font-weight-bold text-dark">Personal Details</h3>
                                    <center>
                                       <div>
                                          <?php  ?>
                                       </div>
                                    </center>

                                    <div class="row">
                                       <div class="col-xl-4">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>Applicant ID</label>
                                             <input type="text" readonly class="form-control form-control-solid form-control-lg" name="applicant_id" placeholder="id" value="<?php echo $dispId; ?>" data-control="select2" />
                                             <span class="form-text text-muted">Please enter the Applicant's ID.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                       <div class="col-xl-4">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>Title</label>
                                             <!-- <input type="text" class="form-control form-control-solid form-control-lg" name="" placeholder="Title" value="3000" /> -->
                                             <select name="title" class="form-control form-control-solid form-control-lg" data-control="select2">
                                                <option value="<?php echo $dispTitle; ?>"><?php echo $dispTitle; ?></option>
                                                <option value="Mr">Mr</option>
                                                <option value="Alh">Alhaji</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Dr">Dr</option>
                                                <option value="Prof">Prof</option>
                                                <option value="Madam">Madam</option>
                                                <option value="Lord">Lord</option>
                                                <option value="Lady">Lady</option>
                                                <option value="Miss">Miss</option>
                                             </select>
                                             <span class="form-text text-muted">Please select your title.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                       <div class="col-xl-4">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>First Name</label>
                                             <input type="text" class="form-control form-control-solid form-control-lg" name="first_name" placeholder="Firstname" value="<?php echo $dispFName; ?>" data-control="select2" />
                                             <span class="form-text text-muted">Please enter your Firstname.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>

                                    </div>
                                    <!--end::Input-->
                                    <div class="row">
                                       <div class="form-group col-xl-4">
                                          <label class="col-lg-9 col-xl-6 col-form-label text-left">Photo</label>
                                          <div class="col-lg-9 col-xl-6">
                                             <div class="image-input image-input-outline" id="kt_image_1">
                                                <div class="image-input-wrapper" style="background-image: url(assets/images/<?php echo $dispImg; ?>)"></div>

                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                   <i class="fa fa-pen icon-sm text-muted"></i>
                                                   <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" data-control="select2" />
                                                   <input type="hidden" name="profile_avatar_remove" />
                                                </label>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                   <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                                             </div>
                                             <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                          </div>
                                       </div>

                                       <div class="col-xl-4">
                                          <div class="form-group">
                                             <!--begin::Input-->
                                             <div class="form-group">
                                                <label>Surname</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="surname" placeholder="Surname" value="<?php echo $dispSName; ?>" data-control="select2" />
                                                <span class="form-text text-muted">Please enter your Surname.</span>
                                             </div>
                                             <!--end::Input-->
                                          </div>
                                          <div class="from-group">
                                             <!--begin::Select-->
                                             <div class="form-group">
                                                <label>Date Of Birth</label>
                                                <input type="date" class="form-control form-control-solid form-control-lg" name="date_of_birth" placeholder="Date of Birth" value="<?php echo $dispDOB; ?>" data-control="select2" />
                                                <span class="form-text text-muted">Please enter your Date of Birth.</span>
                                             </div>
                                             <!--end::Select-->
                                          </div>
                                       </div>

                                       <div class="col-xl-4">
                                          <div class="form-group">
                                             <!--begin::Input-->
                                             <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="last_name" placeholder="Last Name" value="<?php echo $dispLName; ?>" data-control="select2" />
                                                <span class="form-text text-muted">Please enter your Middle Name.</span>
                                             </div>
                                             <!--end::Input-->
                                          </div>
                                          <div class="form-group">
                                             <!--begin::Input-->
                                             <div class="form-group">
                                                <label>Gender</label>
                                                <!-- <input type="text" class="form-control form-control-solid form-control-lg" name="" placeholder="Title" value="3000" /> -->
                                                <select name="gender" class="form-control form-control-solid form-control-lg" data-control="select2">
                                                   <option value="<?php echo $dispGender; ?>"><?php echo $dispGender; ?></option>
                                                   <option value="Male">Male</option>
                                                   <option value="Female">Female</option>
                                                </select>
                                                <span class="form-text text-muted">Please select your Gender.</span>
                                             </div>
                                             <!--end::Input-->
                                          </div>
                                       </div>

                                    </div>
                                    <div class="row">
                                       <div class="col-lg-4">
                                          <label for="Country">Nationality:</label>
                                          <div class="form-group">
                                             <select type="text" name="country" id="country" class="form-control form-control-solid form-control-lg" data-control="select2">
                                                <option value="">Select Country</option>
                                                <option value="Nigeria" selected>Nigeria</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-4">
                                          <label for="Country">State of Origin:</label>
                                          <div class="form-group">
                                             <select type="text" name="state" id="state" class="form-control form-control-solid form-control-lg" data-control="select2">
                                                <option value="<?php echo $dispState; ?>" selected><?php echo $dispState; ?></option>
                                                <?php
                                                $conn = mysqli_connect('localhost', 'root', '', 'mdnew');
                                                $query = mysqli_query($conn, "SELECT * FROM states");
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                   <option value="<?php echo $row['state_name']; ?>"><?php echo $row['state_name']; ?> </option>
                                                <?php
                                                }
                                                ?>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-4">
                                          <label for="city">LGA:</label>
                                          <div class="form-group">
                                             <select name="city" id="city" class="form-control form-control-solid form-control-lg" data-control="select2">
                                                <option value="<?php echo $dispCity; ?>" selected><?php echo $dispCity; ?></option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <label for="Country">Ward:</label>
                                          <div class="form-group">
                                             <select type="text" name="ward" id="ward" class="form-control form-control-solid form-control-lg" data-control="select2">
                                                <option value="<?php echo $dispWard; ?>"><?php echo $dispWard; ?></option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-6">
                                          <label for="polling_unit">Polling Unit:</label>
                                          <div class="form-group">
                                             <select name="polling_unit" id="polling_unit" class="form-control form-control-solid form-control-lg" data-control="select2">
                                                <option value="<?php echo $dispPolling; ?>" selected><?php echo $dispPolling; ?></option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-xl-6">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>Permarnent Address</label>
                                             <!-- <div>Line 1</div> -->
                                             <input type="text" class="form-control form-control-solid form-control-lg" name="residential_address" placeholder="Address Line 1" value="<?php echo $dispRA; ?>" data-control="select2" />
                                             <span class="form-text text-muted">Please enter your Address.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                       <div class="col-xl-6">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label></label>
                                             <input type="text" class="form-control form-control-solid form-control-lg" name="address" placeholder="Address Line 2" value="<?php echo $dispA; ?>" />
                                             <span class="form-text text-muted">(Optional).</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                    </div>

                                    <!--end::Input-->
                                    <!--begin::Input-->
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
                                             <label>Email</label>
                                             <input type="text" class="form-control form-control-solid form-control-lg" name="email" placeholder="Email" value="<?php echo $dispEmail; ?>" data-control="select2" />
                                             <span class="form-text text-muted">Please enter your Email.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                    </div>
                                    <div class="row">
                                       <!--end::Input-->
                                       <div class="col-xl-4">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>Marital Status</label>
                                             <select type="text" name="marital_status" class="form-control form-control-solid form-control-lg" data-control="select2">
                                                <option value="<?php echo $dispMarital; ?>" selected><?php echo $dispMarital; ?></option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorced">Divorced</option>
                                             </select>
                                             <span class="form-text text-muted">Please select your Marital Status.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                       <div class="col-xl-4">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>Password</label>
                                             <input type="password" class="form-control form-control-solid form-control-lg" name="password" placeholder="********" value="" autocomplete="off" data-control="select2" />
                                             <span class="form-text text-muted">Please enter your Password.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                       <div class="col-xl-4">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>Confirm Password</label>
                                             <input type="password" class="form-control form-control-solid form-control-lg" name="cpassword" placeholder="" value="" autocomplete="off" />
                                             <span class="form-text text-muted">Please Confirm your Password.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-xl-6">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>Identification</label>
                                             <div class="form-group">
                                                <select type="text" name="identification" id="identification" class="form-control form-control-solid form-control-lg" data-control="select2">
                                                   <option value="<?php echo $dispIdentification; ?>" selected><?php echo $dispIdentification; ?></option>
                                                   <option value="Drivers Licence">Drivers Licence</option>
                                                   <option value="National ID">National ID</option>
                                                   <option value="Voters Card">Voters Card</option>
                                                </select>
                                             </div>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                       <div class="col-xl-6">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>Identification file</label>
                                             <div class="col-lg-9 col-xl-6">
                                                <div class="image-input" id="kt_image_2">
                                                   <div class="image-input-wrapper" style="background-image: url(assets/images/<?php echo $dispPhotoId; ?>)"></div>

                                                   <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                      <i class="fa fa-pen icon-sm text-muted"></i>
                                                      <input type="file" name="id_photo" accept=".png, .jpg, .jpeg" />
                                                      <input type="hidden" name="profile_avatar_remove" />
                                                   </label>

                                                   <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                      <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                   </span>
                                                </div>
                                                <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                             </div>
                                             <!-- <input type="file" class="form-control form-control-solid form-control-lg" name="id_photo" placeholder="" value="" autocomplete="off" />
                                             <span class="form-text text-muted">Please Make Sure its clear.</span> -->
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                       <!-- <div class="form-group col-xl-4">
                                          <label class="col-lg-9 col-xl-6 col-form-label text-left">ID Photo</label>
                                          <div class="col-lg-9 col-xl-6">
                                             <div class="image-input image-input-outline" id="kt_image_1">
                                                <div class="image-input-wrapper" style="background-image: url(assets/media/users/blank.png)"></div>

                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                   <i class="fa fa-pen icon-sm text-muted"></i>
                                                   <input type="file" name="id_photo" accept=".png, .jpg, .jpeg" data-control="select2" />
                                                   <input type="hidden" name="profile_avatar_remove" />
                                                </label>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                   <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                                             </div>
                                             <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                          </div>
                                       </div> -->
                                    </div>

                                 </div>
                                 <!--end::Wizard Step 1-->

                                 <!--begin::Wizard Step 2-->
                                 <div class="pb-5" data-wizard-type="step-content">
                                    <h4 class="mb-10 font-weight-bold text-dark">Educational Details (LATEST)</h4>

                                    <div class="row">
                                       <div class="col-xl-4">
                                          <!--begin::Select-->
                                          <div class="form-group">
                                             <label>Name Of Institution Attended</label>
                                             <input type="text" class="form-control form-control-solid form-control-lg" name="name_of_school" placeholder="" value="<?php echo $dispInstitution; ?>" data-control="select2" />
                                             <span class="form-text text-muted">Please enter the lates Institution attended.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                       <div class="col-xl-4">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>Highest Qualifications</label>
                                             <select name="qualifications" id="" class="form-control form-control-solid form-control-lg" data-control="select2">
                                                <option value="<?php echo $dispQual; ?>" selected><?php echo $dispQual; ?></option>
                                                <option value="Elementary Schooling">Elementary Schooling</option>
                                                <option value="Primary Certificate">Primary Certificate</option>
                                                <option value="Secondary Certificate">Secondary Certificate</option>
                                                <option value="High School Diploma">High School Diploma </option>
                                                <option value="Bachelors Degree">Bachelor's Degree</option>
                                                <option value="Masters Degree">Master's Degree</option>
                                                <option value="Doctorate (Ph.D.)">Doctorate (Ph.D.)</option>
                                                <option value="Basic Education">Basic Education</option>
                                                <option value="Teachers Education">Teachers Education</option>
                                                <option value="Technical And Vocational Education">Technical And Vocational Education</option>
                                                <option value="HND">HND</option>
                                                <option value="OND">OND</option>
                                                <option value="NCE">NCE</option>
                                                <option value="Doctorate (Ph.D.)">Doctorate (Ph.D.)</option>
                                             </select>
                                             <span class="form-text text-muted">Please enter your Qualifications.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                       <div class="col-xl-4">
                                          <!--begin::Select-->
                                          <div class="form-group">
                                             <label>Course</label>
                                             <select name="course" id="" class="form-control form-control-solid form-control-lg" data-control="select2">
                                                <option value="<?php echo $dispCourse; ?>" selected><?php echo $dispCourse; ?></option>
                                                <?php
                                                $conn = mysqli_connect('localhost', 'root', '', 'mdnew');
                                                $query = mysqli_query($conn, "SELECT * FROM course ORDER BY course ASC");
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                   <option value="<?php echo $row['course']; ?>"><?php echo $row['course']; ?> </option>
                                                <?php
                                                }
                                                ?>
                                             </select>
                                             <span class="form-text text-muted">Please enter your Course of study in the Institution.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-xl-4">
                                          <!--begin::Select-->
                                          <div class="form-group">
                                             <label>Others specify</label>
                                             <input type="text" class="form-control form-control-solid form-control-lg" name="other_course" placeholder="" value="<?php echo $dispOtherCourse; ?>" data-control="select2" />
                                             <span class="form-text text-muted">Please enter your course(s).</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                       <div class="col-xl-4">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>Date Of Award</label>
                                             <input type="date" class="form-control form-control-solid form-control-lg" name="date_of_award" placeholder="Date of Award" value="<?php echo $dispAwardDate; ?>" data-control="select2" />
                                             <span class="form-text text-muted">Please select the award date.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                       <div class="col-xl-4">
                                          <!--begin::Select-->
                                          <div class="form-group">
                                             <label>Number Of O level Credits</label>
                                             <input type="number" class="form-control form-control-solid form-control-lg" name="no_of_credits" placeholder="" value="<?php echo $dispCreditNo; ?>" data-control="select2" />
                                             <span class="form-text text-muted">Please enter the number of credits in O levels.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>

                                    </div>

                                 </div>
                                 <!--end::Wizard Step 2-->

                                 <!--begin::Wizard Step 4-->
                                 <div class="pb-5" data-wizard-type="step-content">
                                    <h4 class="mb-10 font-weight-bold text-dark">Next-Of-Kin Details</h4>
                                    <div class="row">
                                       <div class="col-xl-6">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>Name of next of kin</label>
                                             <input type="text" class="form-control form-control-solid form-control-lg" name="name_of_kin" placeholder="Firstname" value="<?php echo $dispKinRelation; ?>" data-control="select2" />
                                             <span class="form-text text-muted">Please enter the Name of next of kin.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                       <div class="col-xl-6">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>Relationship</label>
                                             <select name="relationship_kin" class="form-control form-control-solid form-control-lg" name="relationship_kin" placeholder="Relationship" value="<?php echo $dispKinRelation; ?>" data-control="select2">
                                                <option value="<?php echo $dispKinRelation; ?>"><?php echo $dispKinRelation; ?></option>
                                                <option value="Mother">Mother</option>
                                                <option value="Father">Father</option>
                                                <option value="Brother">Brother</option>
                                                <option value="Sister">Sister</option>
                                                <option value="Cousin">Cousin</option>
                                                <option value="Uncle">Uncle</option>
                                                <option value="Aunty">Aunty</option>
                                                <option value="Grand Mother">Grand Mother</option>
                                                <option value="Grand Father">Grand Father</option>
                                             </select>
                                             <span class="form-text text-muted">Please enter the relationship with next of kin.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-xl-6">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>Contact Address</label>
                                             <div>
                                                <textarea name="kin_address" class="form-control form-control-solid form-control-lg" id="kt_autosize_1" rows="3"><?php echo $dispKinAddress; ?></textarea>
                                             </div>
                                             <span class="form-text text-muted">Please enter your next-of-kin Address.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                       <div class="col-xl-6">
                                          <!--begin::Input-->
                                          <div class="form-group">
                                             <label>Phone Number</label>
                                             <input type="number" class="form-control form-control-solid form-control-lg" name="kin_phone" placeholder="Phone Number" value="<?php echo $dispKinPhone; ?>" data-control="select2" />
                                             <span class="form-text text-muted">Please enter the next of kin Phone number.</span>
                                          </div>
                                          <!--end::Input-->
                                       </div>
                                    </div>
                                 </div>
                                 <!--end::Wizard Step 4-->

                                 <!--begin::Wizard Step 5-->
                                 <div class="pb-5" data-wizard-type="step-content">
                                    <!--begin::Section-->
                                    <h2 class="mb-10 font-weight-bold text-dark">Are You sure the details you provided are correct?</h2>
                                    <!--end::Section-->
                                 </div>
                                 <!--end::Wizard Step 5-->

                                 <!--begin::Wizard Actions-->
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
                                 <!--end::Wizard Actions-->
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
                                             </h1> <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                          </div>
                                          <div class="modal-body">
                                             Proceed to submit details.
                                          </div>
                                          <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                             <input type="hidden" name="id" value="<?php echo $id; ?>">
                                             <input type="hidden" name="MainApp" value="main">
                                             <button type="submit" name="submit" value="applicantUpdate" class="btn btn-success" data-bs-dismiss="modal">Submit</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end::Modal-->
                              </form>
                              <!--end::Wizard Form-->
                           </div>
                        </div>
                        <!--end::Wizard Body-->
                     </div>
                     <!--end::Wizard-->
                  </div>
                  <!--end::Wizard-->
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
   <script src="assets/js/pages/custom/wizard/wizard-1.js"></script>

   <script type="text/javascript">
      $(document).ready(function() {
         // Load states based on the selected country
         $('#country').change(function() {
            var country = $(this).val();

            if (country != '') {
               // AJAX request to fetch states
               $.ajax({
                  url: 'assets/php/getters/get_states.php',
                  type: 'post',
                  data: {
                     country: country
                  },
                  dataType: 'json',
                  success: function(response) {
                     var len = response.length;

                     $('#state').empty();
                     $('#state').append("<option value=''>Select State</option>");

                     for (var i = 0; i < len; i++) {
                        var name = response[i]['state_name'];

                        $('#state').append("<option value='" + name + "'>" + name + "</option>");
                     }
                  }
               });
            } else {
               $('#state').empty();
               $('#state').append("<option value=''>Select State</option>");
            }

            // Reset city dropdown
            $('#city').empty();
            $('#city').append("<option value=''>Select City</option>");
         });

         // Load cities based on the selected state
         $('#state').change(function() {
            var state = $(this).val();

            if (state != '') {
               // AJAX request to fetch cities
               $.ajax({
                  url: 'assets/php/getters/get_cities.php',
                  type: 'post',
                  data: {
                     state: state
                  },
                  dataType: 'json',
                  success: function(response) {
                     var len = response.length;

                     $('#city').empty();
                     $('#city').append("<option value=''>Select City</option>");

                     for (var i = 0; i < len; i++) {
                        var name = response[i]['local_government'];

                        $('#city').append("<option value='" + name + "'>" + name + "</option>");
                     }
                  }
               });
            } else {
               $('#city').empty();
               $('#city').append("<option value=''>Select City</option>");
            }
         });

         // Load wards based on the selected local government
         $('#city').change(function() {
            var localGovernment = $(this).val();

            if (localGovernment != '') {
               // AJAX request to fetch wards
               $.ajax({
                  url: 'assets/php/getters/get_wards.php',
                  type: 'post',
                  data: {
                     localGovernment: localGovernment
                  },
                  dataType: 'json',
                  success: function(response) {
                     var len = response.length;

                     $('#ward').empty();
                     $('#ward').append("<option value=''>Select Ward</option>");

                     for (var i = 0; i < len; i++) {
                        var name = response[i]['ward_name'];

                        $('#ward').append("<option value='" + name + "'>" + name + "</option>");
                     }
                  }
               });
            } else {
               $('#ward').empty();
               $('#ward').append("<option value=''>Select Ward</option>");
            }
         });

         // Load polling units based on the selected ward
         $('#ward').change(function() {
            var ward = $(this).val();

            if (ward != '') {
               // AJAX request to fetch polling units
               $.ajax({
                  url: 'assets/php/getters/get_polling.php',
                  type: 'post',
                  data: {
                     ward: ward
                  },
                  dataType: 'json',
                  success: function(response) {
                     var len = response.length;

                     $('#polling_unit').empty();
                     $('#polling_unit').append("<option value=''>Select Polling Unit</option>");

                     for (var i = 0; i < len; i++) {
                        var name = response[i]['polling_station'];

                        $('#polling_unit').append("<option value='" + name + "'>" + name + "</option>");
                     }
                  }
               });
            } else {
               $('#polling_unit').empty();
               $('#polling_unit').append("<option value=''>Select Polling Unit</option>");
            }
         });

      });
   </script>
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