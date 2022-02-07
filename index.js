
var app = new Vue({
    el: '#app',
    data: {
      message: '',
      library: [],
      messages: [],
    },
    methods : {
        removeElement : function(index){
            this.library.$remove(index);
        },
        deleteClick (id) {
          if(!confirm("Do U want permanently delete row?")){
            return;
          }
          var data = new FormData();
          data.append('bookID', id);
          axios.post('delete.php', data)
          .then(response => {
            if (response.data === true) {
              this.library.forEach((book, index) => {
                if (book.ID === id) {
                  this.$delete(this.library, index);
                  this.messages.push({
                    'message': 'Book deleted successfully',
                    'severity': 'success'
                  });
                }
              });
            } else {
              this.messages.push({
                'message': 'Book deletion was not successfull',
                'severity': 'danger'
              });
            }
        }).catch(e => {
          this.messages.push({
            'message': 'Ooop, some error occured',
            'severity': 'danger'
          });
        });
        }
      },
    async created (){
        axios.get('test.php').then(response => {
          console.log(response.data)
            this.library = response.data
        }).catch(e => {
          alert('Some error occured during library fetch');
        });
    }
  })
  






// const form = document.getElementById('form');
// const nazov = document.getElementById('nazov');
// const ISBN = document.getElementById('ISBN');
// const cena = document.getElementById('cena');
// const autor = document.getElementById('autor');

// form.addEventListener('submit', e => {
//     e.preventDefault();

//     validateInputs();
// });

// const setError = (element, message) => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');

//     errorDisplay.innerText = message;
//     inputControl.classList.add('error');
//     inputControl.classList.remove('success')
// }

// const setSuccess = element => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');

//     errorDisplay.innerText = '';
//     inputControl.classList.add('success');
//     inputControl.classList.remove('error');
// };

// const isValidISBN = ISBN => {
//     const re = /^[0-9]+$/;
//     return re.test(String(ISBN).toLowerCase());
// }

// const validateInputs = () => {
//     const nazovValue = nazov.value;
//     const ISBNValue = ISBN.value;
//     const cenaValue = cena.value;
//     const autorValue = autor.value.trim();
//     console.log(ISBNValue);
//     console.log(ISBNValue.length);
//     console.log(ISBN);

//     if(nazovValue === '') {
//         setError(nazov, 'Nazov is required');
//     } else {
//         setSuccess(nazov);
//     }

//     if(ISBNValue === '') {
//         setError(ISBN, 'ISBN is required');
//     } 
//     else if (!isValidISBN(ISBNValue)) {
//         setError(ISBN, 'Provide a valid ISBN');
//     }
//     else if(ISBNValue.length<9){
//         setError(ISBN, 'Length must be min 9');
//     }
//     else if(ISBNValue.length>12){
//         setError(ISBN, 'Length must be max 12');
//     }
//     else {
//         setSuccess(ISBN);
//     }

//     if(cenaValue === '') {
//         setError(cena, 'Cena is required');
//     } else {
//         setSuccess(cena);
//     }

//     if(autorValue === '') {
//         setError(autor, 'Autor is required');
//     } else {
//         setSuccess(autor);
//     }    
// };


