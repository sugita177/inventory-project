'use strict';

function confirmDelete(e) {
    if(confirm('本当に削除しますか？')) {
        return true;
    } else {
        return e.preventDefault();
    }
}

document.querySelector('#deleteForm').addEventListener('submit', (e)=>{return confirmDelete(e);});