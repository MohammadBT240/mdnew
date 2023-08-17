FormValidation.formValidation(document.getElementById("kt_form_1"), {
  fields: {
    email: {
      validators: {
        notEmpty: {
          message: "Email is required",
        },
      },
    },
    property_location: {
      validators: {
        notEmpty: {
          message: "Property location is required",
        },
      },
    },

    property_sale_price: {
      validators: {
        notEmpty: {
          message: "Sale price is required",
        },
        digits: {
          message: "The value is not a valid price",
        },
      },
    },
    property_bedroom_amount: {
      validators: {
        notEmpty: {
          message: "Bedroom number is required",
        },
        digits: {
          message: "The value is not a number",
        },
      },
    },
    property_bathroom_amount: {
      validators: {
        notEmpty: {
          message: "Bathroom number is required",
        },
        digits: {
          message: "The value is not a valid number",
        },
      },
    },
    property_phase: {
      validators: {
        notEmpty: {
          message: "Please select property phase option",
        },
      },
    },
    property_rent_price: {
      validators: {
        notEmpty: {
          message: "Rent price is required",
        },
        digits: {
          message: "The value is not a valid price",
        },
      },
    },

    property_typology: {
      validators: {
        notEmpty: {
          message: "Please select an option",
        },
      },
    },

    property_type: {
      validators: {
        choice: {
          min: 1,
          message: "Please select property type",
        },
      },
    },

    property_rent_installment: {
      validators: {
        choice: {
          min: 1,
          message: "Please select installment type",
        },
      },
    },
  },

  plugins: {
    trigger: new FormValidation.plugins.Trigger(),
    // Bootstrap Framework Integration
    bootstrap: new FormValidation.plugins.Bootstrap(),
    // Validate fields when clicking the Submit button
    submitButton: new FormValidation.plugins.SubmitButton(),
    // Submit the form when all fields are valid
    defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
  },
});
