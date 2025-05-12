## O projekcie

System rezerwacji stolików online dla restauracji "Podkarpackie Przysmaki". Projekt zrealizowany w ramach zajęć akademickich. Umożliwia przeglądanie dostępnych stolików i dokonywanie rezerwacji na wybrany termin.

## Technologie

-   Backend: Laravel 10 (PHP 8.1+)
-   Frontend: HTML5, CSS3, JavaScript, Bootstrap 5
-   Baza danych: MySQL
-   API: RESTful, Axios

## Funkcje

-   Funkcjonalna strona główna restauracji wraz z menu
-   Wybór stolika na interaktywnej mapie restauracji
-   Sprawdzanie dostępności stolików w wybranym terminie
-   Formularz rezerwacji z walidacją danych
-   Panel administracyjny do zarządzania rezerwacjami
-   Zmiana statusów rezerwacji (oczekująca/potwierdzona/anulowana)

## Jak uruchomić

### Wymagania

-   PHP 8.1+
-   Composer
-   MySQL
-   Przeglądarka internetowa

### Instalacja

```bash
# Klonowanie repozytorium
git clone https://github.com/dundunek1/RestaurantPage-UniversaryProject.git

# Instalacja zależności
composer install

# Konfiguracja środowiska
cp .env.example .env
php artisan key:generate

# Konfiguracja bazy danych (edytuj plik .env)
# DB_DATABASE=smaczne_koryto
# DB_USERNAME=root
# DB_PASSWORD=""


# Migracja i wypełnienie bazy danych
php artisan migrate --seed

# Uruchomienie serwera
php artisan serve
```

Aplikacja będzie dostępna pod adresem http://localhost:8000

## Endpointy API

-   `GET /api/stoliki` - Lista stolików
-   `GET /api/stoliki/dostepnosc` - Dostępność stolików
-   `POST /api/rezerwacje` - Dokonanie rezerwacji
-   `GET /api/admin/rezerwacje` - Lista rezerwacji (admin)
-   `POST /api/admin/rezerwacje/status` - Zmiana statusu rezerwacji

## Dostęp do systemu

-   Strona główna: `/home.html`
-   Menu: `/menu.html`
-   Rezerwacja stolika: `/booking.html`
-   Panel administracyjny: `/admin.html`

## Autorzy

-   dundunek1(Jakub Pawlik) - Backend, Frontend
-   iguanaiza - Frontend

## Licencja

Ten projekt jest udostępniany na licencji MIT.
