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

## De opdracht

Deze website is bijna af. Enkel de routes ontbreken nog. Zorg ervoor dat de volgende pagina's netjes geopend kunnen worden:

- de Homepage (deze is al gedaan)
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

In Contact staat ook een formulier. Je moet deze ook nog werkend maken. Er staat al een route klaar, maar deze werkt niet. Zoek uit waarom, en fix het probleem.

## Verdieping

Als je een stapje extra wilt zetten, maar een route group aan voor alle URL's naar de projecten. Gebruik de volgende resource: https://laravel.com/docs/10.x/routing#route-group-prefixes

Veel succes!

Gemaakt door: Steven van Rosendaal
