// on importe express
const express = require("express");

// on importe la connexion a la BDD
const connection = require("./db");

// on instancie le router
const router = express.Router();

router.get("/", (request, response) => {
    const sql = 'SELECT * FROM users';

    // ensuite je vais éxécuter la requête 
    connection.query(sql, (error, result) => {
        if(error) return console.error(error);
        console.log(result);
    });
});

// on va créer une route qui nous permet de récupérer un user par son id
// l'id sera récupéré à partir de l'url
router.get("/:id", (request, response) => {
    const sql = "SELECT * FROM users WHERE id = ?";
    // ensuite je place ma requête
    const {id} = request.params;
    const {name} = request.params;
 
    // je vais éxécuter ma requête
    connection.query(sql,[[id],[name]],(error, result) => {
        if(error) return console.log(error.message);
        // ici j'efface ma console pour que ce soit plus facile à lire
        console.clear();
        console.log(result);
        response.status(200);
        response.send(result[0].name);
    });
    return console.log(id);
});
router.delete("/:id", (request,response) =>{
    const sql = "DELETE FROM users WHERE id = ?";
    const {id} = request.params;

    connection.query(sql, [id], (error, result) => {
        if(error) {
            response.status(500);
            console.log(result)
            response.send ("Erreur serveur");
        };
        response.status(200);
        response.send(`Utilisateur ${id} supprimé`);
    });
    
});
// on va créer une route permettant d'insérer un nouvel utiliateur dans la BDD
router.post("/", (request, response) => {
    // const user = {
    //     name: "Baptise le Conno",
    //     email:"BaptConno@test.com",
    // };
    const user = request.body;

    const sql = "INSERT INTO users SET ?";
    connection.query(sql, [user] ,(error, rows) =>{
        if(error) {
            response.status(500);
            response.send("Erreur enregistrement utilisateur");
        };
        response.status(200);
        response.send(`Utilisateur crée, ${rows.affectedRows} modifiés`);
    });
});


// on va créer la route qui va nous permettre de faire un update sur la BDD
router.put("/:id",(request, response) => {
    const {id} = request.params;
    const sql = "UPDATE users SET ? WHERE id = ?";
    const user = request.body;

    connection.query(sql, [user, id], (error, rows) => {
        if(error) {
            response.status(500);
            response.send(`Impossible de mettre à jour l'utilisateur ${id}`);
        };
        response.status(200);
        response.send(`Utilisateur ${id} mis à jour`);
    });
});

module.exports = router;