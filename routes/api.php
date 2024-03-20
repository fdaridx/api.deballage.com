<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartLineController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RewiewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




// Users
    // route pour authentifier un utilisateur | Params: email, password
    Route::post('authenticate', [UserController::class, 'authenticate']); //verifié

    // route pour afficher la liste des utilisateurs | Contraintes: seulement l'admin peut acceder 
    Route::get('/users', [UserController::class, 'index']); //verifié

    /* route pour enregistrer un user | Contraintes: tout le monde peut en creer  
    Params: first_name, last_name, state,  type(user ou seller), phone, gender(masculin ou feminin), email, password,
    info (ici c'est un tableau associatif. Exemple de valeur pour le champ info: ['age' => '25 ans']),
    session_id (qui est une clé string unique encode au format uuid v4 généré par la platforme front pour chaque visiteur)
    */ 
    Route::post('/users', [UserController::class, 'store']); //verifié

    /* route pour recuperer un utilisateur grace à son id | Contraintes: seulement l'admin peut acceder 
    Params: id
    */
    Route::get('/users/show', [UserController::class, 'show']); 

    /* route pour modifier les information d'un utilisateur | Contraintes: tout le monde à condition que l'action soit pour soi 
    Params: first_name, last_name, state, type(user ou seller), phone, gender(masculin ou feminin), email, password, info
    */
    Route::put('/users/update', [UserController::class, 'update']); 

    /* route pour changer le mot de passe d'un utilisateur grace à son id | Contraintes: tout le monde à condition que l'action soit pour soi 
    Params: new_password
    */
    Route::put('/users/change_password', [UserController::class, 'password']); //verifié

    /* route pour changer l'etat d'un compte utilisateur | Contraintes: seulement l'admin peut acceder 
    Params: status
    Cas d'utilisation: si status = false le champ state de la table utilsateur sera 'refuse' cela signifie que l'admin desapprouve la création du compte
                       si status = true le champ state de la table utilsateur sera 'enabled' cela signifie que l'admin approuve la création du compte
                       si status = disabled le champ state de la table utilsateur sera 'disabled' cela signifie que l'admin desactive le compte
    */
    Route::put('/users/state', [UserController::class, 'state']); //verifié

    /* route pour changer le type d'un compte utilisateur | Contraintes: tout le monde 
    Params: type
    Cas d'utilisation: si type = user le champ type de la table utilsateur sera 'user' cela le compte sera simple utilisateur
                       si type = seller le champ type de la table utilsateur sera 'seller' cela le compte sera vendeur
    */
    Route::put('/users/type', [UserController::class, 'type']); //verifié

    /* route pour consulter la liste des vendeurs et eventuellement effectuer une recherche pour un vendeur specifique | Contraintes: tout le monde 
    Params: search (qui peut contenir un nom ou un prenom entier ou des lettres)
    Cas d'utilisation: si search = null || n'existe pas : tous les vendeurs seront retournés
                       sinon les vendeurs en fonctions du critere de recherche seront retournés
    */
    Route::get('/users/sellers', [UserController::class, 'searchSeller']); //verifié

    /* route pour se deconnecter | Contraintes: tout le monde
    Params: id (de l'utilisateur)
    */
    Route::get('/logout/{id}', [UserController::class, 'logout']); //verifié



// Categories de produits
    // route pour afficher la liste des categories de produits | Contraintes: tout le monde peut acceder 
    Route::get('/categories', [CategoryController::class, 'index']); //verifié

    /* route pour enregistrer une categorie de produit | Contraintes: admin et seller peut acceder 
    Params: categorie_id (peut etre null. c'est dans le cas ou on voudrait avooir une sous categorie), name, description,
    profile (qui est l'image),
    */ 
    Route::post('/categories', [CategoryController::class, 'store']); //verifié

    /* route pour recuperer une categorie de produit grace à son id | Contraintes: seul le seller peut acceder 
    Params: id
    */ 
    Route::get('/categories/show', [UserController::class, 'show']); //verifié


    /* route pour modifier une categorie de produit | Contraintes: seller et admin
    Params:categorie_id (peut etre null. c'est dans le cas ou on voudrait avooir une sous categorie), name, description,
    profile (qui est l'image)
    */
    Route::put('/categories/update', [CategoryController::class, 'update']); //verifié

    /* route pour supprimer une categorie de produit | Contraintes: seller et admin
    Params: id( de la categorie)
    */
    Route::delete('/categories/delete', [CategoryController::class, 'destroy']); 


