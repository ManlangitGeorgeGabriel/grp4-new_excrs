// script.js           

document.querySelectorAll('.team-member a').forEach(link => {
    link.addEventListener('click', () => {
        alert('You clicked on a team member!');
    });
});

const textElement = document.querySelector('.wave-text');
const text = textElement.innerText;
textElement.innerHTML = text.split('').map(char => `<span>${char}</span>`).join('');



