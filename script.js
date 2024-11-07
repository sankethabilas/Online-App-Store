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
      } else if (response == "adminsuccess") {
        window.location = "admin.php";
      } else {
        document.getElementById("msg1").innerHTML = "Login failed Please Login again";
        document.getElementById("msg1").className = "alert alert-danger";
        document.getElementById("msgdiv1").className = "d-block";
      }
       
    }
  };

  request.open("POST", "signInProcess.php", true);
  request.send(form);
}

//channge profile image function
function changeProfileImage() {
  var img = document.getElementById("profileimage");

  img.onchange = function () {
    var file = this.files[0];
    var url = window.URL.createObjectURL(file);

    document.getElementById("img").src = url;
  };
}

//Update profile function

function updateProfile() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var mobile = document.getElementById("mobile");
  var line1 = document.getElementById("line1");
  var line2 = document.getElementById("line2");
  var province = document.getElementById("province");
  var district = document.getElementById("district");
  var city = document.getElementById("city");
  var pcode = document.getElementById("pcode");
  var image = document.getElementById("profileimage");

  var form = new FormData();

  form.append("f", fname.value);
  form.append("l", lname.value);
  form.append("m", mobile.value);
  form.append("l1", line1.value);
  form.append("l2", line2.value);
  form.append("p", province.value);
  form.append("d", district.value);
  form.append("c", city.value);
  form.append("pc", pcode.value);
  form.append("i", image.files[0]);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var response = request.responseText;

      if (response == "updated" || response == "saved") {
        window.location.reload();
      } else if ((response = "You have not selected any image")) {
        alert("You have not selected any image");
      } else {
        alert(response);
      }
    }
  };

  request.open("POST", "updateProfileProcess.php", true);
  request.send(form);
}

function deleteProfile() {
  if (confirm("Are you sure you want to delete your profile? This action cannot be undone.")) {
      var request = new XMLHttpRequest();

      request.onreadystatechange = function () {
          if (request.readyState == 4 && request.status == 200) {
              var response = request.responseText;
              if (response == "success") {
                  alert("Your profile has been successfully deleted.");
                  window.location = "signup.php"; 
              } else if (response == "error") {
                  alert("An error occurred while deleting your profile. Please try again.");
              } else if (response == "unauthorized") {
                  alert("You are not authorized to perform this action.");
                  window.location = "signup.php"; 
              }
          }
      };

      request.open("POST", "deleteProfile.php", true);
      request.send();
  }
}