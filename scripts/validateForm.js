document.getElementById("validateButton").addEventListener("click", function () {
    let isValid = true;

    document.querySelectorAll(".error-message").forEach(el => el.textContent = "");

    // Validar Name
    const nameInput = document.getElementById("name");
    if (!nameInput.value.trim()) {
        isValid = false;
        document.getElementById("nameError").textContent = "Name is required.";
    }

    // Validar Email
    const emailInput = document.getElementById("email");
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailInput.value.trim()) {
        isValid = false;
        document.getElementById("emailError").textContent = "Email is required.";
    } else if (!emailPattern.test(emailInput.value)) {
        isValid = false;
        document.getElementById("emailError").textContent = "Please enter a valid email.";
    }

    // Validar Phone
    const phoneInput = document.getElementById("phone");
    const phonePattern = /^[0-9]+$/;
    if (!phoneInput.value.trim()) {
        isValid = false;
        document.getElementById("phoneError").textContent = "Phone number is required.";
    } else if (!phonePattern.test(phoneInput.value)) {
        isValid = false;
        document.getElementById("phoneError").textContent = "Phone number must contain only numbers.";
    }else if (phoneInput.value.length != 10) {
        isValid = false;
        document.getElementById("phoneError").textContent = "The phone number must contain only 10 numbers.";
    }

    // Validar Message
    const messageInput = document.getElementById("message");
    if (!messageInput.value.trim()) {
        isValid = false;
        document.getElementById("messageError").textContent = "Message is required.";
    }

    if (isValid) {
        console.log("Name: "+nameInput.value+" E-mail: "+emailInput.value+" Phone: "+phoneInput.value+" \nMessage: "+messageInput.value);
        const modal = document.getElementById("successModal");
        modal.style.display = "block";
        nameInput.value = '';
        emailInput.value = '';
        phoneInput.value = '';
        messageInput.value = '';
        // document.getElementById("contactForm").submit();
    }
});
// Cerrar modal
document.querySelector(".close").addEventListener("click", function () {
    const modal = document.getElementById("successModal");
    modal.style.display = "none";
});

  // Cerrar modal al hacer clic fuera de él
window.addEventListener("click", function (event) {
    const modal = document.getElementById("successModal");
    if (event.target === modal) {
        modal.style.display = "none";
    }
});