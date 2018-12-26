// since doesnt work on parallax, i commented it out


// window.onscroll = function () {
//   scrollFunction()
// };

// function scrollFunction() {


//   if (document.body.scrollTop > 102 || document.documentElement.scrollTop > 102) {

//     $("#navigation").css("height", "80px");
//     var x = $(".nav-item");
//     for (var i = 0; i < x.length; i++) {
//       x[i].style.fontSize = "1rem";
//     }
//   } else {
//     $("#navigation").css("height", "102px")
//     var x = $(".nav-item");
//     for (var i = 0; i < x.length; i++) {
//       x[i].style.fontSize = "1.25rem";

//     }
//   }
// }

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