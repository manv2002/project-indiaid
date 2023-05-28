const btn = document.getElementById('donatetongo');

btn.addEventListener('click', () => {
  const form = document.getElementById('form');

  if (form.style.visibility === 'hidden') {
    form.style.visibility = 'visible';
  } else {
    form.style.visibility = 'hidden';
  }
});