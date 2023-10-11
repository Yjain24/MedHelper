let createButton = document.getElementById('create-button');
let createForm = document.getElementById('create-form');
let isCreateFormDisplaying = false;

let updateButton = document.getElementById('edit-button');
let updateForm = document.getElementById('update-form');
let isUpdateFormDisplaying = false;

let deleteButton = document.getElementById('delete-button');
let deleteForm = document.getElementById('delete-form');
let isDeleteFormDisplaying = false;

deleteButton.onclick = function () {


    if (isDeleteFormDisplaying == false) {
        deleteForm.style.display = 'block'
        isDeleteFormDisplaying = true;
    } else {
        deleteForm.style.display = 'none'
        isDeleteFormDisplaying = false
    }
}


//Toggle create form
createButton.onclick = function () {
    if (isCreateFormDisplaying == false) {
        createForm.style.display = 'block';
        isCreateFormDisplaying = true;
    } else {
        //hide the form
        createForm.style.display = 'none';
        isCreateFormDisplaying = false;
    }
}


updateButton.onclick = function () {
    if (isUpdateFormDisplaying == false) {
        updateForm.style.display = 'block';
        isUpdateFormDisplaying = true;
    } else {
        //hide the form
        updateForm.style.display = 'none';
        isUpdateFormDisplaying = false;
    }
}
