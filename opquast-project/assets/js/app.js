// console.log("JS Chargé");
const glossaryBtn  = document.querySelector("#glossary");
const articleGlossary = document.querySelector("#affichage-glossary");
const practiceBtn  = document.querySelector("#practice");
const articlePractice = document.querySelector("#affichage-practice");


const buttons = document.querySelectorAll("button");

buttons.forEach(function(button) {
    button.addEventListener("click", function(event) {
        // console.log(event.target);
        const id = event.target.id;
        
        console.log(id);
            fetch(`process.php?query=${id}`)
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
            console.log(data);
            });
    });
});

// searchGlossary.addEventListener("click", function (event) {
//     // Ici je dois faire une requete AJAX
//     fetch("process.php?query=glossary")
//     .then(function(response) {
//         return response.json();
//     })
//     .then(function(data) {
//         console.log(data);
//         // ici je vais traiter mon objet JS et mettre a à jour mon HTML
//     })
//   });

//   searchPractice.addEventListener("click", function (event) {
//     fetch("process.php?query=practice")
//     .then(function(response) {
//         return response.json();
//     })
//     .then(function(data) {
//         console.log(data);
//         // ici je vais traiter mon objet JS et mettre a à jour mon HTML
//     })   
// });