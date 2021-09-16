// show password
function togglePassword(id, el) {
  let pass = document.getElementById(id);
  if (pass.type === "password") {
    pass.type = "text";
    el.className = 'fas fa-eye text-black-50 togglePassword';
  } else {
    pass.type = "password";
    el.className = 'fas fa-eye-slash text-black-50 togglePassword';
  }
} 
