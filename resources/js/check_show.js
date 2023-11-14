const tableRows = document.querySelector('tbody').querySelectorAll('tr');
tableRows.forEach(function(tr) {
    const checkBoxId = tr.querySelector('input[type="checkbox"]').id;
    const inputs = tr.querySelectorAll('input[type="number"]');
    const checkBox = document.getElementById(`${checkBoxId}`);
    checkBox.addEventListener('change', () => {
        inputs.forEach(function(input) {
            input.readonly = checkBox.checked;
        })
    })
})