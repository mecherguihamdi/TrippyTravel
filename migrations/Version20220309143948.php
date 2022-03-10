<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220309143948 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE attraction_reservation (id INT AUTO_INCREMENT NOT NULL, attraction_id INT DEFAULT NULL, prix VARCHAR(255) NOT NULL, status VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP, start DATETIME DEFAULT CURRENT_TIMESTAMP, end DATETIME DEFAULT CURRENT_TIMESTAMP, INDEX IDX_14B002203C216F9D (attraction_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE attraction_reservation ADD CONSTRAINT FK_14B002203C216F9D FOREIGN KEY (attraction_id) REFERENCES attraction (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE attraction_reservation');
    }
}
