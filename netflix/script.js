
document.querySelector('.get-started').addEventListener('click', function() {
    const email = document.querySelector('input[type="email"]').value;
    if (email) {
      alert(`Faleminderit! Email-i juaj eshte: ${email}`);
    } else {
      alert('Ju lutem vendosni nje email të vlefshem!');
    }
  });
  