<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200218211716 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE parfum_nez (parfum_id INT NOT NULL, nez_id INT NOT NULL, INDEX IDX_1BF846ABCECF0658 (parfum_id), INDEX IDX_1BF846AB4F6C6B6E (nez_id), PRIMARY KEY(parfum_id, nez_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE parfum_nez ADD CONSTRAINT FK_1BF846ABCECF0658 FOREIGN KEY (parfum_id) REFERENCES parfum (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parfum_nez ADD CONSTRAINT FK_1BF846AB4F6C6B6E FOREIGN KEY (nez_id) REFERENCES nez (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE parfum_nez');
    }
}
