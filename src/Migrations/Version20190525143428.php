<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190525143428 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE doctorant (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, cne VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, boursier TINYINT(1) DEFAULT NULL, annee_universitaire DATE NOT NULL, UNIQUE INDEX UNIQ_FBF7B52ECCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE doctorant ADD CONSTRAINT FK_FBF7B52ECCFA12B8 FOREIGN KEY (profile_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE soutenance ADD doctorant_id INT NOT NULL');
        $this->addSql('ALTER TABLE soutenance ADD CONSTRAINT FK_4D59FF6EEEF99363 FOREIGN KEY (doctorant_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_4D59FF6EEEF99363 ON soutenance (doctorant_id)');
        $this->addSql('ALTER TABLE user DROP nombre_heures');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE doctorant');
        $this->addSql('ALTER TABLE soutenance DROP FOREIGN KEY FK_4D59FF6EEEF99363');
        $this->addSql('DROP INDEX IDX_4D59FF6EEEF99363 ON soutenance');
        $this->addSql('ALTER TABLE soutenance DROP doctorant_id');
        $this->addSql('ALTER TABLE user ADD nombre_heures INT DEFAULT 0');
    }
}
