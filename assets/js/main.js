// function validateEmail(email) {
//     var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(email);
//   }

//   function validate() {
//     var $result = $("#result");
//     var email = $("#email").val();
//     $result.text("");

//     if (validateEmail(email)) {
//       $result.text(email + " is valid :)");
//       $result.css("color", "green");
//     } else {
//       $result.text(email + " is not valid :(");
//       $result.css("color", "red");
//     }
//     return false;
//   }

//   $("#validate").bind("click", validate);

// function checkMail(emailAdress)

// {
//     var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');

//     return (reg.test(emailAdress));
// }

// function valider() {

//     if (!checkMail(document.form.send.value) || (document.form.send.value.length == 0)) {
//         document.getElementById('error-mail').innerHTML = "Merci de renseigner votre email.";
//         return false;
//     } else if (!checkMail(document.form.recep.value) || (document.form.recep.value.length == 0)) {
//         document.getElementById('error-mail').innerHTML = "Merci de renseigner le mail du destinataire.";
//         return false;
//     }
// }