document.addEventListener("DOMContentLoaded", function() {
    var currencyContainer = document.querySelector(".currency-rates");
    var showMoreButton = document.createElement("button");
    showMoreButton.innerText = "Показать все валюты";
    showMoreButton.classList.add("show-more-button");
    currencyContainer.appendChild(showMoreButton);

    var currencyList = document.querySelectorAll(".currency");
    var hiddenCurrencies = Array.from(currencyList).slice(5);

    var isExpanded = false;

    hiddenCurrencies.forEach(function(currency) {
        currency.style.display = "none";
    });

    function toggleCurrencies() {
        hiddenCurrencies.forEach(function(currency) {
            currency.style.display = isExpanded ? "none" : "block";
        });
        showMoreButton.innerText = isExpanded ? "Показать все валюты" : "Скрыть валюты";
        isExpanded = !isExpanded;
    }

    showMoreButton.addEventListener("click", toggleCurrencies);
});