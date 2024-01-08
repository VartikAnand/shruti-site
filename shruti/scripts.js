// Card background color

const card = document.querySelector(".card");

card.style.setProperty("--dynamic-bg-color", dynamicBgColor);

const content = card.getAttribute("data-content");
const cardAfter = card.querySelector(".card:after");
cardAfter.textContent = content;
