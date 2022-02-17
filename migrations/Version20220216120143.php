<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220216120143 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie_attraction (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(20) NOT NULL, contrainte_age TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE attraction ADD id_categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE attraction ADD CONSTRAINT FK_D503E6B89F34925F FOREIGN KEY (id_categorie_id) REFERENCES categorie_attraction (id)');
        $this->addSql('CREATE INDEX IDX_D503E6B89F34925F ON attraction (id_categorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attraction DROP FOREIGN KEY FK_D503E6B89F34925F');
        $this->addSql('DROP TABLE categorie_attraction');
        $this->addSql('DROP INDEX IDX_D503E6B89F34925F ON attraction');
        $this->addSql('ALTER TABLE attraction DROP id_categorie_id, CHANGE libelle libelle VARCHAR(25) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE localisation localisation VARCHAR(30) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE horraire horraire VARCHAR(30) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
