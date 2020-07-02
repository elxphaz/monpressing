@extends('layouts.app')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project 01</title>

        <!-- Fonts -->

        <!-- Styles -->
    </head>
    <body>
        {{-- Navigation bars --}}
        @section('navigation-bar')
            {{-- @parent        --}}

            @section('content')
        <div class="content">
                
            
            {{-- Pages heros --}}
            <div class="intro">
                <div class="layer"></div>
                <h1>Pressing a domicile haute qualiter livre partout a abidjan </h1>
                
                <p>Nous recuperons et livrons vos vetements </p>
                
                <div class="cta">
                    <input class="geolocalization" type="text" placeholder="Saisissez votre adresse" name="maps"> <a href="#" class="btn">Reserver votre crenaux</a>
                </div>
                
            </div>
            
            {{-- Section services --}}
            <section >
                <div class="services">
                    <h1 class="title title-services">Comment ca marche ?</h1>
                    <div class="list-service">
                        <ul>
                            <li>
                                <img class="icon-item" src="/icons/phone.svg" alt="phone">
                                <p>Réservez en ligne votre créneau</p>
                            </li>
                            <li>
                                <img class="icon-item" src="/icons/iron.svg" alt="iron">
                                <p>Confiez-nous votre linge</p>
                            </li>
                            <li>
                                <img class="icon-item" src="/icons/suit.svg" alt="suit">
                                <p>Récupérez votre linge propre </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            
            {{-- Section About us  --}}
            <section class="about-us">
                <div class="about-us-list">
                    <h1 class="title title-about-us">Pressing</h1>
                <p class="small-details-title">Les services d'un pressing de haute qualite a votre porte</p>
                    <ul>
                        <li class="about-item">
                            <img src="/icons/thunder.svg" alt="">
                            <div class="details">
                                <p class="small-title">En un clin d'oeil</p>
                                <p class="small-details">
                                    Gagnez du temps !
                                    Nous récupérons, lavons et livrons vos vêtements en 48h, vous profitez.
                                </p>
                            </div>
                        </li>
                        <li>
                            <img src="/icons/quality.svg" alt="">
                            <div class="details">
                                <p class="small-title">40 ans de qualitél</p>
                                <p class="small-details">
                                    Pressing haute qualité depuis 40 ans.
                                    Maintenant profitez de nos services, sans vous déplacer !
                                </p>
                            </div>
                        </li>
                        <li>
                            <img src="/icons/delivery.svg" alt="">
                            <div class="details">
                                <p class="small-title">Jusqu'à votre porte</p>
                                <p class="small-details">
                                    Le pressing c'est nous,
                                    la livraison c'est Stuart.
                                    Deux experts à votre service !
                                </p>
                            </div>
                            </li>
                    </ul>
                </div>
            </section>
            
            {{-- Section command  --}}
            <section class="commands">
                <div class="commands-list">
                    
                </div>
            </section>
            
            {{-- Section temoignage --}}
            <section class="temoignage">
                
            </section>
            
            {{-- Section about us  --}}
            <section class="contact-us">
                
            </section>
            
            {{-- Footer  --}}
            <footer>
                
            </footer>
        </div>
        @endsection

    </body>
    </html>
    