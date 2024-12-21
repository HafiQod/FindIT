const registerButton = document.getElementById("register");
const loginButton = document.getElementById("login");
const container = document.getElementById("container");
const body = document.body;

registerButton.addEventListener("click", () => {
    container.classList.add("right-panel-active");
    body.classList.add("work-it-bg");
});

loginButton.addEventListener("click", () => {
    container.classList.remove("right-panel-active");
    body.classList.remove("work-it-bg");
});