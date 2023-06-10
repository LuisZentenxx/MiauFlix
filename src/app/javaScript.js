//TMDB

const API_KEY = 'api_key=2da2b603a5f727a25814914e02d4cd35';
const BASE_URL ='https://api.themoviedb.org/3';
const API_URL = BASE_URL + '/discover/movie?sort_by=popularity.desc&'
+ API_KEY;
const IMG_URL = 'https://image.tmdb.org/t/p/w500';
const searchURL = BASE_URL + '/search/movie?'+ API_KEY;

// Arreglo de generos
const genres = [
    {
      "id": 28,
      "name": "Action"
    },
    {
      "id": 12,
      "name": "Adventure"
    },
    {
      "id": 16,
      "name": "Animation"
    },
    {
      "id": 35,
      "name": "Comedy"
    },
    {
      "id": 80,
      "name": "Crime"
    },
    {
      "id": 99,
      "name": "Documentary"
    },
    {
      "id": 18,
      "name": "Drama"
    },
    {
      "id": 10751,
      "name": "Family"
    },
    {
      "id": 14,
      "name": "Fantasy"
    },
    {
      "id": 36,
      "name": "History"
    },
    {
      "id": 27,
      "name": "Horror"
    },
    {
      "id": 10402,
      "name": "Music"
    },
    {
      "id": 9648,
      "name": "Mystery"
    },
    {
      "id": 10749,
      "name": "Romance"
    },
    {
      "id": 878,
      "name": "Science Fiction"
    },
    {
      "id": 10770,
      "name": "TV Movie"
    },
    {
      "id": 53,
      "name": "Thriller"
    },
    {
      "id": 10752,
      "name": "War"
    },
    {
      "id": 37,
      "name": "Western"
    }
  ]

// variables globales
const main = document.getElementById('main');
const form = document.getElementById('form');
const search = document.getElementById('search')
const tagsEl = document.getElementById('tags');
const favoriteMovies = [];

const prev = document.getElementById('prev')
const next = document.getElementById('next')
const current = document.getElementById('current')

var currentPage = 1;
var nextPage = 2;
var prevPAge = 3;
lastUrl = '';

var totalPAges = 100;

var selectedGenre = []
setGenre();
function setGenre(){
    tagsEl.innerHTML = '';
    genres.forEach(genre => {

        const t = document.createElement('div');
        t.classList.add('tag');
        t.id = genre.id;
        t.innerText = genre.name;

        t.addEventListener('click', () => {
            if (selectedGenre.length == 0) {
                selectedGenre.push(genre.id);
            }else{
                if (selectedGenre.includes(genre.id)) {
                    selectedGenre.forEach((id, idx) => {
                        if (id == genre.id) {
                            selectedGenre.splice(idx, 1);
                        }
                    }) 
                }else{
                    selectedGenre.push(genre.id);
                }
            }
            console.log(selectedGenre)
            getMovies(API_URL + '&with_genres=' + encodeURI(selectedGenre.join(',')))
            highlightSelection()
        })
        tagsEl.append(t);
    })
}

function highlightSelection() {
    const tags = document.querySelectorAll('.tag');
    tags.forEach(tag => {
        tag.classList.remove('highlight')
    })
    clearBtn()
    if (selectedGenre.length !== 0) {
        selectedGenre.forEach(id => {
            const highlightedTag = document.getElementById(id);
            highlightedTag.classList.add('highlight');
        })
    }
}

function clearBtn() {

    let clearBtn = document.getElementById('clear');
    if (clearBtn) {
        clearBtn.classList.add('highlight')

    }else{
        let clear = document.createElement('div');
        clear.classList.add('tag', 'highlight');
        clear.id = 'clear';
        clear.innerText = 'Clear All'
        clear.addEventListener('click', () => {
            selectedGenre = [];
            setGenre();
            getMovies(API_URL);
        })
        tagsEl.append(clear);
    }
}

getMovies(API_URL);

function getMovies(url) {
    fetch(url)
        .then(res => res.json())
        .then(data => {
            console.log(data.results)
            if (data.results.length !==0) {
                showMovies(data.results);
            }else{
                main.innerHTML = '<h1 class="no-results">No Results Found</h1>'
            }
        })
}

function showMovies(data) {
  main.innerHTML = '';
  data.forEach(movie => {
      const { title, poster_path, vote_average, overview } = movie;
      const movieE1 = document.createElement('div');
      movieE1.classList.add('movie');
      movieE1.innerHTML =
          `<img src="${poster_path ? IMG_URL + poster_path : "http://via.placeholder.com/1080x1580"}" alt="${title}">
  
          <div class="movie-info">
              <h3>${title}</h3>
              <span class="${getColor(vote_average)}">${vote_average}
              </span>
          </div>
          <div class="overview">
              <h3>OverView</h3>
              ${overview}
          </div>`;
  
      // Agregar evento de doble clic para agregar o eliminar de favoritos
      movieE1.addEventListener('dblclick', () => {
          const index = favoriteMovies.findIndex(favoriteMovie => favoriteMovie.title === movie.title);
          if (index === -1) {
              favoriteMovies.push(movie);
              console.log('Película agregada a favoritos:', movie);
          } else {
              favoriteMovies.splice(index, 1);
              console.log('Película eliminada de favoritos:', movie);
          }
  
          localStorage.setItem('favoriteMovies', JSON.stringify(favoriteMovies));
      });
  
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


// formulario de buscar

form.addEventListener('submit',(e)=>{
    e.preventDefault();

    const searchTerm = search.value;
    selectedGenre = [];
    highlightSelection()
    
    if(searchTerm){
        getMovies(searchURL+'&query='+searchTerm)
    }else{
        getMovies(API_URL);
    }
})

