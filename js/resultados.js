// Função para exibir os resultados
function displayResults() {
    const urlParams = new URLSearchParams(window.location.search);
    const query = urlParams.get('query');
    const results = JSON.parse(urlParams.get('results'));

    const resultsContainer = document.getElementById('resultados');

    if (results && results.length > 0) {
        results.forEach(result => {
            const bookElement = document.createElement('div');

            bookElement.classList.add('book-result');
            bookElement.innerHTML = `
                <h2>${result.title}</h2>
                <img src="${result.image}" alt="${result.title}">
                <p><strong>Autor:</strong> ${result.authors}</p>
                
            `;
            resultsContainer.appendChild(bookElement);

        });
    } else {
        resultsContainer.innerHTML = `<p>Nenhum resultado encontrado para "${query}".</p>`;
    }
}

// Chama a função para exibir os resultados quando a página for carregada
window.onload = displayResults;