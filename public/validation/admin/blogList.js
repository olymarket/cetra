document.addEventListener('DOMContentLoaded', indexPost);

const urlIndex = ('/api/admin/blog-index');
const formHeaders = {
    'Accept': 'application/json',
};
const messageContentSuccess = document.getElementById('messageContentSuccess');
const messageContentError = document.getElementById('messageContentError');

function indexPost() {
    fetch(urlIndex, {
        method: 'GET',
        headers: formHeaders,
    })
        .then(response => response.json())
        .then(data => {
            const tableBody = document.getElementById('data-table').querySelector('tbody');
            tableBody.innerHTML = ''; 
            data.posts.forEach(post => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${post.idPost}</td>
                    <td>${post.statu}</td>
                    <td>${post.user}</td>
                    <td>${post.title}</td>
                    <td>${post.date}</td>
                    <td>
                        <button class="btn btn-warning" onclick="editPost(${post.idPost})">
                            <i class="icon-copy dw dw-edit"></i>&nbsp;Edit
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger" onclick="deletePost(${post.idPost})">
                            <i class="icon-copy dw dw-delete"></i>&nbsp;Delete
                        </button>
                    </td>`;
                tableBody.appendChild(row);
            });
            console.log('Success api:', data)
        })
        .catch(error => {
            console.log('Error fetch:', error)
        });
}

function editPost(idPost) {
    localStorage.setItem('idPost', idPost);
    const urlEdit = (`/api/admin/blog-edit/${idPost}`);
    const formHeaders = { 'Accept': 'application/json' };
    fetch(urlEdit, {
        method: 'GET',
        headers: formHeaders,
    })
        .then(response => response.json())
        .then(data => {
            if (data.statu === 'error') {
                window.location.href = data.redirect;
                console.log('Error api', data);
            }
            else {
                window.location.href = `/admin/blog-edit/${idPost}`;
                console.log('Success api:', data);
            }
            console.log('Result', data);
        })
        .catch(error => {
            console.log('Error fetch:', error);
        })
}
function deletePost(idPost) {
    const urlDestroy = (`/api/admin/blog-delete/${idPost}`);
    const formHeaders = { 'Accept': 'application/json' };
    fetch(urlDestroy, {
        method: 'DELETE',
        headers: formHeaders,
    })
        .then(response => response.json())
        .then(data => {
            console.log('Result', data);
            return data;
        })
        .then(() => {
            indexPost();
        })
        .catch(error => {
            console.log('Error fetch', error);
        })
}