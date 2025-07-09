// DOM yuklanganda ishga tushadi
document.addEventListener("DOMContentLoaded", () => {

  // Har bir formani tekshirish
  const forms = document.querySelectorAll("form");

  forms.forEach(form => {
    form.addEventListener("submit", (e) => {
      const inputs = form.querySelectorAll("input, select");
      let valid = true;

      inputs.forEach(input => {
        if (input.hasAttribute("required") && input.value.trim() === "") {
          valid = false;
          input.classList.add("error");
        } else {
          input.classList.remove("error");
        }
      });

      if (!valid) {
        e.preventDefault();
        showAlert("Iltimos, barcha maydonlarni to‘ldiring!");
      }
    });
  });

  // Faqat raqam kiritish uchun inputlarni cheklash
  const numberInputs = document.querySelectorAll("input[type='number']");
  numberInputs.forEach(input => {
    input.addEventListener("keypress", (e) => {
      if (e.which < 48 || e.which > 57) {
        e.preventDefault();
      }
    });
  });
});

// Alert ko‘rsatish funksiyasi
function showAlert(message) {
  const alertBox = document.createElement("div");
  alertBox.className = "custom-alert";
  alertBox.innerText = message;
  document.body.appendChild(alertBox);

  setTimeout(() => {
    alertBox.remove();
  }, 3000);
}
