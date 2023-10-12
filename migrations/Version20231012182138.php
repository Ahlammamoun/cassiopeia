<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231012182138 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE teacher ADD circuit_id INT NOT NULL');
        $this->addSql('ALTER TABLE teacher ADD CONSTRAINT FK_B0F6A6D5CF2182C8 FOREIGN KEY (circuit_id) REFERENCES circuit (id)');
        $this->addSql('CREATE INDEX IDX_B0F6A6D5CF2182C8 ON teacher (circuit_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE teacher DROP FOREIGN KEY FK_B0F6A6D5CF2182C8');
        $this->addSql('DROP INDEX IDX_B0F6A6D5CF2182C8 ON teacher');
        $this->addSql('ALTER TABLE teacher DROP circuit_id');
    }
}
