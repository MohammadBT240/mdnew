"use strict";

// Class definition
var KTWizard1 = (function () {
  // Base elements
  var _wizardEl;
  var _formEl;
  var _wizard;
  var _validations = [];

  // Private functions
  var initWizard = function () {
    // Initialize form wizard
    _wizard = new KTWizard(_wizardEl, {
      startStep: 1, // initial active step number
      clickableSteps: true, // allow step clicking
    });

    // Validation before going to next page
    _wizard.on("beforeNext", function (wizard) {
      // Don't go to the next step yet
      _wizard.stop();

      // Validate form
      var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step
      validator.validate().then(function (status) {
        if (status == "Valid") {
          _wizard.goNext();
          KTUtil.scrollTop();
        } else {
          Swal.fire({
            text: "Sorry, looks like there are some errors detected, please try again.",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
              confirmButton: "btn font-weight-bold btn-light",
            },
          }).then(function () {
            KTUtil.scrollTop();
          });
        }
      });
    });

    // Change event
    _wizard.on("change", function (wizard) {
      KTUtil.scrollTop();
    });
  };

  var initValidation = function () {
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    // Step 1
    _validations.push(
      FormValidation.formValidation(_formEl, {
        fields: {
          applicant_id: {
            validators: {
              notEmpty: {
                message: "Applicant ID is required",
              },
            },
          },
          first_name: {
            validators: {
              notEmpty: {
                message: "First Name is required",
              },
            },
          },
          profile_avatar: {
            validators: {
              notEmpty: {
                message: "Photo is required",
              },
            },
          },
          surname: {
            validators: {
              notEmpty: {
                message: "Surname is required",
              },
            },
          },
          date_of_birth: {
            validators: {
              notEmpty: {
                message: "Date Of Birth is required",
              },
            },
          },
          last_name: {
            validators: {
              notEmpty: {
                message: "Last Name is required",
              },
            },
          },
          gender: {
            validators: {
              notEmpty: {
                message: "Gender is required",
              },
            },
          },
          country: {
            validators: {
              notEmpty: {
                message: "Country is required",
              },
            },
          },
          state: {
            validators: {
              notEmpty: {
                message: "State is required",
              },
            },
          },
          city: {
            validators: {
              notEmpty: {
                message: "Lga is required",
              },
            },
          },
          ward: {
            validators: {
              notEmpty: {
                message: "Ward is required",
              },
            },
          },
          polling_unit: {
            validators: {
              notEmpty: {
                message: "Polling Unit is required",
              },
            },
          },
          residential_address: {
            validators: {
              notEmpty: {
                message: "Address is required",
              },
            },
          },
          phone_number: {
            validators: {
              notEmpty: {
                message: "Phone Number is required",
              },
            },
          },
          email: {
            validators: {
              notEmpty: {
                message: "Email is required",
              },
              emailAddress: {
                message: "The value is not a valid email address",
              },
            },
          },
          marital_status: {
            validators: {
              notEmpty: {
                message: "Marital Status is required",
              },
            },
          },
          password: {
            validators: {
              notEmpty: {
                message: "password is required",
              },
            },
          },
          cpassword: {
            validators: {
              notEmpty: {
                message: "The password confirmation is required",
              },
              identical: {
                compare: function () {
                  return form.querySelector('[name="password"]').value;
                },
                message: "The password and its confirm are not the same",
              },
            },
          },
          identification: {
            validators: {
              notEmpty: {
                message: "Identification is required",
              },
            },
          },
          id_photo: {
            validators: {
              notEmpty: {
                message: "Please Select ID file",
              },
            },
          },
        },
        // fields: {
        //   applicant_id: {
        //     validators: {
        //       notEmpty: {
        //         message: "Applicant ID is required",
        //       },
        //     },
        //   },
        //   title: {
        //     validators: {
        //       notEmpty: {
        //         message: "Title is required",
        //       },
        //     },
        //   },
        //   first_name: {
        //     validators: {
        //       notEmpty: {
        //         message: "First Name is required",
        //       },
        //     },
        //   },
        //   profile_avatar: {
        //     validators: {
        //       notEmpty: {
        //         message: "Photo is required",
        //       },
        //     },
        //   },
        //   surname: {
        //     validators: {
        //       notEmpty: {
        //         message: "Surname is required",
        //       },
        //     },
        //   },
        //   date_of_birth: {
        //     validators: {
        //       notEmpty: {
        //         message: "Date Of Birth is required",
        //       },
        //     },
        //   },
        //   last_name: {
        //     validators: {
        //       notEmpty: {
        //         message: "Last Name is required",
        //       },
        //     },
        //   },
        //   gender: {
        //     validators: {
        //       notEmpty: {
        //         message: "Gender is required",
        //       },
        //     },
        //   },
        //   country: {
        //     validators: {
        //       notEmpty: {
        //         message: "Country is required",
        //       },
        //     },
        //   },
        //   state: {
        //     validators: {
        //       notEmpty: {
        //         message: "State is required",
        //       },
        //     },
        //   },
        //   city: {
        //     validators: {
        //       notEmpty: {
        //         message: "Lga is required",
        //       },
        //     },
        //   },
        //   ward: {
        //     validators: {
        //       notEmpty: {
        //         message: "Ward is required",
        //       },
        //     },
        //   },
        //   polling_unit: {
        //     validators: {
        //       notEmpty: {
        //         message: "Polling Unit is required",
        //       },
        //     },
        //   },
        //   residential_address: {
        //     validators: {
        //       notEmpty: {
        //         message: "Address is required",
        //       },
        //     },
        //   },
        //   phone_number: {
        //     validators: {
        //       notEmpty: {
        //         message: "Phone Number is required",
        //       },
        //     },
        //   },
        //   email: {
        //     validators: {
        //       notEmpty: {
        //         message: "Email is required",
        //       },
        //       emailAddress: {
        //         message: "The value is not a valid email address",
        //       },
        //     },
        //   },
        //   marital_status: {
        //     validators: {
        //       notEmpty: {
        //         message: "Marital Status is required",
        //       },
        //     },
        //   },
        //   password: {
        //     validators: {
        //       notEmpty: {
        //         message: "password is required",
        //       },
        //     },
        //   },
        //   cpassword: {
        //     validators: {
        //       notEmpty: {
        //         message: "The password confirmation is required",
        //       },
        //       identical: {
        //         compare: function () {
        //           return form.querySelector('[name="password"]').value;
        //         },
        //         message: "The password and its confirm are not the same",
        //       },
        //     },
        //   },
        //   identification: {
        //     validators: {
        //       notEmpty: {
        //         message: "Identification is required",
        //       },
        //     },
        //   },
        //   id_photo: {
        //     validators: {
        //       notEmpty: {
        //         message: "Please Select ID file",
        //       },
        //     },
        //   },
        // },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap: new FormValidation.plugins.Bootstrap(),
        },
      })
    );

    // Step 2
    _validations.push(
      FormValidation.formValidation(_formEl, {
        fields: {
          name_of_school: {
            validators: {
              notEmpty: {
                message: "Institution is required",
              },
            },
          },
          qualifications: {
            validators: {
              notEmpty: {
                message: "Qualification is required",
              },
            },
          },
          course: {
            validators: {
              notEmpty: {
                message: "Course is required",
              },
            },
          },
          no_of_credits: {
            validators: {
              notEmpty: {
                message: "Please input number of O level credits",
              },
            },
          },
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap: new FormValidation.plugins.Bootstrap(),
        },
      })
    );

    // Step 3
    _validations.push(
      FormValidation.formValidation(_formEl, {
        fields: {
          name_of_kin: {
            validators: {
              notEmpty: {
                message: "Next of kin type is required",
              },
            },
          },
          relationship_kin: {
            validators: {
              notEmpty: {
                message: "Please specify Relationship with kin",
              },
            },
          },
          kin_address: {
            validators: {
              notEmpty: {
                message: "Insert Next of kin address",
              },
            },
          },
          kin_phone: {
            validators: {
              notEmpty: {
                message: "Insert Next Of kin Phone Number",
              },
            },
          },
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap: new FormValidation.plugins.Bootstrap(),
        },
      })
    );
  };

  return {
    // public functions
    init: function () {
      _wizardEl = KTUtil.getById("kt_wizard_v1");
      _formEl = KTUtil.getById("kt_form");

      initWizard();
      initValidation();
    },
  };
})();

jQuery(document).ready(function () {
  KTWizard1.init();
});
