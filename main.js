function validateForm() {

  var enteredEmail = document.forms['newsletterForm']['form_email'].value;
  var enteredName = document.forms['newsletterForm']['form_name'].value;

  if (enteredEmail == '' || enteredName == '') {
    document.getElementById("form-text").innerHTML = "Jūs neesat aizpildījis formu";
    return false;
  }

}

$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip({
    animation: true
  });
});