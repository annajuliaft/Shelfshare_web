document.addEventListener('DOMContentLoaded', function() {
    // Pegue o botão de "Seguir" e o contador de seguidores
    const followBtn = document.getElementById('follow-btn');
    const followersCountElement = document.getElementById('followers-following'); // Aqui pegamos o número de seguidores

    // Ação de clique no botão "Seguir"
    followBtn.addEventListener('click', function() {
        // Pegamos o valor atual de seguidores e o aumentamos de 1
        let currentFollowers = parseInt(followersCountElement.textContent); // Pegamos o número atual
        currentFollowers += 1; // Incrementa o número de seguidores

        // Atualiza o contador de seguidores na página
        followersCountElement.textContent = currentFollowers;

        // Mudando o estado do botão para indicar que o usuário agora está seguindo
        followBtn.textContent = 'Seguindo';  // Alterando o texto do botão
        followBtn.style.backgroundColor = '#b1aac2';  // Mudando a cor do botão para dar feedback
        followBtn.disabled = true;  // Desabilitando o botão para evitar cliques múltiplos
    });
});
