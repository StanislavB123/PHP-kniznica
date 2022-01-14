const form = document.getElementById('form');
const nazov = document.getElementById('nazov');
const ISBN = document.getElementById('ISBN');
const cena = document.getElementById('cena');
const autor = document.getElementById('autor');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const validateInputs = () => {
    const nazovValue = nazov.value.trim();
    const ISBNValue = ISBN.value.trim();
    const cenaValue = cena.value.trim();
    const autorValue = autor.value.trim();

    if(nazovValue === '') {
        setError(nazov, 'Nazov is required');
    } else {
        setSuccess(nazov);
    }

    if(ISBNValue === '') {
        setError(ISBN, 'ISBN is required');
    } 
    else if(ISBNValue.lenght<3){
        setError(ISBN, 'lenght must be min 6');
        return false;
    }
    else {
        setSuccess(ISBN);
    }

    if(cenaValue === '') {
        setError(cena, 'Cena is required');
    } else {
        setSuccess(cena);
    }

    if(autorValue === '') {
        setError(autor, 'Autor is required');
    } else {
        setSuccess(autor);
    }
};


