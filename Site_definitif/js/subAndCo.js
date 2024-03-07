// CONNEXION

const connexionForm = document.getElementById('connexion-form');

connexionForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const emailValue = document.getElementById('email').value;
    const passwordValue = document.getElementById('password').value;

    console.log('Email:', emailValue);
    console.log('Password:', passwordValue);
});


// INSCRIPTION

// RÉCUPÉRATION DES INFORMATIONS
const subForm = document.getElementById('inscription-form');

subForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const nomValue = document.getElementById('nom').value;
    const prenomValue = document.getElementById('prenom').value;
    const dateNaissanceValue = document.getElementById('dateNaissance').value;
    const emailValue = document.getElementById('email').value;
    const phoneValue = document.getElementById('phone').value;
    const passwordValue = document.getElementById('password').value;
    const verifPasswordValue = document.getElementById('verifPassword').value;

    // console.log('Nom:', nomValue);
    // console.log('Prénom:', prenomValue);
    // console.log('Date de naissance:', dateNaissanceValue);
    // console.log('Email:', emailValue);
    // console.log('Phone:', phoneValue);
    // console.log('Mot de passe:', passwordValue);
    // console.log('Vérification du mot de passe:', verifPasswordValue);
});

// VÉRIFICATION DU MOT DE PASSE
verifPasswordInput.addEventListener('input', () => {
    const passwordValue = passwordInput.value;
    const verifPasswordValue = verifPasswordInput.value;


    if (passwordValue === verifPasswordValue) {
        console.log('Les mots de passe correspondent.');
    } else {
        console.log('Les mots de passe ne correspondent pas.');
    }
});
