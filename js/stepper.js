$(document).ready(function () {

  var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
      $item = $(this);

    if (!$item.hasClass('disabled')) {
      $item.addClass('btn-success');
      allWells.hide();
      $target.show();

    }
  });

  allNextBtn.click(function () {
    if ($(this).hasClass("get-data")) {

      if (!$('#terms').is(":checked")) {
        $("#must-check").removeClass("d-none");
        return
      } else {
        $("#must-check").addClass("d-none");

      }

      name = $("#name").val() || "<span class='text-danger'>you must provied a name</span>";
      email = $("#email").val() || "<span class='text-danger'>you must provied your email</span>";
      country = $("#country").val() || "<span class='text-danger'>you must provied your country name</span>";
      desiredDate = $("#desiredDate").val() || "<span class='text-danger'>you must select a date</span>";
      nPass = $("#nPass").val() || "<span class='text-danger'>you must provied your passport number or your DNI</span>";
      number = $("#number").val() || "<span class='text-danger'>you must provied your phone number</span>";

      $("#tr-name").html(name);
      $("#tr-email").html(email);
      $("#tr-country").html(country);
      $("#tr-nPass").html(nPass);
      $("#tr-desiredDate").html(desiredDate);
      $("#tr-number").html(number);

    }
    /* sending data */
    if ($(this).attr("name") == "submit-form") {
      $("#loading").removeClass("d-none");
      $.ajax({
        type: "POST",
        url: "./register_proccess.php",
        datatype: "json",
        async: false,
        data: {
          Param_name: $("#name").val(),
          Param_country: $("#country").val(),
          Param_email: $("#email").val(),
          Param_desiredDate: $("#desiredDate").val(),
          Param_nPass: $("#nPass").val(),
          Param_number: $("#number").val(),
        },
        error: function (jqXHR, textStatus, errorThrown) {
          if (
            typeof console == "object" &&
            typeof console.log == "function"
          ) {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
          }
        },
        success: function (response) {
          //var myJSON = JSON.stringify(response);
          console.log(response.message);
          console.log(response.succes);
          console.log(response.succes);
          $("#loading").addClass("d-none");
          if (response.succes) {
            $("#success-message").removeClass("d-none");
            $("#error-message").addClass("d-none");
            $("#help-block").addClass("d-none");
          } else {
            $("#success-message").addClass("d-none");
            $("#error-message").removeClass("d-none");
            $("#help-block").html(response.message);
          }
        },
      });
    }

    var curStep = $(this).closest(".setup-content"),
      curStepBtn = curStep.attr("id"),
      nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
      curInputs = curStep.find("input[type='text'],input[type='url']"),
      isValid = true;

    $(".form-group").removeClass("has-error");
    for (var i = 0; i < curInputs.length; i++) {
      if (!curInputs[i].validity.valid) {
        isValid = false;
        $(curInputs[i]).closest(".form-group").addClass("has-error");
      }
    }

    if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
  });
  $(".prevBtn").click(function () {
    var curStep = $(this).closest(".setup-content"),
      curStepBtn = curStep.attr("id"),
      nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
      curInputs = curStep.find("input[type='text'],input[type='url']"),
      isValid = true;

    $(".form-group").removeClass("has-error");
    for (var i = 0; i < curInputs.length; i++) {
      if (!curInputs[i].validity.valid) {
        isValid = false;
        $(curInputs[i]).closest(".form-group").addClass("has-error");
      }
    }

    if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-success').trigger('click');


  /* sending data */

});