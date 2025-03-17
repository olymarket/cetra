const idPost = localStorage.getItem('idPost');
const urlShow = (`/api/public/blog-show/${idPost}`);
const formHeaders = { 'Accept': 'application/json' };
fetch(urlShow, {
    method: 'GET',
    headers: formHeaders,
})
    .then(response => response.json())
    .then(data => {
        console.log
        if(data.statu === 'error'){
            window.location.href = data.redirect;
            console.log('Error api;', data);
        }
        else if(data.statu === 'success'){
            const showPost = document.getElementById('showPost');
            showPost.innerHTML = '';
            data.posts.forEach(post => {
                showPost.innerHTML = `
                    <div class="container">
                        <div class="single-history-box">
                            <div class="content-box">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 title-column">
                                        <div class="sec-title">
                                            <h1>${post.title}</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="image-box">
                                <figure class="image">
                                    <a href="${post.image}" class="lightbox-image" data-fancybox="gallery">
                                        <img src="${post.image}" alt="${post.title}">
                                    </a>
                                </figure>
                            </div>
                            <div class="col-12">
                                <div class="text jump-mt-50">
                                    <p>${post.content}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            });
            console.log('Success api:', data)
        }
        console.log('Result;', data);
    })
    .catch(error => {
        console.log('Error fetch;', error);
    });