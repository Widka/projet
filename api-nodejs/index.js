// c'est dans le fichier index.js que je vais créer mon serveur node
// on importe le framework express
const express = require("express");

// ici je vais importer mon fichier routes
const usersRoutes = require("./users");

// on va créer une instance du serveur
const app = express();

// on va définir sur quel port le serveur va écouter les requêtes http
const port = "5000";

// ici on va utiliser le middleware body-parser de manière globale pour toutes les routes
app.use(express.json());

app.use(express.static("./public"))
// on crée un middleware qui va érer toutes les requêtes sur les routes commençant par /users
app.use("/users", usersRoutes);

app.get("/", (request, response) => {
    response.status(200);
    response.render("index");
})

   
// on va créer une route qui va nous permettre de récupérer les users de notre database 
// et de les afficher en console
// on veut dire au serveur d'écouter les requêtes entrantes
    app.listen(port, () => {
        console.log(`Serveur démarré sur le port ${port}`);
    });
