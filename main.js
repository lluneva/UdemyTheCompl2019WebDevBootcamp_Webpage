function validateForm() {

  var enteredEmail = document.forms['newsletterForm']['form_email'].value;
  var enteredName = document.forms['newsletterForm']['form_name'].value;



  if (enteredEmail == '' || enteredName == '') {
    alert("Jūs neesat aizpildījis visu formu");
    return false;
  }
}

$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip({
    animation: true
  });
});

function openPrivacyPolicy() {
  window.open("privacy-policy-template.pdf");
}