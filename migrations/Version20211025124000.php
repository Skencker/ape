<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211025124000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE parentsdelegues (id INT AUTO_INCREMENT NOT NULL, fonction_id INT NOT NULL, classe_id INT NOT NULL, name VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_18AC227557889920 (fonction_id), INDEX IDX_18AC22758F5EA509 (classe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE parentsdelegues ADD CONSTRAINT FK_18AC227557889920 FOREIGN KEY (fonction_id) REFERENCES fonctions_parents (id)');
        $this->addSql('ALTER TABLE parentsdelegues ADD CONSTRAINT FK_18AC22758F5EA509 FOREIGN KEY (classe_id) REFERENCES classes (id)');
    }

    public function isTransactional(): bool
    {
        return false;
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE parentsdelegues');
    }
}
