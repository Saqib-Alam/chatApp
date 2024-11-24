const passField = document.querySelector(".form .field input[type= 'password']");
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = () => {
  if (passField.type == "password") {
    passField.type = "text";
    toggleBtn.classList.add("active")
  } else {
    passField.type = "password";
    toggleBtn.classList.remove("active")
  }
}

// toggleBtn.classList.add("active")
// console.log("hello");
