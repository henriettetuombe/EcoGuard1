const formContainer = document.querySelector("form");
const fullnameInput = document.querySelector("#name");
const emailInput = document.querySelector("#email");
const submitBtn = document.querySelector("#submit-btn");

submitBtn.addEventListener("click", renderForm);

function renderForm() {
    if (fullnameInput.value && emailInput.value) {
        formContainer.innerHTML = `<p>Thanks for Registering, ${fullnameInput.value}. We will get back to you shortly </p>`
    } else {
        noText();
    }
};

function noText() {
    // render nothing
};