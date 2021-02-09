// DOM
const buttonElem = document.querySelector("button");
const headerElem = document.querySelector("h1");
const bulbIcon = document.querySelector("i");

const toggleDarkMode = () => {
    if (buttonElem.value == "off") {
        document.body.setAttribute("class", "darkModeOn");
        headerElem.setAttribute("style", "color: var(--light)");
        headerElem.textContent = "Dark mode ON";

        buttonElem.value = "on";
        buttonElem.textContent = "Turn OFF";
        buttonElem.setAttribute("style", "background-color: var(--dark); color: var(--light); border: 2px solid var(--light)");
    } else if (buttonElem.value == "on") {
        document.body.setAttribute("class", "darkModeOff");
        headerElem.setAttribute("style", "color: var(--dark)");
        headerElem.textContent = "Dark mode OFF";

        buttonElem.value = "off";
        buttonElem.textContent = "Turn ON";
        buttonElem.setAttribute("style", "background-color: var(--light); color: var(--dark); border: 2px solid var(--dark)");
    }
}

buttonElem.addEventListener('click', toggleDarkMode);