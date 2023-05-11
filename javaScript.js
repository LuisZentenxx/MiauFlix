//TMDB

const API_KEY = 'api_key=2da2b603a5f727a25814914e02d4cd35';
const BASE_URL ='http://api.themoviedb.org/3';
const API_URL = BASE_URL + '/discover/movie?sort_by=popularity.desc&'
+ API_KEY;
const IMG_URL = 'https://image.tmdb.org/t/p/w500';
const searchURL = BASE_URL + '/search/movie?'+ API_KEY;

// variables globales
const main = document.getElementById('main');
const form = document.getElementById('form');
const search = document.getElementById('search')

getMovies(API_URL);

function getMovies(url) {
    fetch(url)
        .then(res => res.json())
        .then(data => {
            console.log(data.results)
            showMovies(data.results);
        })
}

function showMovies(data){
    main.innerHTML= '';
    data.forEach(movie =>{
        const {title, poster_path,vote_average,overview} = movie;
        const movieE1 = document.createElement('div');
        movieE1.classList.add('movie');
        movieE1.innerHTML =
        `<img src="${IMG_URL+poster_path}" alt="${title}">

        <div class="movie-info">
            <h3>${title}</h3>
            <span class="${getColor(vote_average)}">${vote_average}
            </span>
        </div>
        <div class="overview">
            <h3>OverView</h3>
            ${overview}
        </div>`
        
        main.appendChild(movieE1);
    });
}

function getColor(vote) {
    if(vote>= 8){
        return 'green'
    }else if(vote >= 5){
        return "orange"
    }else{
        return 'red'
    }
}

// intervalo de slider

document.addEventListener("DOMContentLoaded", function() {
    new bootstrap.Carousel(document.getElementById("carouselExampleControls"), {
        interval: 4000, // Ajusta el valor a la cantidad de milisegundos que deseas para la duración de cada diapositiva
        pause: false
    });
});


// formulario de buscar

form.addEventListener('submit',(e)=>{
    e.preventDefault();

    const searchTerm = search.value;
    
    if(searchTerm){
        getMovies(searchURL+'&query='+searchTerm)
    }else{
        getMovies(API_URL);
    }
})