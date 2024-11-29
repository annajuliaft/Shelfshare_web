const dialog = document.getElementById('notification-dialog');
const openDialogBtn = document.querySelector('.open-dialog-btn');

openDialogBtn.addEventListener('click', () => {
  dialog.style.display = 'flex';
});

dialog.addEventListener('click', (event) => {
  if (event.target === dialog) {
    dialog.style.display = 'none';
  }
});

// Alternar entre "Seguir" e "Seguindo"
document.querySelectorAll('.action-btn').forEach((button) => {
  button.addEventListener('click', () => {
    if (button.classList.contains('following')) {
      button.textContent = 'Seguir';
      button.classList.remove('following');
      button.style.backgroundColor = '#301c6e'; 
    } else {
      button.textContent = 'Seguindo';
      button.classList.add('following');
      button.style.backgroundColor = '#aaa'; 
    }
  });
});