// Products
    /* route pour afficher la liste des produits | Contraintes: tout le monde 
    Params: aucun
    */
    Route::get('/products', [ProductController::class, 'index']); //verifié


    /* route pour ajouter un produits | Contraintes: seller
    Params: categorie_id, shop_id, name, description, price, special_price, 
    info(informations supplementaire du produit sous forme de tableau associatif Ex: ['size' => 'm', 'couleur' => 'noir',])
    */
    Route::post('/products', [ProductController::class, 'store']); //verifié

    /* route pour afficher un produit | Contraintes: tout le monde
    Params: id (du produit)
    */
    Route::get('/products/show', [ProductController::class, 'show']); //verifié


    /* route pour modifier un produit | Contraintes: seller
    Params:id(du produit à modifier), categorie_id, shop_id, name, description, price, special_price, 
    info(informations supplementaire du produit sous forme de tableau associatif Ex: ['size' => 'm', 'couleur' => 'noir',])
    */
    Route::put('/products/update', [ProductController::class, 'update']); //verifié


// Reviews
    /* route pour laisser les commentaires | Contraintes: utilisateurs 
    Params: rating, text, product_id (si ca concerne un produit), shop_id (si ca concerne une boutique)
    */
    Route::post('/reviews', [RewiewController::class, 'store']); //verifié




// Carts
    /* route pour creer un panier | Contraintes: seuelment les visiteur
    Params: session_id,
    Cas d'utilisation ici on a juste besoin de l'id de la session genere pas la plateforme pour reconnaitre le visiteur
    */
    Route::post('/carts/store', [CartController::class, 'store']); // verifié

// Favorites
    /* route pour ajouter un favorie par l'utilisateur | Contraintes: les visiteurs, acheteurs
    Params: product_id, user_id_2(vendeur), user_id(acheteur), session_id(pour l'invité)
    Cas d'utilisation ici on peut ajouter comme favorie soit un produit soit un vendeur
    */
    Route::post('/favorites/store', [FavoriteController::class, 'store']); // verifié





Route::middleware('auth:sanctum')->group(function () {  
    
    // CartLines
        /* route pour ajouter les produits dans le panier | Contraintes: utilisateurs uniquement
        Params: product_id, cart_id, quantity, attributesValues
        */
        Route::post('/cartlines/store', [CartLineController::class, 'store']); // verifié

        

    // Commandes
        /* route pour initier les commandes | Contraintes: utilisateurs uniquement
        Params: payment_id(optionel)
        , qwater_id(pour le quartier de livraison), qwater_name(optionel), city_id(optionel), city_name(optionel), 
        country_id(optionel), country_name(optionel), 
        Cas d'utilisation: si qwater_id n'existe pas && city_id n'existe pas && country_id n'existe pas il faut les params
        country_name, city_name et qwater_name afin de creer le country, city, qwater
                           si qwater_id n'existe pas && city_id n'existe pas && country_id existe il faut les params
        city_name et qwater_name afin de creer la city et le qwater
                           si qwater_id n'existe pas && city_id existe il faut le param qwater_name afin de creer le qwater
        */
        Route::post('/commandes/store', [CommandController::class, 'store']); // verifié

        /* route pour notifié de la confirmation de la commandes | Contraintes: sellers uniquement
        Params: id (de la commande), state(
            delivered pour dire que le fournisseur a livrer la commande, 
            confirmed pour dire que le fournisseur livrera, 
            cancel pour dire que l'utilisateur annule sa commande), message(message de la notification)
        */
        Route::post('/commandes/state', [CommandController::class, 'state']); 

        /* route afficher l'historique des commandes de l'utilisateur | Contraintes: seul l'user concerné
        Params: aucun
        */
        Route::get('commandes/users/history', [CommandController::class, 'usersHistory']); //verifié

        /* route pour supprimer une commande | Contraintes: seller et admin
        Params: id( de la categorie)
        */
        Route::delete('/commandes/delete', [CommandController::class, 'destroy']); 

});








