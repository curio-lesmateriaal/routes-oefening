## Benodigdheden

- Laragon 6
  - PHP 8.1.x
  - MySQL 8.x
  - Composer 2.4.x
  - Node 18.8.x
  - NPM 8.18.x
- Git of Github Desktop

## Project installeren

- Clone het project met git of git-desktop.
  - Dit mag in de www folder, of een andere folder naar keuze.
- Open het project met VSCode
- kopieer de .env.example file en hernoem deze naar .env
- Open de terminal en voer de volgende commando's uit:
- `composer install`
- `php artisan key:generate`
- `npm install`
- `npm run dev`
- Open de site in de browser (je kunt ook `php artisan serve` gebruiken)

## Opdracht 1

Deze website is bijna af. Enkel de routes ontbreken nog. Zorg ervoor dat de volgende pagina's (Die je allemaal kunt vinden in de navbar) netjes geopend kunnen worden:

- Home (deze is al gedaan)
- Projects
  - ShopEase Pro
  - HealthTrack Plus
  - BizConnect CRM
  - WealthGuard Pro
  - EduPro LearnHub
  - StockMasters
  - TravelWise Express
- About us
- Contact

## Opdracht 2

In Contact staat ook een formulier. Je moet deze ook nog werkend maken. Er staat al een route klaar, maar deze werkt niet. Zoek uit waarom, en fix het probleem.

# Opdracht 3

- Maak een nieuwe view aan, en maak een route naar die view. 
- Maak in de routes file een php variabele aan met daarin je naam. Stuur deze variable mee naar de view
- Laat de variabele in de view zien. (De pagina hoeft verder geen opmaak te hebben)

## Verdieping

Als je een stapje extra wilt zetten, maar een route group aan voor alle URL's naar de projecten. Gebruik de volgende resource: https://laravel.com/docs/10.x/routing#route-group-prefixes

Veel succes!

Gemaakt door: Steven van Rosendaal
