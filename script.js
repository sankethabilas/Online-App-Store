function changeView() {
  var signUpBox = document.getElementById("signUpBox");
  var signInBox = document.getElementById("signInBox");

  signUpBox.classList.toggle("d-none");
  signInBox.classList.toggle("d-none");
}

// sign up function//

function signUp() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email = document.getElementById("email");
  var password = document.getElementById("password");
  var mobile = document.getElementById("mobile");
  var gender = document.getElementById("gender");

  var form = new FormData();

  form.append("f", fname.value);
  form.append("l", lname.value);
  form.append("e", email.value);
  form.append("p", password.value);
  form.append("m", mobile.value);
  form.append("g", gender.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;

      if (response == "success") {
        document.getElementById("msg").innerHTML = "Register Successfull";
        document.getElementById("msg").className = "alert alert-success";
        document.getElementById("msgdiv").className = "d-block";
      } else {
        document.getElementById("msg").innerHTML =
          "Register unsuccessfull Please Register again";
        document.getElementById("msg").className = "alert alert-danger";
        document.getElementById("msgdiv").className = "d-block";
      }
    }
  };

  request.open("POST", "signupprocess.php", true);
  request.send(form);
}
// sign in function//
function signIn() {
  var email = document.getElementById("email2");
  var password = document.getElementById("password2");

  var form = new FormData();

  form.append("e", email.value);
  form.append("p", password.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;
      if (response == "success") {
        window.location = "home.php";
      } else {
        document.getElementById("msg1").innerHTML ="Login failed Please Login again";
        document.getElementById("msg1").className = "alert alert-danger";
        document.getElementById("msgdiv1").className = "d-block";
      }
    }
  };

  request.open("POST", "signInProcess.php", true);
  request.send(form);
}
