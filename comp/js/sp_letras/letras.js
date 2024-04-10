const words = ['michuna', 'amor', 'ternura', 'gruñona', 'teamo']; // Palabras ocultas
const gridSize = 10; // Tamaño de la cuadrícula
const wordSearch = document.getElementById('word-search');
const wordList = document.getElementById('word-list');
const selectedWords = [];

// Función para crear la cuadrícula de letras
function createGrid() {
    for (let i = 0; i < gridSize; i++) {
        const row = document.createElement('div');
        row.classList.add('row');
        for (let j = 0; j < gridSize; j++) {
            const cell = document.createElement('div');
            cell.classList.add('cell');
            cell.textContent = String.fromCharCode(65 + Math.floor(Math.random() * 26)); // Genera una letra aleatoria
            cell.addEventListener('click', () => toggleCell(cell));
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
                    cell.dataset.word = word; // Guarda la palabra en el atributo de datos del elemento
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
        listItem.classList.add('word-item');
        listItem.addEventListener('click', () => toggleWord(listItem));
        wordList.appendChild(listItem);
    });
}

// Función para resolver el juego
function solve() {
    const cells = document.querySelectorAll('.cell');
    cells.forEach(cell => {
        cell.style.backgroundColor = 'transparent';
        cell.classList.remove('selected'); // Elimina cualquier clase de selección previa
    });
    const wordItems = document.querySelectorAll('#word-list .word-item');
    wordItems.forEach(item => {
        item.classList.remove('selected');
    });
    selectedWords.length = 0;
}

// Función para marcar o desmarcar una celda
function toggleCell(cell) {
    if (!cell.classList.contains('selected')) {
        cell.classList.add('selected');
    } else {
        cell.classList.remove('selected');
    }
}

// Función para marcar o desmarcar una palabra
function toggleWord(wordItem) {
    if (!wordItem.classList.contains('selected')) {
        wordItem.classList.add('selected');
        selectedWords.push(wordItem.textContent);
    } else {
        wordItem.classList.remove('selected');
        const index = selectedWords.indexOf(wordItem.textContent);
        if (index !== -1) {
            selectedWords.splice(index, 1);
        }
    }
}

createGrid();
hideWords();
displayWordList();
