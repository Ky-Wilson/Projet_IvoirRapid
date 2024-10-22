<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Document</title>
    <style>
        /* Reset & General */
        * { margin: 0px; padding: 0px; }
        body {
            background: #ecf1f5;
            font: 14px "Open Sans", sans-serif; 
            text-align: center;
        }
        .tile {
            width: 100%;
            max-width: 1000px; /* Augmenter la largeur maximale à 1000px */
            margin: 20px auto; /* Centre horizontalement */
            background: #fff;
            border-radius: 5px;
            box-shadow: 0px 2px 3px -1px rgba(151, 171, 187, 0.7);
            transform-style: preserve-3d;
            padding: 20px; /* Ajouter du padding pour le contenu interne */
        }
        .header {
            border-bottom: 1px solid #ebeff2;
            padding: 19px 0;
            text-align: center;
            color: #59687f;
            font-size: 19px;    
            font-weight: 600;
            position: relative;
            margin-bottom: 20px; /* Ajouter un espacement en bas */
        }
        .banner-img {
            padding: 5px 5px 0;
        }
        .banner-img img {
            width: 50%; /* Réduire la largeur de l'image à 50% */
            border-radius: 5px;
        }
        .dates {
            border: 1px solid #ebeff2;
            border-radius: 5px;
            padding: 20px 0px;
            margin: 10px 0; /* Ajuster la marge pour le haut et le bas */
            font-size: 16px;
            color: #5aadef;
            font-weight: 600;    
            overflow: auto;
        }
        .dates div {
            float: left;
            width: 50%;
            text-align: center;
            position: relative;
        }
        .dates strong,
        .stats strong {
            display: block;
            color: #adb8c2;
            font-size: 11px;
            font-weight: 700;
        }
        .dates span {
            width: 1px;
            height: 40px;
            position: absolute;
            right: 0;
            top: 0;    
            background: #ebeff2;
        }
        .stats {
            border-top: 1px solid #ebeff2;
            background: #f7f8fa;
            overflow: auto;
            padding: 15px 0;
            font-size: 16px;
            color: #59687f;
            font-weight: 600;
            border-radius: 0 0 5px 5px;
        }
        .stats div {
            border-right: 1px solid #ebeff2;
            width: 33.33333%;
            float: left;
            text-align: center;
        }
        .stats div:nth-of-type(3) { border: none; }
        .footer {
            text-align: right;
            position: relative;
            margin: 20px 5px;
        }
        .footer a.Cbtn {
            padding: 10px 25px;
            background-color: #DADADA;
            color: #666;
            margin: 10px 2px;
            text-transform: uppercase;
            font-weight: bold;
            text-decoration: none;
            border-radius: 3px;
        }
        .footer a.Cbtn-primary {
            background-color: #5AADF2;
            color: #FFF;
        }
        .footer a.Cbtn-primary:hover {
            background-color: #7dbef5;
        }
        .footer a.Cbtn-danger {
            background-color: #fc5a5a;
            color: #FFF;
        }
        .footer a.Cbtn-danger:hover {
            background-color: #fd7676;
        }

        /* Styles d'impression */
        @media print {
            .footer a.Cbtn {
                display: none; /* Masquer le bouton "Imprimer" lors de l'impression */
            }
            /* Si vous souhaitez également cacher le footer */
            .footer {
                display: none;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center"> <!-- Ajout de justify-content-center pour centrer -->
            <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12"> <!-- Colonne élargie -->
                <div class="tile">
                    <div class="wrapper">
                        <div class="header">{{ $client->Nom_Société }}</div>

                        <div class="banner-img">
                            <img src="/clients/{{ $client->image }}">
                        </div>

                        <div class="dates">
                            <div class="start">
                                <strong>Compte Contribuable</strong>{{ $client->Compte_contribuable }}
                                <span></span>
                            </div>
                            <div class="ends">
                                <strong>RCCM</strong> {{ $client->RCCM }}
                            </div>
                        </div>

                        <div class="stats">
                            <div>
                                <strong>Téléphone</strong> {{ $client->Telephone }}
                            </div>
                            <div>
                                <strong>Cellulaire</strong> {{ $client->Cellulaire }}
                            </div>
                            <div>
                                <strong>Email</strong> {{ $client->Email }}
                            </div>
                        </div>

                        <div class="stats">
                            <div>
                                <strong>Zone</strong> {{ $client->Zone }}
                            </div>
                            <div>
                                <strong>Direction 1 (Nom et Prénoms)</strong> {{ $client->Direction_1_Nom_et_Prenoms }}
                            </div>
                            <div>
                                <strong>Direction 1 (Contact)</strong> {{ $client->Direction_1_Contact }}
                            </div>
                        </div>

                        <div class="stats">
                            <div>
                                <strong>Direction 2 (Nom et Prénoms)</strong>{{ $client->Direction_2_Nom_et_Prenoms }}
                            </div>
                            <div>
                                <strong>Direction 2 (Contact)</strong> {{ $client->Direction_2_Contact }}
                            </div>
                            <div>
                                <strong>Direction 3 (Nom et Prénoms)</strong> {{ $client->Direction_3_Nom_et_Prenoms }}
                            </div>
                        </div>
                        <div class="stats">
                            <div>
                                <strong>Direction 3 (Contact)</strong>{{ $client->Direction_3_Contact }}
                            </div>
                            <div>
                                <strong>Adresse</strong> {{ $client->Adresse }}
                            </div>
                            <div>
                                <strong>Ville</strong> {{ $client->Ville }}
                            </div>
                        </div>
                        <div class="stats">
                            <div>
                                <strong>Commune</strong>{{ $client->Commune }}
                            </div>
                            <div>
                                <strong>Quartier</strong>{{ $client->Quartier }}
                            </div>
                            <div>
                                <strong>Rue</strong>{{ $client->Rue }}
                            </div>
                        </div>
                        <div class="stats">
                            <div>
                                <strong>Autre</strong>{{ $client->Autre }}
                            </div>
                        </div>

                        <div class="footer">
                            <a href="/" class="Cbtn Cbtn-primary">Retour</a>
                            <a href="#" class="Cbtn Cbtn-danger" onclick="window.print();">Imprimer</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css' />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>
