# **SWAN PHP Developer Test (Laravel version)**

## 👀  Popis

Vytvorte jednoduchú aplikáciu pre správu úloh (to-do list). Vašou úlohou je vytvoriť backend pre túto aplikáciu s použitím čistého PHP a Laravel frameworku.

## 🎯  Časť 2: Laravel Framework (35% váhy)
Naprogramujte rovnakú funkcionalitu ako v časti 1, ale tentoraz využite Laravel framework. Predpokladáme, že máte nainštalovaný Laravel a pripojený k databáze (podľa Vašej preferencie). Použite Eloquent ORM pre prácu s úlohami.
Implementujte autentifikáciu na Laravel aplikácii, aby bolo možné mať viacerých používateľov. Každý používateľ by mal mať svoj vlastný zoznam úloh.
Zoznam úloh bude obsahovať (okrem požiadaviek z Časti 1) nasledovné možnosti:
    1. zoradenie úloh podla jednotlivých stĺpcov
    2. filtrovanie zoznamu úloh podľa:
        a. názov
        b. dátum vytvorenia od - do

## 🎯  Časť 3: Dodatočné úpravy (10% váhy)
1. Optimalizujte kód a zabezpečte ho proti SQL injection a iným bezpečnostným hrozbám.
2. Napíšte jednoduché testy pre Vašu Laravel aplikáciu. Stačí maximálne 1-2 testy, ktoré overia hlavné funkcie.

## ✅  Postup Inštalácie

1. Checkout projektu z Githubu do lokálneho adresára
   - konfigurácia hosts súboru a vhost pre apache (záleží od lokálnej konfigurácie web servera)
   
2. Vytvorenie .env konfigurácie
   - skopírovanie .env.example a nastavenie prístupov do DB

3. Vytvorenie lokálnej databázy
   - názov databázy sa musí zhodovať s konfiguráciou v bode 2
   
4. Migrácia databázy
   - spustite migráciu databázy príkazom "php artisan migrate"
  
5. Seedovanie databázy
   - spustite seedovanie databázy príkazom "php artisan db:seed"

6. Inštalácia composer balíčkov
   - pred správny chod aplikácie je potrebná inštalácia composer balíčkov spustením príkazu "composer install" v adresári projektu
  
7. Nastavenie práv pre adresár writable
   - pre adresár writable je potrebné nastaviť práva na 770
   - do adresára ukladáme kompilované templaty

## 📝  Požiadavky:

Aplikácia vyžaduje PHP vo verzií 8.2 a MySQL vo verzií 8 alebo MariaDB vo verzií 11.

## 💡  Technické riešenie a developer komentáre:

Aplikáciu som vyvíjal v Laravel verzií 8 použil som nasledovné balíčky:

## PHP
Laravel Purity - filtrovanie nad ORM<br />
Column Sortable - triedenie nad ORM<br />

## HTML, CSS, JS
Bootstrap - grid layout + základný dizajn<br />

Po spustení aplikácie bude užívateľ presmerovaný na prihlasovaciu stránku. Po úspešnom prihlásení sa mu zobrazí zoznam jeho úloh v prehladnej tabuľke. Dáta je možné zoraďovať podľa ktoréhokoľvek stĺpca a zároveň v nich aj vyhľadávať. Užívateľ má tiež možnosť pridať novú ulohu (to-to), upraviť úlohu, prípadne ju označiť ako hotovú alebo znovu otvoriť.

## 🧪  Testovanie

Testy je možné spustiť príkazom "php artisan test"
