const myForm = document.querySelector('#my-form');
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email');
const msg = document.querySelector('.msg');
const userList = document.querySelector('#users');

myForm.addEventListener('submit', onSubmit);

function onSubmit(e) {
    e.preventDefault();

    if (nameInput.value === '' || emailInput.value === '') {
        msg.classList.add('error');
        msg.innerHTML = 'Please enter all fields';
    
        setTimeout(() => msg.remove(), 3000);
    } else if (!emailInput.value.includes('@')) {
        msg.classList.add('error');
        msg.innerHTML = 'Please enter a valid email address';
    
        setTimeout(() => msg.remove(), 3000);
    }
    
    else {
        const li = document.createElement('li');
        li.appendChild(document.createTextNode(`${nameInput.value}: ${emailInput.value}`));
        userList.appendChild(li);

        // Clear fields
        nameInput.value = '';
        emailInput.value = '';
    }
}

function isPangram(string){

    string = string.toLowerCase();
    const alphabet = 'abcdefghijklmnopqrstuvwxyz';

    for(let i = 0; i < alphabet.length; i++){
        if(string.indexOf(alphabet[i]) === -1){
            return false;
        }
    }
    return true;
}

const iis = isPangram("The quick brown fox jumps over the lazy dog");
console.log(iis);

decodeMorse = function(morseCode){
    // Your code here
    const MORSE_CODE = {
        '.-':     'A',
        '-...':   'B',
        '-..':    'D',
        '-..-':   'X',
        '.':      'E',
        '..-.':   'F',
        '--.':    'G',
        '....':   'H',
        '..':     'I',
        '.---':   'J',
        '-.-':    'K',
        '.-..':   'L',
        '--':     'M',
        '-.':     'N',
        '---':    'O',
        '.--.':   'P',
        '--.-':   'Q',
        '.-.':    'R',
        '...':    'S',
        '-':      'T',
        '..-':    'U',
        '...-':   'V',
        '.--':    'W',
        '-..-':   'X',
        '-.--':   'Y',
        '--..':   'Z',
        '-----':  '0',
        '.----':  '1',
        '..---':  '2',
        '...--':  '3',
        '....-':  '4',
        '.....':  '5',
        '-....':  '6',
        '--...':  '7',
        '---..':  '8',
        '----.':  '9',
        '.-.-.-': '.',
        '--..--': ',',
        '..--..': '?',
        '-..-.':  '/',
        '-....-': '-',
        '-.--.':  '(',
        '-.--.-': ')',
    };
    // You can use MORSE_CODE[morse]
    const kata = morseCode.split('   ');
    const huruf = kata.map(function(e){
        return e.split(' ');
    });


    let result = huruf.map(function(e){
        return e.map(function(c){
            return MORSE_CODE[c];
        }).join('');
    }).join(' ');


    return result
  }

  console.log(decodeMorse('   .... . -.--   '));