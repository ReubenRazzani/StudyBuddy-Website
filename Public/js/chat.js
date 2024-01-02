const level = document.getElementById('statusForm');
const statusRadio = level.querySelectorAll('input[type="radio"]');

statusRadio.forEach(radio => {
    radio.addEventListener('change', function(event) {
        level.submit();
    });
});

const subjectForm = document.getElementById('subjectForm');
const subjectRadio = subjectForm.querySelectorAll('input[type="radio"]');

subjectRadio.forEach(radio => {
    radio.addEventListener('change', function(event) {
        subjectForm.submit();
    });
});