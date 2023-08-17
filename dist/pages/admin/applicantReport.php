<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
   <!--begin::Main-->
   <!--begin::Wrapper-->
   <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
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
                        Applicants Reports
                     </h5>
                     <!--end::Page Title-->

                     <!--begin::Breadcrumb-->
                     <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                           <a href="" class="text-muted"> IGS </a>
                        </li>
                     </ul>
                     <!--end::Breadcrumb-->
                  </div>
                  <!--end::Page Heading-->
               </div>
               <!--end::Info-->

               <!--begin::Toolbar-->
               <div class="d-flex align-items-center">

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
                  <div class="card-header flex-wrap border-0 pt-6 pb-0">
                     <div class="card-title">
                        <h3 class="card-label">
                           <span class="d-block text-muted pt-2 font-size-sm">Applicants Reports.</span>
                        </h3>
                     </div>
                     <div class="card-toolbar">
                     </div>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-sm" cellspacing="0" style="width:100%">
                           <thead>
                              <tr>
                                 <th>S/N</th>
                                 <th>ID</th>
                                 <th>Name</th>
                                 <th>Gender</th>
                                 <th>Phone Number</th>
                                 <th>Email</th>
                                 <th>Identification</th>
                                 <th>State</th>
                                 <th>Course</th>
                                 <th>Institution</th>
                                 <th>Options</th>
                              </tr>
                           </thead>
                           <tbody>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th>S/N</th>
                                 <th>ID</th>
                                 <th>Name</th>
                                 <th>Gender</th>
                                 <th>Phone Number</th>
                                 <th>Email</th>
                                 <th>Identification</th>
                                 <th>State</th>
                                 <th>Course</th>
                                 <th>Institution</th>
                                 <th>Options</th>
                              </tr>
                           </tfoot>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <!--end::Container-->
         </div>
         <!--end::Entry-->
      </div>
      <!--end::Content-->
   </div>
   <!--end::Wrapper-->

   <!-- Modal -->
   <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">
                  <a href="#" class="btn btn-icon btn-light-danger pulse pulse-danger mr-5">
                     <i class="flaticon2-information"></i>
                     <span class="pulse-ring"></span>
                  </a>
                  Delete Confirmation
               </h1>
            </div>
            <div class="modal-body">
               <p>Are you sure you want to delete this record?</p>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
               <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
            </div>
         </div>
      </div>
   </div>
   <!-- Modal End -->

   <script>
      $(document).ready(function() {
         $('#example').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "assets/php/fetch/fetch_applicants.php",
            "columnDefs": [{
               "orderable": false,
               "targets": 10
            }],
            "columns": [{
                  "render": function(data, type, row) {
                     // Calculate row number based on the current page and page length
                     var pageInfo = $('#example').DataTable().page.info();
                     var row_number = pageInfo.start + 1 + row[0]; // Assuming row[0] contains row_number
                     return row_number;
                  }
               },
               null,
               {
                  "render": function(data, type, row) {
                     return row[11] + ' ' + row[2];
                  }
               },
               null,
               null,
               null,
               null,
               null,
               null,
               null,
               null
            ],
            dom: 'lBfrtip',
            buttons: [
               'copyHtml5',
               'excelHtml5',
               'csvHtml5',
               'pdfHtml5'
            ]
         });
      });
   </script>

   <script type="text/javascript">
      $(document).ready(function() {
         var recordId;

         // Handle delete button click
         $(document).on('click', '.deletebtn', function() {
            recordId = $(this).data('id');
         });

         // Handle modal's delete button click
         $('#confirmDelete').click(function() {
            if (recordId) {
               $.ajax({  
                  url: 'assets/php/admin/delete_applicants.php',
                  method: 'POST',
                  data: {
                     id: recordId
                  },
                  success: function(response) {
                     // Handle the success response, e.g., show a success message
                     console.log(response);

                     // Reload the DataTable after successful deletion
                     $('#example').DataTable().ajax.reload();
                  },
                  error: function(xhr, status, error) {
                     // Handle the error response, e.g., show an error message
                     console.log(xhr.responseText);
                  }
               });
            }

            // Close the modal
            $('#deleteModal').modal('hide');
         });
      });
   </script>
</body>
<!--end::Body-->