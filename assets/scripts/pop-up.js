document.addEventListener('DOMContentLoaded', () => {
  const popup = document.querySelector('#pop-up-form');
  const openBtn = document.querySelector('#open-form');
  const closeBtn = document.querySelector('#pop-up-form .close-pop-up');

  if (!popup) return;

  openBtn?.addEventListener('click', () => {
    popup.classList.add('open');
  });

  closeBtn?.addEventListener('click', () => {
    popup.classList.remove('open');
  });



  const popupSuccess = document.querySelector('#pop-up-success');
  const openBtnSuccess = document.querySelector('#open-success');
  const closeBtnSuccess = document.querySelector('#pop-up-success .close-pop-up');

  if (!popupSuccess) return;

  openBtnSuccess?.addEventListener('click', () => {
    popupSuccess .classList.add('open');
  });

  closeBtnSuccess?.addEventListener('click', () => {
    popupSuccess .classList.remove('open');
  });
});
