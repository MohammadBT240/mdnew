<?php
include 'assets/php/connection.php';

$id = $_SESSION['id'];

$sql = "SELECT * FROM applicants WHERE id = $id";
$result = mysqli_query($con, $sql);
$row = (mysqli_fetch_assoc($result));

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
                        Dashboard
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
               <!--begin::Profile Overview-->
               <div class="d-flex flex-row">
                  <!--begin::Content-->
                  <div class="flex-row-fluid">
                     <!--begin::Row-->
                     <div class="row">
                        <!--begin::Content-->
                        <div class="flex-row-fluid">
                           <div class="card card-custom gutter-b">
                              <div class="card-header">
                                 <div class="card-title">
                                    <h3 class="card-label">
                                       <small></small>
                                    </h3>
                                 </div>
                                 <div class="card-toolbar">
                                    <a type="button" onclick="windows.print()" class="btn btn-primary mr-2">Print</a>
                                    <a href="aapplicantUpdateView.php?id=<?php echo $_SESSION['id']; ?>" type="button" class="btn btn-success mr-2">Edit Profile</a>
                                 </div>
                              </div>
                              <div class="card-body">
                                 <!--begin::Details-->
                                 <div class="d-flex mb-9">
                                    <!--begin: Pic-->
                                    <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                                       <div class="symbol symbol-50 symbol-lg-120">
                                          <div class="symbol-label" style="background-image:url('assets/images/<?php echo $dispImg; ?>')"> </div>
                                       </div>

                                       <div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
                                          <span class="font-size-h3 symbol-label font-weight-boldest"><?php echo $dispFName[0] . " " . $dispSName[0]; ?></span>
                                       </div>
                                    </div>
                                    <!--end::Pic-->

                                    <!--begin::Info-->
                                    <div class="flex-grow-1">
                                       <!--begin::Title-->
                                       <div class="d-flex justify-content-between flex-wrap mt-1">
                                          <div class="d-flex mr-3">
                                             <a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3"><?php echo $dispFName . " " . $dispSName . " " . $dispLName; ?></a>
                                             <a href="#"><i class="flaticon2-correct text-success font-size-h5"></i></a>
                                          </div>

                                          <!-- <div class="my-lg-0 my-3">
                                             <a href="#" class="btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-3">ask</a>
                                             <a href="#" class="btn btn-sm btn-info font-weight-bolder text-uppercase">hire</a>
                                          </div> -->
                                       </div>
                                       <!--end::Title-->

                                       <!--begin::Content-->
                                       <div class="d-flex flex-wrap justify-content-between mt-1">
                                          <div class="d-flex flex-column flex-grow-1 pr-8">
                                             <div class="d-flex flex-wrap mb-4">
                                                <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"><i class="flaticon2-new-email mr-2 font-size-lg"></i><?php echo $dispEmail; ?></a>
                                                <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"><i class="flaticon2-calendar-3 mr-2 font-size-lg"></i>Applicant</a>
                                                <a href="#" class="text-dark-50 text-hover-primary font-weight-bold"><i class="flaticon2-placeholder mr-2 font-size-lg"></i><?php echo $dispState; ?></a>
                                             </div>
                                             <div class="d-flex flex-wrap mb-4">
                                                <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"><span class="text-muted font-weight-bold mr-2">DOB :</span>
                                                   <span class="text-muted text-hover-primary"><?php echo $dispDOB; ?></span></a>
                                                <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"><span class="text-muted font-weight-bold mr-2">Gender :</span>
                                                   <span class="text-muted text-hover-primary"><?php echo $dispGender; ?></span></a>
                                             </div>
                                          </div>
                                       </div>
                                       <!--end::Content-->
                                    </div>
                                    <!--end::Info-->
                                 </div>
                                 <!--end::Details-->

                                 <br>
                                 <br>

                                 <div class="row">
                                    <div class="col-lg-9 col-xl-6">
                                       <h3 class="font-weight-bold mb-6"><u>Personal Details:</u></h3>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">Applicant Id:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispId; ?></span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">Nationality:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispCountry; ?></span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">State of Origin:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispState; ?></span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">LGA:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispCity; ?></span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">Phone:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispPNo; ?></span>
                                    </div>
                                 </div>
                                 <br>
                                 
                                 <div class="row">
                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">email:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispEmail; ?></span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">Marital Status:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispMarital; ?></span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">Identification Type:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispIdentification; ?></span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">ID Photo:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1">
                                          <div class="form-group row">
                                             <div class="col-lg-9 col-xl-6">
                                                <div class="image-input" id="kt_image_2">
                                                   <div class="image-input-wrapper" style="background-image: url(assets/images/<?php echo $dispPhotoId; ?>)"></div>

                                                   <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                      <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark"></h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"></span>
                                    </div>

                                 </div>

                                 <br>
                                 <br>
                                 <br>

                                 <div class="row">
                                    <div class="col-lg-9 col-xl-6">
                                       <h3 class="font-weight-bold mb-6"><u>Educational Details:</u></h3>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">Institution:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispInstitution; ?></span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">Qualification:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispQual; ?></span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">Course:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispCourse; ?></span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">Other Course(s):</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispOtherCourse; ?></span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">Date Of Award:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispAwardDate; ?></span>
                                    </div>
                                 </div>

                                 <br>

                                 <div class="row">
                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">O-Levels Credit:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispCreditNo; ?></span>
                                    </div>

                                    <div class="col-sm">
                                    </div>
                                    <div class="col-sm">
                                    </div>
                                 </div>

                                 <br>
                                 <br>
                                 <br>

                                 <div class="row">
                                    <div class="col-lg-9 col-xl-6">
                                       <h3 class="font-weight-bold mb-6"><u>Next Of Kin Details:</u></h3>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">Name:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispKinName; ?></span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">Relationship:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispKinRelation; ?></span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">Address:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispKinAddress; ?></span>
                                    </div>

                                    <div class="col-sm">
                                       <h6 class="font-weight-bolder text-dark">Phone Number:</h6>
                                       <span class="text-muted font-weight-bold font-size-sm mt-1"><?php echo $dispKinPhone; ?></span>
                                    </div>
                                    
                                    <div class="col-sm">
                                    </div>
                                 </div>

                                 <br>
                                 <br>
                                 <br>

                              </div>
                           </div>
                        </div>
                        <!--end::Profile Overview-->
                     </div>
                     <!--end::Container-->
                  </div>
                  <!--end::Content-->
               </div>
               <!--end::Profile Overview-->
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

</body>
<!--end::Body-->