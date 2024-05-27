import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const allDeleteComics = document.querySelectorAll('.js-delete-btn');
allDeleteComics.forEach((deleteButton) => {
    deleteButton.addEventListener('click', function(event) {
        event.preventDefault();
        const deleteModal = document.getElementById('deleteModal');
        const comicTitle = this.dataset.comicTitle;
        deleteModal.querySelector('.modal-body').innerHTML = `Sei sicuro di voler eliminare dalla lista dei fumetti ${comicTitle}?`;

        const bootstrapDeleteModal = new bootstrap.Modal(deleteModal);
        bootstrapDeleteModal.show();

        const modalDelate = document.getElementById('modal-confirm-deletion');
       modalDelate.addEventListener('click', function() {
            deleteButton.parentElement.submit();
        });
    });
});