# Progetti Medici - Sistema di Gestione delle Performance

Questo progetto è un'applicazione web per la gestione e visualizzazione dei progetti medici e delle performance raggiunte dai medici. Utilizza PHP, Smarty, e MySQL per la gestione dei dati, con una componente frontend dinamica che visualizza i risultati in modo interattivo.

## Funzionalità

- Visualizzazione dinamica dei progetti medici e delle performance.
- Indicizzazione della performance in base ai valori (verde, giallo, rosso).
- Modal popup per mostrare ulteriori dettagli sui progetti.
- Recupero dei dati tramite Web Services con gestione dei parametri per ogni medico.
- Configurazione facile tramite file di configurazione e utilizzo di Smarty per la gestione del frontend.

## Requisiti

Per eseguire il progetto, sono necessari i seguenti requisiti:

- PHP 8.0 o superiore.
- Composer (per gestire le dipendenze).
- MySQL o MariaDB.
- Un server web (ad esempio Apache o Nginx).

### Dipendenze principali:

- **Smarty** - Un template engine per PHP.
- **Composer** - Per la gestione delle dipendenze PHP.
- **PhpUnit** - Per la gestione dei test PHP.

## Installazione

1. **Clona il repository:**

   ```bash
   git clone https://github.com/tuo-username/netmedica.git
   cd netmedica

2.  **Aggiorna i dati del tuo database:**
  - inserisci la password corretta in config/config.php
  - inserisci la password corretta in test/DatabaseTest.php

4.  **Crea il tuo database:**
   ```bash
   ./vendor/bin/phpunit --testdox
