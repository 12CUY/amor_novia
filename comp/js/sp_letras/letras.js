const words = ['HTML', 'CSS', 'JavaScript', 'Sopa', 'Letras']; // Palabras ocultas

const gridSize = 10; // Tamaño de la cuadrícula
const wordSearch = document.getElementById('word-search');
const wordList = document.getElementById('word-list');

// Función para crear la cuadrícula de letras
function createGrid() {
    for (let i = 0; i < gridSize; i++) {
        const row = document.createElement('div');
        row.classList.add('row');
        for (let j = 0; j < gridSize; j++) {
            const cell = document.createElement('div');
            cell.classList.add('cell');
            cell.textContent = String.fromCharCode(65 + Math.floor(Math.random() * 26)); // Genera una letra aleatoria
            row.appendChild(cell);
        }
        wordSearch.appendChild(row);
    }
}

// Función para ocultar las palabras en la cuadrícula
function hideWords() {
    words.forEach(word => {
        const direction = Math.random() < 0.5 ? 'horizontal' : 'vertical'; // Dirección aleatoria
        const startRow = Math.floor(Math.random() * gridSize);
        const startCol = Math.floor(Math.random() * gridSize);
        let endRow, endCol;

        if (direction === 'horizontal') {
            endRow = startRow;
            endCol = startCol + word.length - 1;
        } else {
            endRow = startRow + word.length - 1;
            endCol = startCol;
        }

        if (endRow < gridSize && endCol < gridSize) {
            let wordFound = true;
            for (let i = 0; i < word.length; i++) {
                const cell = wordSearch.children[startRow + (direction === 'vertical' ? i : 0)].children[startCol + (direction === 'horizontal' ? i : 0)];
                if (cell.textContent !== '' && cell.textContent !== word[i]) {
                    wordFound = false;
                    break;
                }
            }
            if (wordFound) {
                for (let i = 0; i < word.length; i++) {
                    const cell = wordSearch.children[startRow + (direction === 'vertical' ? i : 0)].children[startCol + (direction === 'horizontal' ? i : 0)];
                    cell.textContent = word[i];
                }
            }
        }
    });
}

// Función para mostrar la lista de palabras
function displayWordList() {
    words.forEach(word => {
        const listItem = document.createElement('div');
        listItem.textContent = word;
        wordList.appendChild(listItem);
    });
}

// Función para resolver el juego
function solve() {
    const cells = document.querySelectorAll('.cell');
    cells.forEach(cell => {
        cell.style.backgroundColor = 'transparent';
    });
    const wordItems = document.querySelectorAll('#word-list div');
    wordItems.forEach(item => {
        item.style.textDecoration = 'none';
    });
}

createGrid();
hideWords();
displayWordList();
