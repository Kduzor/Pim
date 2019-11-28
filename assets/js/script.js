var baseUrl = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/";
var background = "https://files.cults3d.com/uploaders/14108838/illustration-file/716385bd-cfe9-40f4-95c0-131037da6896/poke1_large.jpg";

var pokemonsSelecteds = [];
var pokemonList = [];

// Pegar as cartas do link na baseUrl
function crialista () {
    for (var index = 1; index <= 10; index++) {
        pokemonList.push(`${baseUrl}${index}.png`);
    }
} 

// Checa se está correta a seleçoes das cartas
function verificar(pokemon) {
    console.log(pokemonsSelecteds);
    if (pokemonsSelecteds.length === 0) {
        pokemonsSelecteds.push(pokemon);
        return;
    }
    var [pokemon1] = pokemonsSelecteds;
    var pokemon2 = pokemon;
    setTimeout(() => {
        if (pokemon1.src !== pokemon2.src) {
            esconde(pokemon1);
            esconde(pokemon2);
        }
        pokemonsSelecteds = [];
    }, 500);
}

function esconde(element) {
    element.src = element.getAttribute('data-background');
}

function showCard(event) {
    event.target.src = event.target.getAttribute('data-img');
    verificar(event.target);
}

function createCardElement(pokemonUrl){
    var element = document.createElement("div");
    var imgElement = document.createElement("img");
    imgElement.src = pokemonUrl;
    setTimeout(() => imgElement.src = background, 2000);
    imgElement.setAttribute('data-img', pokemonUrl);
    imgElement.setAttribute('data-background', background);
    element.appendChild(imgElement);
    element.className = "poke-card";
    element.addEventListener('click', showCard);
    var grid = document.getElementById("grid");
    grid.appendChild(element);
}

function sortList() {
    pokemonList.sort(function(a, b) { return (0.5 - Math.random()) })
}

function createGrid() {
    var grid = document.getElementById("grid");
    grid.innerHTML = "";
    sortList();
    populateGrid();
    setTimeout(() => {
        sortList();
        populateGrid();
    },0);
}

function populateGrid() {
    for (var index = 0; index < pokemonList.length; index++) {
        var pokemonUrl = pokemonList[index];
        createCardElement(pokemonUrl);
    }
}

window.addEventListener('load', function() {
    crialista();
    createGrid();
    var button = document.getElementById("start");
    button.addEventListener("click", function() {
        createGrid();
    });
});