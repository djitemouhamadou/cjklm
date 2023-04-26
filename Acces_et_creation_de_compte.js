const emailInput = document.getElementById("email");
const emailError = document.getElementById("email-error");

emailInput.addEventListener("input", function() {
if (!isEmailValid(emailInput.value)) {
     emailInput.setCustomValidity("Veuillez saisir une adresse e-mail valide.");
     emailError.textContent = "Veuillez saisir une adresse e-mail valide.";
} else {
    emailInput.setCustomValidity("");
    emailError.textContent = "";
            }
          });

   function isEmailValid(email) {
       const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
       return emailRegex.test(email);
          }