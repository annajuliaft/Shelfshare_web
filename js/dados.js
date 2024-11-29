document.addEventListener('DOMContentLoaded', function () {
    // Carrossel: Seleciona os botões e os itens do carrossel
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const carouselItems = document.querySelector('.carousel-items');
    const itemWidth = document.querySelector('.item').offsetWidth;
    let scrollPosition = 0;

    // Função de rolagem do carrossel
    nextButton.addEventListener('click', () => {
        if (scrollPosition < carouselItems.scrollWidth - carouselItems.clientWidth) {
            scrollPosition += itemWidth + 20; // O valor 20 é a margem entre os itens
            carouselItems.style.transform = `translateX(-${scrollPosition}px)`;
        }
    });

    prevButton.addEventListener('click', () => {
        if (scrollPosition > 0) {
            scrollPosition -= itemWidth + 20;
            carouselItems.style.transform = `translateX(-${scrollPosition}px)`;
        }
    });

    // Seleção de miniaturas
    const thumbnails = document.querySelectorAll('.thumbnails img');
    const mainImage = document.getElementById('main-image');

    // Evento de "mouseover" nas miniaturas para trocar a imagem principal
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function () {
            // Obtém o caminho da miniatura sobre a qual o mouse passou
            const newSrc = this.src;
            console.log('Imagem sobrevoada:', newSrc); // Verifica se o caminho da imagem está correto

            // Atualiza o src da imagem principal com o caminho da miniatura
            mainImage.src = newSrc;

            // Realça a miniatura selecionada (opcional)
            thumbnails.forEach(img => img.classList.remove('active')); // Remove a classe 'active' de todas as miniaturas
            this.classList.add('active'); // Adiciona a classe 'active' à miniatura sobre a qual o mouse passou
        });
    });
});
