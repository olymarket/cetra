document.getElementById('ContactForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const contactName    = document.getElementById('name');
    const contactEmail   = document.getElementById('email');
    const contactPhone   = document.getElementById('phone');
    const contactMessage = document.getElementById('message');

    const messageName    = document.getElementById('messageName');
    const messageEmail   = document.getElementById('messageEmail');
    const messagePhone   = document.getElementById('messagePhone');
    const messageMessage = document.getElementById('messageMessage');
    const messageForm    = document.getElementById('messageForm');

    const regexName  = /^[a-zA-ZÑÁÉÍÓÚñáéíóú ]*$/
    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const regexPhone = /^[0-9]*$/;

    let typingTimer;
    clearTimeout(typingTimer);
    const typingDelay = 3000;

    let valid = true;

    const name = contactName.value.trim();
    if (name === '') {
        messageName.classList.remove('text-color-success');
        messageName.classList.add('text-color-error');
        messageName.textContent = 'Enter your name';
        valid = false;
    }
    else if (!regexName.test(name)) {
        messageName.classList.remove('text-color-success');
        messageName.classList.add('text-color-error');
        messageName.textContent = 'Only letters in name';
        valid = false;
    }
    else if (name.length < 3) {
        messageName.classList.remove('text-color-success');
        messageName.classList.add('text-color-error');
        messageName.textContent = '3 Characters minimum in name';
        valid = false;
    }
    else if (name.length > 30) {
        messageName.classList.remove('text-color-success');
        messageName.classList.add('text-color-error');
        messageName.textContent = '30 Characters maximum in name';
        valid = false;
    }
    else {
        messageName.classList.remove('text-color-error');
        messageName.classList.add('text-color-success');
        messageName.textContent = 'Valid name';
    }

    const email = contactEmail.value.trim();
    if (email === '') {
        messageEmail.classList.remove('text-color-success');
        messageEmail.classList.add('text-color-error');
        messageEmail.textContent = 'Enter the email';
        valid = false;
    }
    else if (!regexEmail.test(email)) {
        messageEmail.classList.remove('text-color-success');
        messageEmail.classList.add('text-color-error');
        messageEmail.textContent = 'This email is wrong';
        valid = false;
    }
    else {
        messageEmail.classList.remove('text-color-error');
        messageEmail.classList.add('text-color-success');
        messageEmail.textContent = 'Valid email';
    }

    const phone = contactPhone.value.trim();
    if (phone === '') {
        messagePhone.classList.remove('text-color-success');
        messagePhone.classList.add('text-color-error');
        messagePhone.textContent = 'Enter phone number';
        valid = false;
    }
    else if (phone.length > 10) {
        messagePhone.classList.remove('text-color-success');
        messagePhone.classList.add('text-color-error');
        messagePhone.textContent = '10 Characters maximum in phone number';
        valid = false;
    }
    else if (!regexPhone.test(phone)) {
        messagePhone.classList.remove('text-color-success');
        messagePhone.classList.add('text-color-error');
        messagePhone.textContent = 'Only numbers in phone number';
        valid = false;
    }
    else {
        messagePhone.classList.remove('text-color-error');
        messagePhone.classList.add('text-color-success');
        messagePhone.textContent = 'Valid phone number';
    }

    const message = contactMessage.value.trim();
    if (message === '') {
        messageMessage.classList.remove('text-color-success');
        messageMessage.classList.add('text-color-error');
        messageMessage.textContent = 'Enter in message';
        valid = false;
    }
    else if (message.length < 3) {
        messageMessage.classList.remove('text-color-success');
        messageMessage.classList.add('text-color-error');
        messageMessage.textContent = '3 characters minimum in message';
        valid = false;
    }
    else if (message.length > 100) {
        messageMessage.classList.remove('text-color-success');
        messageMessage.classList.add('text-color-error');
        messageMessage.textContent = '100 characters maximum in message';
        valid = false;
    }
    else {
        messageMessage.classList.remove('text-color-error');
        messageMessage.classList.add('text-color-success');
        messageMessage.textContent = 'Valid text';
    }

    if (valid) {
        const formData    = new FormData(this);
        const formToken   = document.querySelector('input[name="_token"]').value;
        const formHeaders = { 
            'Accept': 'application/json',
            'X-CSRF-TOKEN': formToken,
        };
        const fomUrl      = ('api/public/email');

        fetch(fomUrl, {
            method:  'POST',
            headers: formHeaders,
            body:    formData,
        })
            .then(response => response.json())
            .then(data => {
                if(data.statu === 'success'){
                    messageForm.textContent = data.message;
                    messageForm.classList.remove('text-color-error');
                    messageForm.classList.add('text-color-success');
                    //console.log('success:', data);
                }
                else{
                    messageForm.textContent = data.message;
                    messageForm.classList.remove('text-color-success');
                    messageForm.classList.add('text-color-error');
                    //console.log('error:', data);
                }
            })
            .catch(error => {
                messageForm.textContent = 'Server error';
                messageForm.classList.remove('text-color-success');
                messageForm.classList.add('text-color-error');
                //console.log('general error:', error);
            });
    }
});
