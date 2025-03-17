document.getElementById('urlBack').addEventListener('click', function(){
    window.location.href = ('http://127.0.0.1:8000/admin/blog-index');
});

const blogStatu = document.getElementById('idStatu');
const blogCategori = document.getElementById('idCategori');
const blogTitle = document.getElementById('title');
const blogImage = document.getElementById('image');
const blogDescription = document.getElementById('description');
const blogContent = document.getElementById('content');

const messageStatu = document.getElementById('messageStatu');
const messageCategori = document.getElementById('messageCategori');
const messageTitle = document.getElementById('messageTitle');
const messageImage = document.getElementById('messageImage');
const messageDescription = document.getElementById('messageDescription');
const messageContent = document.getElementById('messageContent');
const messageForm = document.getElementById('messageForm');

document.getElementById('blogForm').addEventListener('submit', function (event) {
    event.preventDefault();

    let valid = true;
    const numeric = /^[0-9]+$/;
    const validateImage = ['image/jpeg', 'image/jpg', 'image/jpe', 'image/webp'];
    const sizeImage = 3 * 1024 * 1024;
    const inputImage = blogImage.files[0];

    const statu = blogStatu.value.trim();
    if (statu === '') {
        messageStatu.classList.remove('text-color-success');
        messageStatu.classList.add('text-color-error');
        messageStatu.textContent = 'Select a state';
        valid = false;
    }
    else if (!numeric.test(statu)) {
        messageStatu.classList.remove('text-color-success');
        messageStatu.classList.add('text-color-error');
        messageStatu.textContent = 'This option is not allowed in state';
        valid = false;
    }
    else if (numeric === '0') {
        messageStatu.classList.remove('text-color-success');
        messageStatu.classList.add('text-color-error');
        messageStatu.textContent = 'This option is not allowed in state';
        valid = false;
    }
    else {
        messageStatu.classList.remove('text-color-error');
        messageStatu.classList.add('text-color-success');
        messageStatu.textContent = 'Valid statu';
    }

    const categori = blogCategori.value.trim();
    if (categori === '') {
        messageCategori.classList.remove('text-color-success');
        messageCategori.classList.add('text-color-error');
        messageCategori.textContent = 'Select a categori';
        valid = false;
    }
    else if (!numeric.test(categori)) {
        messageCategori.classList.remove('text-color-success');
        messageCategori.classList.add('text-color-error');
        messageCategori.textContent = 'This option is not allowed in categori';
        valid = false;
    }
    else if (numeric === '0') {
        messageCategori.classList.remove('text-color-success');
        messageCategori.classList.add('text-color-error');
        messageCategori.textContent = 'This option is not allowed in state';
        valid = false;
    }
    else {
        messageCategori.classList.remove('text-color-error');
        messageCategori.classList.add('text-color-success');
        messageCategori.textContent = 'Valid categori';
    }

    const title = blogTitle.value.trim();
    if (title === '') {
        messageTitle.classList.remove('text-color-success');
        messageTitle.classList.add('text-color-error');
        messageTitle.textContent = 'Enter a title';
        valid = false;
    }
    else if (title.length < 3) {
        messageTitle.classList.remove('text-color-success');
        messageTitle.classList.add('text-color-error');
        messageTitle.textContent = '3 characters minimum in title';
        valid = false;
    }
    else if (title.length > 80) {
        messageTitle.classList.remove('text-color-success');
        messageTitle.classList.add('text-color-error');
        messageTitle.textContent = '80 characters maximum in title';
        valid = false;
    }
    else {
        messageTitle.classList.remove('text-color-error');
        messageTitle.classList.add('text-color-success');
        messageTitle.textContent = 'Valid title';
    }
    if (!inputImage === false) {
        if (!inputImage) {
            console.log('prueba', !inputImage);
            messageImage.classList.remove('text-color-success');
            messageImage.classList.add('text-color-error');
            messageImage.textContent = 'Select an image';
            valid = false;
        }
        else if (inputImage.size > sizeImage) {
            messageImage.classList.remove('text-color-success');
            messageImage.classList.add('text-color-error');
            messageImage.textContent = '3mb maximum in image';
            valid = false;
        }
        else if (!validateImage.includes(inputImage.type)) {
            messageImage.classList.remove('text-color-success');
            messageImage.classList.add('text-color-error');
            messageImage.textContent = 'Allowed formats JPEG, JPG, JPE, WEBP, in image';
            valid = false;
        }
        else {
            messageImage.classList.remove('text-color-error');
            messageImage.classList.add('text-color-success');
            messageImage.textContent = 'Valid image';
        }
        console.log('image:', !inputImage);
    }
    else if (!inputImage === true) {
        console.log('image:', !inputImage);
    }

    const description = blogDescription.value.trim();
    if (description === '') {
        messageDescription.classList.remove('text-color-success');
        messageDescription.classList.add('text-color-error');
        messageDescription.textContent = 'Enter a description';
        valid = false;
    }
    else if (description.length < 3) {
        messageDescription.classList.remove('text-color-success');
        messageDescription.classList.add('text-color-error');
        messageDescription.textContent = '3 characters minimumn in description';
        valid = false;
    }
    else if (description.length > 130) {
        messageDescription.classList.remove('text-color-success');
        messageDescription.classList.add('text-color-error');
        messageDescription.textContent = '130 characters maximum in description';
        valid = false;
    }
    else {
        messageDescription.classList.remove('text-color-error');
        messageDescription.classList.add('text-color-success');
        messageDescription.textContent = 'Valid description';
    }

    const content = blogContent.value.trim();
    if (content === '') {
        messageContent.classList.remove('text-color-success');
        messageContent.classList.add('text-color-error');
        messageContent.textContent = 'Enter a content';
        valid = false;
    }
    else if (content.length < 3) {
        messageContent.classList.remove('text-color-success');
        messageContent.classList.add('text-color-error');
        messageContent.textContent = '3 characters minimumn in content';
        valid = false;
    }
    else {
        messageContent.classList.remove('text-color-error');
        messageContent.classList.add('text-color-success');
        messageContent.textContent = 'Valid content';
    }
    //Store envia los datos del formulario al api
    if (valid) {
        const formData = new FormData(this);
        const idPost = localStorage.getItem('idPost');
        const urlUpdate = (`/api/admin/blog-update/${idPost}`);
        const formToken = document.querySelector('input[name="_token"]').value;
        const formHeaders = {
            'X-CSRF-TOKEN': formToken,
        };
        fetch(urlUpdate, {
            method: 'POST',
            headers: formHeaders,
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.statu === 'error') {
                    if (data.message.type === 'statu') {
                        messageStatu.textContent = data.message.message;
                        messageStatu.classList.remove('text-color-success');
                        messageStatu.classList.add('text-color-error');
                    }
                    else if (data.message.type === 'categori') {
                        messageCategori.textContent = data.message.message;
                        messageCategori.classList.remove('text-color-success');
                        messageCategori.classList.add('text-color-error');
                    }
                    else if (data.message.type === 'title') {
                        messageTitle.textContent = data.message.message;
                        messageTitle.classList.remove('text-color-success');
                        messageTitle.classList.add('text-color-error');
                    }
                    messageForm.textContent = 'Error update';
                    messageForm.classList.remove('text-color-success');
                    messageForm.classList.add('text-color-error');                    
                    console.log('Error api:', data);
                }
                else if (data.statu === 'success') {
                    messageForm.textContent = data.message.message;
                    messageForm.classList.remove('text-color-error');
                    messageForm.classList.add('text-color-success');
                    console.log('Success api:', data);
                }
                console.log('Validation success:', valid);
            })
            .catch(error => {
                console.log('Error fetch:', error);
            });
   }
    else if (!valid) {
        messageForm.textContent = 'Correct the errors';
        messageForm.classList.remove('text-color-success');
        messageForm.classList.add('text-color-error');
        console.log('Validation error:', valid);
    }
});

