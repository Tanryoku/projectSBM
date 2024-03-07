const connexionForm = document.getElementById('connexion-form');

connexionForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const emailValue = document.getElementById('email').value;
    const passwordValue = document.getElementById('password').value;

    console.log('Email:', emailValue);
    console.log('Password:', passwordValue);
});



const subForm = document.getElementById('inscription-form');

connexionForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const nomValue = document.getElementById('nom').value;
    const prenomValue = document.getElementById('prenom').value;
    const dateNaissanceValue = document.getElementById('dateNaissance').value;
    const emailValue = document.getElementById('email').value;
    const phoneValue = document.getElementById('phone').value;
    const passwordValue = document.getElementById('password').value;
    const verifPasswordValue = document.getElementById('verifPassword').value;

    console.log('Nom:', nomValue);
    console.log('Prenom:', prenomValue);
    console.log('Date de naissance:', dateNaissanceValue);
    console.log('Email:', emailValue);
    console.log('Phone:', phoneValue);
    console.log('Password:', passwordValue);
    console.log('Verification du Password:', verifPasswordValue);
});