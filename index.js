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

const isValidISBN = ISBN => {
    const re = /^[0-9]+$/;
    return re.test(String(ISBN).toLowerCase());
}

const validateInputs = () => {
    const nazovValue = nazov.value;
    const ISBNValue = ISBN.value;
    const cenaValue = cena.value;
    const autorValue = autor.value.trim();
    console.log(ISBNValue);
    console.log(ISBNValue.length);
    console.log(ISBN);

    if(nazovValue === '') {
        setError(nazov, 'Nazov is required');
    } else {
        setSuccess(nazov);
    }

    if(ISBNValue === '') {
        setError(ISBN, 'ISBN is required');
    } 
    else if (!isValidISBN(ISBNValue)) {
        setError(ISBN, 'Provide a valid ISBN');
    }
    else if(ISBNValue.length<9){
        setError(ISBN, 'Length must be min 9');
    }
    else if(ISBNValue.length>12){
        setError(ISBN, 'Length must be max 12');
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


