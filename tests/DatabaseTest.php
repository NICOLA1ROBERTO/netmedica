<?php

namespace tests;

use PDO;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{

    private $pdo;

    // Set up: Connessione al database
    protected function setUp(): void
    {

        //TODO: aggiorna con la password corretta
        $this->pdo = new PDO('mysql:host=localhost', 'root', ''); // Assicurati di usare le credenziali corrette
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Test che verifica se il database esiste e lo crea se non esiste
    public function testCreateDatabaseIfNotExist()
    {
        $this->pdo->exec("CREATE DATABASE IF NOT EXISTS netmedica");

        // Crea il database se non esiste
        $stmt = $this->pdo->query("SHOW DATABASES LIKE 'netmedica'");
        $this->assertNotEmpty($stmt->fetch(PDO::FETCH_ASSOC), 'Database non esistente o non creato');
    }

    // Test che verifica se la tabella esiste e la crea se non esiste
    public function testCreateTableIfNotExist()
    {
        $this->pdo->exec("USE netmedica");

        $this->pdo->exec("DROP TABLE IF EXISTS progetti");

        $this->pdo->exec("
            CREATE TABLE IF NOT EXISTS progetti (
                id_progetto INT AUTO_INCREMENT PRIMARY KEY,
                progetto VARCHAR(255),
                performance VARCHAR(10),
                img VARCHAR(255)
            )
        ");

        $stmt = $this->pdo->query("SHOW TABLES LIKE 'progetti'");
        $this->assertNotEmpty($stmt->fetch(PDO::FETCH_ASSOC), 'Tabella "progetti" non esistente o non creata');
    }

    // Test che verifica l'inserimento dei dati nella tabella
    public function testInsertData()
    {
        $this->pdo->exec("USE netmedica");

        $stmt = $this->pdo->prepare("
            INSERT INTO progetti (progetto, performance, img) 
            VALUES (:progetto, :performance, :img)
        ");

        // Popola il database con i dati di esempio
        $stmt = $this->pdo->prepare("INSERT INTO progetti (progetto, performance, img) VALUES
        ('Diabete Mellito', '70', 'img/diabete.jpg'),
        ('Ipertensione arteriosa', '34', 'img/pressione.jpg'),
        ('Bpco', '26', 'img/bpco.jpg'),
        ('Asma', '80', 'img/asma.jpg'),
        ('Analisi Spesa farmaceutica', '12', 'img/spesa.jpg'),
        ('Vaccinazione Antiinfluenzale', '36', 'img/vaccinazione.jpg'),
        ('Screening Mammografie', '55', 'img/screening.jpg'),
        ('Audit di ingresso', '81', 'img/audit.jpg'),
        ('Analisi Visite', '23', 'img/visite.jpg')
        ");


        $stmt->execute();


        // Verifica che i dati siano stati inseriti
        $stmt = $this->pdo->query("SELECT * FROM progetti WHERE progetto = 'Diabete Mellito'");
        $project = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->assertEquals('Diabete Mellito', $project['progetto']);
        $this->assertEquals('70', $project['performance']);
        $this->assertEquals('img/diabete.jpg', $project['img']);
    }

}