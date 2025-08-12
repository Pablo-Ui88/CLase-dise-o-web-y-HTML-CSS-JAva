function solicitarTicket() {
  alert("Un apersona te atendera en breve");
}

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("formLogin");

  form.addEventListener("submit", (e) => {
    const user = document.getElementById("user").value.trim();
    const pass = document.getElementById("pass").value.trim();

    if (user === "" || pass === "") {
      e.preventDefault();
      alert("Por favor, completa todos los campos.");
      return;
    }

    if (user.length < 3) {
      e.preventDefault();
      alert("El usuario debe tener al menos 3 caracteres.");
    }

    if (pass.length < 6) {
      e.preventDefault();
      alert("La contraseña debe tener al menos 6 caracteres.");
    }
  });
});