const idPost = localStorage.getItem('idPost');
const urlEdit = (`/api/admin/blog-edit/${idPost}`);
const formHeaders = { 'Accept': 'application/json', }
fetch(urlEdit, {
    method: 'GET',
    headers: formHeaders,
})
    .then(response => response.json())
    .then(data => {
        if (data.statu === 'error') {
            window.location.href = data.redirect;
        }
        else if(data.statu === 'success'){
            const postIdStatu = data.posts.idStatu;
            const selectStatu = document.getElementById('idStatu');

            data.status.forEach(statu => {
                const optionStatu = document.createElement('option');
                optionStatu.value = statu.idStatu;
                optionStatu.textContent = statu.title;

                if (statu.idStatu === postIdStatu) {
                    optionStatu.selected = true;
                }
                selectStatu.appendChild(optionStatu);
            })
            const postIdCategori = data.posts.idCategori;
            const selectCategori = document.getElementById('idCategori');

            data.categories.forEach(categori => {
                const optionCategori = document.createElement('option');
                optionCategori.value = categori.idCategori;
                optionCategori.textContent = categori.title;

                if (categori.idCategori === postIdCategori) {
                    optionCategori.selected = true;
                }
                selectCategori.appendChild(optionCategori);
            })
            const resultTitle = data.posts.title;
            blogTitle.value = resultTitle;

            const resultdescription = data.posts.description;
            blogDescription.value = resultdescription;

            const resultContent = data.posts.content;
            blogContent.value = resultContent;
            console.log('Success api:', data)
        }
    })
    .catch(error => {
        console.log('Error api:', error)
    });
