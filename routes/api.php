<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QwaterController;
use App\Http\Controllers\RewiewController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AtributeController;
use App\Http\Controllers\CartLineController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\CommandLineController;
use App\Http\Controllers\AtributeProductController;




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
    Route::get('/users/show/{user}', [UserController::class, 'show']); 

    /* route pour modifier les information d'un utilisateur | Contraintes: tout le monde à condition que l'action soit pour soi 
    Params: first_name, last_name, state, type(user ou seller), phone, gender(masculin ou feminin), email, password, info
    */
    Route::put('/users/update/{user}', [UserController::class, 'update']); 

    
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
    Route::get('/logout/{user}', [UserController::class, 'logout']); //verifié


    /* route pour supprimer un user | Contraintes: tout le monde
    Params: id (de l'utilisateur)
    */
    Route::delete('/users/delete/{user}', [UserController::class, 'destroy']); //verifié


// Products
    /* route pour afficher la liste des produits | Contraintes: tout le monde 
    Params: aucun
    */
    Route::get('/products', [ProductController::class, 'index']); //verifié


    /* route pour ajouter un produits | Contraintes: seller
    Params: category_id, shop_id, name, description, price, special_price, 
    info(informations supplementaire du produit sous forme de tableau associatif Ex: ['size' => 'm', 'couleur' => 'noir',])
    */
    Route::post('/products', [ProductController::class, 'store']); //verifié

    /* route pour afficher un produit | Contraintes: tout le monde
    Params: id (du produit)
    */
    Route::get('/products/show/{product}', [ProductController::class, 'show']); //verifié


    /* route pour afficher les produits en fonction d'un champ | Contraintes: tout le monde
    Params: option (qui est un tableau par Ex si on veut les produits appartenant à une categorie option aura comme contenu
    ['category_id' => 1])
    */
    Route::get('/products/options/{option}', [ProductController::class, 'option']); //verifié

    /* route pour modifier un produit | Contraintes: seller
    Params:id(du produit à modifier), category_id, shop_id, name, description, price, special_price, 
    info(informations supplementaire du produit sous forme de tableau associatif Ex: ['size' => 'm', 'couleur' => 'noir',])
    */
    Route::put('/products/update/{product}', [ProductController::class, 'update']); //verifié

    /* route pour changer l'etat d'un produit | Contraintes: tout le monde
    Params: id du produit et le state 
    */
    Route::get('/products/state/{product}/{state}', [ProductController::class, 'state']); //verifié


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


