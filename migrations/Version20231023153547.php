<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231023153547 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE review ADD reviews_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C68092D97F FOREIGN KEY (reviews_id) REFERENCES circuit (id)');
        $this->addSql('CREATE INDEX IDX_794381C68092D97F ON review (reviews_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C68092D97F');
        $this->addSql('DROP INDEX IDX_794381C68092D97F ON review');
        $this->addSql('ALTER TABLE review DROP reviews_id');
    }
}
