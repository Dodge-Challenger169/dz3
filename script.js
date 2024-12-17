
document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('application-modal');
    const openButton = document.getElementById('open-modal');
    const closeButton = document.querySelector('.close-btn');

    openButton.addEventListener('click', (e) => {
        e.preventDefault();
        modal.classList.add('show');
    });

    closeButton.addEventListener('click', () => {
        modal.classList.remove('show');
    });

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('show');
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('application-form');
    const messageContainer = document.getElementById('form-message');

    form.addEventListener('submit', (e) => {
        e.preventDefault(); 

        const formData = new FormData(form);
        fetch('submit_application.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text()) 
        .then(responseText => {
            messageContainer.style.display = 'block';
            messageContainer.style.color = 'green';
            messageContainer.innerHTML = responseText;

            form.reset();
        })
        .catch(error => {
            messageContainer.style.display = 'block';
            messageContainer.style.color = 'red';
            messageContainer.innerHTML = 'Ошибка при отправке данных. Попробуйте ещё раз.';
            console.error('Ошибка:', error);
        });
    });
});