// Categories de produits

        // route pour afficher la liste des categories de produits | Contraintes: tout le monde
        Route::get('/categories', [CategoryController::class, 'index']); //verifié

        /* route pour enregistrer une categorie de produit | Contraintes: admin et seller 
        Params: category_id (peut etre null. c'est dans le cas ou on voudrait avoir une sous categorie), name, description,
        profile (qui est l'image),
        */ 
        Route::post('/categories', [CategoryController::class, 'store']); //verifié

        /* route pour recuperer une categorie de produit grace à son id | Contraintes: seul le seller peut acceder 
        Params: id
        */ 
        Route::get('/categories/show/{category}', [CategoryController::class, 'show']); //verifié


        /* route pour modifier une categorie de produit | Contraintes: seller et admin
        Params:category_id (peut etre null. c'est dans le cas ou on voudrait avoir une sous categorie), name, description,
        profile (qui est l'image)
        */
        Route::put('/categories/update/{category}', [CategoryController::class, 'update']); // verifié

        
        /* route pour supprimer une categorie de produit | Contraintes: seller et admin
        Params: id( de la categorie)
        */
        Route::delete('/categories/delete/{category}', [CategoryController::class, 'destroy']); // verifié

    // Attributes
        /* route pour afficher la liste des attributs| Contraintes: admin et seller 
        Params: name
        */ 
        Route::get('/attributes', [AtributeController::class, 'index']); //verifié

        /* route pour enregistrer un attribut| Contraintes: admin et seller 
        Params: name
        */ 
        Route::post('/attributes', [AtributeController::class, 'store']); //verifié


        /* route pour modifier un attributs| Contraintes: admin et seller 
        Params: name
        */ 
        Route::put('/attributes/update/{attribute}', [AtributeController::class, 'update']); //verifié

    // Properties

        /* route pour la liste des properties | Contraintes: admin et seller 
        Params: atribute_id, value
        */ 
        Route::get('/properties', [PropertyController::class, 'index']); //verifié

        /* route pour enregistrer une property| Contraintes: admin et seller 
        Params: atribute_id, value
        */ 
        Route::post('/properties', [PropertyController::class, 'store']); //verifié

        /* route pour modifier une property| Contraintes: admin et seller 
        Params: atribute_id, value
        */ 
        Route::put('/properties/update/{property}', [PropertyController::class, 'update']); //verifié


    // Settings
        /* route pour afficher la liste des settings| Contraintes: admin et seller 
        Params: name
        */ 
        Route::get('/settings', [SettingController::class, 'index']); //verifié

        /* route pour enregistrer un setting| Contraintes: admin et seller 
        Params: name
        */ 
        Route::post('/settings', [SettingController::class, 'store']); //verifié


        /* route pour modifier un settings| Contraintes: admin et seller 
        Params: name
        */ 
        Route::put('/settings/update/{setting}', [SettingController::class, 'update']); //verifié
    

    // Countries
        /* route pour afficher la liste des countries| Contraintes: admin et seller 
        Params: name
        */ 
        Route::get('/countries', [CountryController::class, 'index']); //verifié

        /* route pour enregistrer un country| Contraintes: admin et seller 
        Params: name
        */ 
        Route::post('/countries', [CountryController::class, 'store']); //verifié


        /* route pour modifier un country| Contraintes: admin et seller 
        Params: name
        */ 
        Route::put('/countries/update/{country}', [CountryController::class, 'update']); //verifié

    // Qwaters
        /* route pour afficher la liste des qwaters| Contraintes: admin et seller 
        Params: name
        */ 
        Route::get('/qwaters', [QwaterController::class, 'index']); //verifié

        /* route pour enregistrer un qwater| Contraintes: admin et seller 
        Params: name
        */ 
        Route::post('/qwaters', [QwaterController::class, 'store']); //verifié


        /* route pour modifier un qwater| Contraintes: admin et seller 
        Params: name
        */ 
        Route::put('/qwaters/update/{qwater}', [QwaterController::class, 'update']); //verifié


    // Cities
        /* route pour afficher la liste des cities| Contraintes: admin et seller 
        Params: name
        */ 
        Route::get('/cities', [CityController::class, 'index']); //verifié

        /* route pour enregistrer un city| Contraintes: admin et seller 
        Params: name
        */ 
        Route::post('/cities', [CityController::class, 'store']); //verifié


        /* route pour modifier un city| Contraintes: admin et seller 
        Params: name
        */ 
        Route::put('/cities/update/{city}', [CityController::class, 'update']); //verifié

    // Commandes

        /* route afficher la liste des commandes | Contraintes: admin et seller
        Params: aucun
        */
        Route::get('/commandes', [CommandController::class, 'index']); //verifié


        /* route pour la liste des commandes | Contraintes: admin et seller
        Params: state(optionel et prend les valeurs init, enabled et diasbled)
        Cas d'utilisation: si state n'existe pas alors toutes les commandes sont renvoyées
                           sinon les commandes dont le state est renseign"e seront renvoyés
        */

        Route::get('/commandes/{state?}', [CommandController::class, 'index']); // verifié


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
        Route::post('/commandes', [CommandController::class, 'store']); // verifié

        /* route afficher l'historique des commandes de l'utilisateur | Contraintes: seul l'user concerné
        Params: aucun
        */
        Route::get('commandes/users/history', [CommandController::class, 'usersHistory']); //verifié

        /* route pour supprimer une commande | Contraintes: seller et admin
        Params: id( de la categorie)
        */
    
        Route::delete('/commandes/delete', [CommandController::class, 'destroy']); 



    // CommandsLines
        /* route pour lister les produits de la commandes | Contraintes: user, seller et admin
        Params: quantity, product_id, attributes_values(s'il y'en a) et id (pour la commande)
        */
        Route::get('/commandeslines/{id}', [CommandLineController::class, 'index']);  // verifié


        /* route pour ajouter un produit à une commande sans passer par le panier | Contraintes: user, seller et admin
        Params: quantity, product_id, attributes_values(s'il y'en a) et id (pour la commande)
        */
        Route::post('/commandeslines', [CommandLineController::class, 'store']);  // verifié


        /* route pour modifier une ligne de commande | Contraintes: user, seller et admin
        Params: quantity, product_id, attributes_values(s'il y'en a) et id (pour la commande)
        */
        Route::put('/commandeslines/update/{commandLine}', [CommandLineController::class, 'update']);  // verifié


        /* route pour notifié de la confirmation de la commandes | Contraintes: sellers et admin
        Params: id (de la ligne de commande), state(
            delivered pour dire que le fournisseur a livrer la commande, 
            confirmed pour dire que le fournisseur livrera, 
            cancel pour dire que l'utilisateur annule sa commande), message(message de la notification)
        */
        Route::post('/commandeslines/state/{commandLine}', [CommandLineController::class, 'state']);  // verifié

        
    // Attribut de produit
        /* route pour la liste des attributs d'un produit| Contraintes: admin et seller 
        Params: id du produit
        */ 
        Route::get('/attributeProducts/{product}', [AtributeProductController::class, 'index']); //verifié


        /* route pour enregistrer un attribut de produit| Contraintes: admin et seller 
        Params: atribute_id, product_id
        */ 
        Route::post('/attributeProducts', [AtributeProductController::class, 'store']); //verifié

Route::middleware('auth:sanctum')->group(function () {  
    
    // Users
        /* route pour changer le mot de passe d'un utilisateur grace à son id | Contraintes: tout le monde à condition que l'action soit pour soi et l'admin
        Params: old(optionnel si c'est l'admin qui veut changer), new, user(optionnel si c'est user ou seller)
        Cas d'utilisation si user existe (c'a'd l'id de l'admin) alors on a pas à old tu attributs null dans la requete car l'admin n'a pas besoin de l'anien mot de passe
                          sinon on compare old avec le password du user authentifié
        */
        Route::put('/users/change_password/{old?}/{new}/{user?}', [UserController::class, 'password']); //verifié


    // CartLines
        /* route pour ajouter les produits dans le panier | Contraintes: utilisateurs uniquement
        Params: product_id, cart_id, quantity, attributesValues
        */
        Route::post('/cartlines/store', [CartLineController::class, 'store']); // verifié   
});


