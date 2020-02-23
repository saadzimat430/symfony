<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190527173401 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE doctorant DROP FOREIGN KEY FK_FBF7B52ECCFA12B8');
        $this->addSql('DROP INDEX UNIQ_FBF7B52ECCFA12B8 ON doctorant');
        $this->addSql('ALTER TABLE doctorant DROP profile_id');
        $this->addSql('ALTER TABLE user ADD nombre_heures INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE doctorant ADD profile_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE doctorant ADD CONSTRAINT FK_FBF7B52ECCFA12B8 FOREIGN KEY (profile_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_FBF7B52ECCFA12B8 ON doctorant (profile_id)');
        $this->addSql('ALTER TABLE user DROP nombre_heures');
    }
}
