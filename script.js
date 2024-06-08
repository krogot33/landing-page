// Agregar un evento 'submit' al formulario para validar los datos antes de enviarlos
const formulario = document.getElementById('contactoForm');

formulario.addEventListener('submit', function(event) {
    event.preventDefault(); // Evita el envío automático del formulario

    // Validación básica de nombre y mensaje
    const nombre = document.getElementById('nombre').value;
    const mensaje = document.getElementById('consulta').value;

    if (nombre.trim() === '' || mensaje.trim() === '') {
        alert('Por favor, completa todos los campos obligatorios.');
        return;
    }

    // Si la validación es correcta, permite el envío del formulario
    formulario.submit();

    const recaptchaToken = grecaptcha.execute('6LfcHfQpAAAAAJCVnjU3yeKCTXc16YlW9VGKAibc', { action: 'submit' });

// Add the reCAPTCHA token to the form data
const formData = new FormData(formulario);
formData.append('g-recaptcha-token', recaptchaToken);

// Submit the form
formulario.submit();
});
