CONSEGNA:
Milestone 1 Tramite gli appositi comandi artisan create un model con relativa migration e un resource controller.  Usate il comadno visto a lezione php artisan make:model NomeModello -rcms se volete
Milestone 2 Iniziate a definire le prime operazioni CRUD con le relative view:
 - index()
- show()
- create()
- store()
Bonus 1: creare il seeder per la tabella comics utilizzando il file in allegato.
Bonus 2: fare lo store con fillable
                  
                  
------------INIZIALIZZAZIONE PROGETTO--------------
1 - Creare il progetto laravel con il comando composer create-project laravel/laravel:^9.2 NOME PROGETTO
2 - composer require pacificdev/laravel_9_preset
3 - php artisan preset:ui bootstrap
4 - eseguire il comando composer require doctrine/dbal nel caso in cui modificate delle colonne (facoltativo)
5 - Installiamo la classe FakerPhp con il comando: composer require fakerphp/faker
6 - lanciare i comandi npm i e npm run dev 
6.1 - Creo la repo da vscode

/* --------------------------------------------*/
SE VOLETE POTETE CREARE UN TEMPLATE GITHUB A PARTIRE DA UNA REPO IN CUI AVETE SVOLTO I PASSAGGI PRECEDENTI. PER FARE QUESTO DOVETE:
1 - Andare su GitHub, aprire la repo che volete utilizzare come template, pagina settings e flaggare  la checkbox 'template repository'.
2 - Andare nella pagina code e creare una nuova repository a partire da questa cliccando sul pulsante
Use this repository -> create new repository.
3 - Creata la nuova repo, clonarla in locale tramite vscode
4 - Aprire un terminale e lanciare il comando composer Install
5 - Lanciare il comando npm i
6 - Copiare il file .env.example e rinominarlo in .env
7 - lanciare il comando php artisan key:generate
/* --------------------------------------------*/

------------FINE INIZIALIZZAZIONE PROGETTO--------------


------------COMANDI PER LA REALIZZAZIONE SPECIFICA DEL PROGETTO--------------
9 - Creo la/le migration per la creazione/modifica della/e tabella/e con il comando php artisan make:migration NOME_DELLA_MIGRATION (es. php artisan make:migration create_comics_table oppure php artisan make:migration update_comics_table --table=comics)
9.1 - Modifico la struttura delle tabella (facoltativo)
9.2 - Lancio il comando php artisan migrate
10 - php artisan make:model MyModel (nome in pascal case e al singolare)
11 - creo il controller con il comando php artisan make:controller NomeCartella/NomeController

12 - Lancio il comando per creare il file del seeder: php artisan make:seeder NomeDelSeeder
13.1 - Scrivo all'interno del metodo run del file il popolamento della tabella
14 - Eseguo il seeder con il comando php artisan db:seed --class=NomeDelSeeder 

AL POSTO DEI COMANDI DA 9 12 POSSO LANCIARE IL COMANDO: php artisan make:model NomeModello -rcms (se volete le requests aggiungete anche il comando --requests)

-----------------------------------------------------------------------------

PASSAGGI DA EFFETTUARE DOPO AVER CREATO LA REPO CON TUTTI I PACCHETTI.
1 - Lanciare il comando php artisan make:model NomeModello -rcms (crea migration, seeder, controller, model)
2 - Vado a definire le colonne della tabella nel file migration e lancio successivamente il comando php artisan migrate
3 - Scrivo il contenuto del metodo up del seeder e popolo quindi la tabella lanciando il comando php artisan db:seed --table=NomeTabella
4 - Inserisco le rotte nel file web.php tramite le resources Route::resources(bla bla bla...)
5 - Definisco un layout generale per le pagine ed i partials e li realizzo
6 - Definisco il metodo index del controller (mostro a video tutto il contenuto della tabella che abbiamo creato prima)
7 - Creo la view per la show, definisco il metodo show del controller
8 - Creo la view per il create e definisco il metodo create del controller
9 - Definisco il metodo store del controller (o inserendo i campi uno per uno oppure con fillable)

COMANDI DI UTILITY
php artisan route:list - mostra tutte le rotte della mia applicazione


