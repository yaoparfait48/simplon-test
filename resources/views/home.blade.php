<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class='body_login ht-100'>
        <div class="container px-1 px-md-5 px-lg-1 mbody">
            <div class="card card0">
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="card1 pb-5">
                            <div class="row">
                                <img src="images/logo.png" class="logo" className='b2ilogo' />
                            </div>
                            <div class="row px-3 justify-content-center mt-4 mb-5 border-line text-center mt-5">
                                <h1>LISTE DE PRESENCE</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 my-auto">
                        <div class="card2 card br-none px-4 py-5 ">
                            <div>
                                <h4>CONNEXION</h4>
                                <p>Saisir le nom d'utilisateur et le mot de passe correctement</p>
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="line"></div>
                                <div class="line"></div>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                    
                                <div class="row px-3">
                                    <label class="mb-1"><h6 class="mb-0 text-sm">Email de l'administrateur</h6></label>
                                    <input class="mb-4" type="email" name="email" placeholder="Entrer le nom d'utilisateur" required />
                                </div>
                                <div class="row px-3">
                                    <label class="mb-1"><h6 class="mb-0 text-sm">Mot de passe</h6></label>
                                    <input type="password" name="password" placeholder="Entrer le mot de passe" required />
                                </div>
                                <div class="row px-3 mb-4 mt-3">
                                    <a href="#" class="ml-auto mb-0 text-sm">Mot de passe oublié?</a>
                                </div>
                                <div class="row mb-3 px-3">
                                    <button type="submit" class="btn btn-blue text-center">Se connecter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bg-blue py-4">
                    <div class="row px-3">
                        <small class="ml-4 ml-sm-5 mb-2 text-center">Copyright © 2022. Tous droits réservés.</small>
                        <div class="social-contact ml-4 ml-sm-auto">
                            <span class="fa fa-facebook mr-4 text-sm"></span>
                            <span class="fa fa-google-plus mr-4 text-sm"></span>
                            <span class="fa fa-linkedin mr-4 text-sm"></span>
                            <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>