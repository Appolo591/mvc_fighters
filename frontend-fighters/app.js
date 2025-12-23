const btnDatas = document.querySelector('#btnDatas');
const container = document.querySelector('.container');
let characters = [];    

function create() {
    characters.forEach(character => {
        const name = document.createElement('p');
        name.textContent = character.name + " du coté " + character.side;
        const charDiv = document.createElement('div');
        charDiv.classList.add('character');
        charDiv.appendChild(name);
        container.appendChild(charDiv);
    });
}

function fetchDatas() {
    fetch('http://localhost/mvc-fighters/api_characters')
        .then((response)=>{
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText)
            }
            return response.json();
        })
        .then((data) => {       
            characters = data;
            console.log(characters);
           create();
        })
        .catch((error) => {
            console.error('There has been a problem with your fetch operation:', error);
        });
    }

btnDatas.addEventListener('click', fetchDatas);