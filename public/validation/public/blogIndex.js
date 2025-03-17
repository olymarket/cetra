document.addEventListener('DOMContentLoaded', indexPost);

const urlIndex = ('/api/public/blog-index');
const formHeaders = {
    'Accept': 'application/json',
};

function indexPost() {
    fetch(urlIndex, {
        method: 'GET',
        headers: formHeaders,
    })
        .then(response => response.json())
        .then(data => { 
            if(data.statu === 'error'){
                console.log('Error api:', data)
            }
            else if(data.statu === 'success'){
                const listPost = document.getElementById('listPost');
                listPost.innerHTML = ''; 
                data.posts.forEach(post => {
                    const createList = document.createElement('div');
                    createList.classList.add('col-lg-4', 'col-md-6', 'col-sm-12', 'news-block', 'wow', 'slideInLeft');
                    createList.setAttribute('data-wow-delay', '00ms');
                    createList.setAttribute('data-wow-duration', '1500ms');
                    createList.innerHTML = `
                        <div class="news-block-one">
                            <figure class="image-box"><a href="#"><img src="${post.image}" alt="${post.title}"></a></figure>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li><i class="far fa-calendar-alt"></i>${post.date}</li>
                                    <li><i class="fa fa-tag"></i>${post.categori}</li>
                                </ul>
                                <h4>
                                    <button class="button-onclick" onclick="listPost(${post.idPost})">${post.title}
                                    </button>
                                </h4>
                            </div>
                        </div>
                    `;
                listPost.appendChild(createList);
                });
                console.log('Success api:', data)
            }
            console.log('Result:', data)
        })
        .catch(error => {
            console.log('Error fetch:', error)
        });
}

function listPost(idPost){
    localStorage.setItem('idPost', idPost);
    const urlShow = (`/api/public/blog-show/${idPost}`);
    const formHeaders = { 'Accept': 'application/json' };
    fetch(urlShow, {
        method: 'GET',
        headers: formHeaders,
    })
    .then(response => response.json())
    .then(data => {
        if(data.statu === 'error'){
            window.location.href = data.redirect;
            console.log('Error Api', data);
        }
        else if(data.statu === 'success'){
            window.location.href = (`/home/blog-show/${idPost}`);
            console.log('Success api:', data);
        }
        console.log('Result', data);
    })
    .catch(error =>{
        console.log('Error fetch:', error);
    })
}