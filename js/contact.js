document.addEventListener("DOMContentLoaded", function() {
    const submitButton = document.querySelector('.submit-button');
    const popup = document.querySelector('.popup');
    const popupClose = document.querySelector('.popup-close');

    submitButton.addEventListener('click', function(event) {
        event.preventDefault(); // Verhindert das Absenden des Formulars
        popup.style.display = 'block';
    });

    popupClose.addEventListener('click', function() {
        popup.style.display = 'none';
    });
});