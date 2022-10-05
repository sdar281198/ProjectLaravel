const passField = document.getElementById("loginpass");
const passFieldinp = document.getElementById("loginpassinput");
const showBtn = passField.querySelector("span i");
showBtn.onclick = () => {
  if (passFieldinp.type === "password") {
    passFieldinp.type = "text";
    showBtn.classList.add("hide-btn");
  } else {
    passFieldinp.type = "password";
    showBtn.classList.remove("hide-btn");
  }
};