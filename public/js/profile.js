const imgDiv = document.querySelector('.user-img');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');
const profileTabBtn = document.querySelector('#v-pills-profile-tab');
const deleteTabBtn = document.querySelector('#v-pills-delete-tab');
const changePasswordTabBtn = document.querySelector('#v-pills-password-change-tab');
const tabContainer = document.querySelector('.tab-container');
const deleteForm = document.getElementById('accountDeleteForm');
const deleteInput = document.querySelector('#delete-input');

// document.addEventListener("DOMContentLoaded", function() {
//     // Get the current URL search parameters
//     const urlParams = new URLSearchParams(window.location.search);
//     const tab = urlParams.get('tab');

//     // If there's a tab parameter, activate the corresponding tab
//     if (tab) {
//         const targetTab = document.getElementById(tab);
//         if (targetTab) {
//             const bsTab = new bootstrap.Tab(targetTab);
//             bsTab.show();  // Show the tab
//         }
//     }
// });

//Change profile picture
file.addEventListener('change', function (){
    const chosedFile = this.files[0];
    if(chosedFile){
        const reader = new FileReader();
        reader.addEventListener('load', () => {
            img.setAttribute('src', reader.result)
        });
        reader.readAsDataURL(chosedFile);
    }
});


// Tab margin change
profileTabBtn.addEventListener('click', function(){
    tabContainer.style.marginTop = '100px';
    tabContainer.style.marginBottom = '50px';
});

changePasswordTabBtn.addEventListener('click', function(){
    tabContainer.style.marginTop = '100px';
    tabContainer.style.marginBottom = '50px';
});

deleteTabBtn.addEventListener('click', function(){
    tabContainer.style.marginTop = '150px';
    tabContainer.style.marginBottom = '150px';
});

// Validate Delete
deleteForm.addEventListener('submit', function(event) {
    event.preventDefault();
    if(deleteInput.value.toLowerCase() === 'delete'){
        Swal.fire({
            title: 'Are you sure?',
            text: "This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        });
    }else{
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Delete Confirmation is invalid!",
          });
    }

});

