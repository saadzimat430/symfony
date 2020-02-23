<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190527164950 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE doctorant CHANGE cin cin VARCHAR(12) NOT NULL, CHANGE lieu_naissance lieu_naissance VARCHAR(255) NOT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL, CHANGE telephone telephone VARCHAR(10) NOT NULL, CHANGE annee_universitaire annee_universitaire VARCHAR(255) NOT NULL, CHANGE nombre_heures nombre_heures INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rapport ADD rapport VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE soutenance ADD mention VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE these_director DROP nom');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE doctorant CHANGE lieu_naissance lieu_naissance VARCHAR(15) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE annee_universitaire annee_universitaire VARCHAR(9) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE adresse adresse VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE telephone telephone INT NOT NULL, CHANGE cin cin VARCHAR(10) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE nombre_heures nombre_heures INT NOT NULL');
        $this->addSql('ALTER TABLE rapport DROP rapport');
        $this->addSql('ALTER TABLE soutenance DROP mention');
        $this->addSql('ALTER TABLE these_director ADD nom VARCHAR(30) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
    }
}
