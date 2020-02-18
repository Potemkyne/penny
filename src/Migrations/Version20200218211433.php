<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200218211433 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE famille_olfactive (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE marque (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, domaine VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, logo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nez (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, biographie LONGTEXT NOT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE note_coeur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, origine VARCHAR(255) NOT NULL, obtention VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE note_fond (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, origine VARCHAR(255) NOT NULL, obtention VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE note_tete (id INT AUTO_INCREMENT NOT NULL, origine VARCHAR(255) NOT NULL, obtention VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, nom VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parfum (id INT AUTO_INCREMENT NOT NULL, famillefk_id INT NOT NULL, marquefk_id INT NOT NULL, nom VARCHAR(255) NOT NULL, annee VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, concentration VARCHAR(255) NOT NULL, INDEX IDX_F295BD4C9071D01 (famillefk_id), INDEX IDX_F295BD4CF571F068 (marquefk_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parfum_note_tete (parfum_id INT NOT NULL, note_tete_id INT NOT NULL, INDEX IDX_B94429FDCECF0658 (parfum_id), INDEX IDX_B94429FDC57E2C29 (note_tete_id), PRIMARY KEY(parfum_id, note_tete_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parfum_note_coeur (parfum_id INT NOT NULL, note_coeur_id INT NOT NULL, INDEX IDX_45E745F5CECF0658 (parfum_id), INDEX IDX_45E745F567DE1DC0 (note_coeur_id), PRIMARY KEY(parfum_id, note_coeur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parfum_note_fond (parfum_id INT NOT NULL, note_fond_id INT NOT NULL, INDEX IDX_89E9F972CECF0658 (parfum_id), INDEX IDX_89E9F9726486AEE (note_fond_id), PRIMARY KEY(parfum_id, note_fond_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE parfum ADD CONSTRAINT FK_F295BD4C9071D01 FOREIGN KEY (famillefk_id) REFERENCES famille_olfactive (id)');
        $this->addSql('ALTER TABLE parfum ADD CONSTRAINT FK_F295BD4CF571F068 FOREIGN KEY (marquefk_id) REFERENCES marque (id)');
        $this->addSql('ALTER TABLE parfum_note_tete ADD CONSTRAINT FK_B94429FDCECF0658 FOREIGN KEY (parfum_id) REFERENCES parfum (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parfum_note_tete ADD CONSTRAINT FK_B94429FDC57E2C29 FOREIGN KEY (note_tete_id) REFERENCES note_tete (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parfum_note_coeur ADD CONSTRAINT FK_45E745F5CECF0658 FOREIGN KEY (parfum_id) REFERENCES parfum (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parfum_note_coeur ADD CONSTRAINT FK_45E745F567DE1DC0 FOREIGN KEY (note_coeur_id) REFERENCES note_coeur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parfum_note_fond ADD CONSTRAINT FK_89E9F972CECF0658 FOREIGN KEY (parfum_id) REFERENCES parfum (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parfum_note_fond ADD CONSTRAINT FK_89E9F9726486AEE FOREIGN KEY (note_fond_id) REFERENCES note_fond (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE parfum DROP FOREIGN KEY FK_F295BD4C9071D01');
        $this->addSql('ALTER TABLE parfum DROP FOREIGN KEY FK_F295BD4CF571F068');
        $this->addSql('ALTER TABLE parfum_note_coeur DROP FOREIGN KEY FK_45E745F567DE1DC0');
        $this->addSql('ALTER TABLE parfum_note_fond DROP FOREIGN KEY FK_89E9F9726486AEE');
        $this->addSql('ALTER TABLE parfum_note_tete DROP FOREIGN KEY FK_B94429FDC57E2C29');
        $this->addSql('ALTER TABLE parfum_note_tete DROP FOREIGN KEY FK_B94429FDCECF0658');
        $this->addSql('ALTER TABLE parfum_note_coeur DROP FOREIGN KEY FK_45E745F5CECF0658');
        $this->addSql('ALTER TABLE parfum_note_fond DROP FOREIGN KEY FK_89E9F972CECF0658');
        $this->addSql('DROP TABLE famille_olfactive');
        $this->addSql('DROP TABLE marque');
        $this->addSql('DROP TABLE nez');
        $this->addSql('DROP TABLE note_coeur');
        $this->addSql('DROP TABLE note_fond');
        $this->addSql('DROP TABLE note_tete');
        $this->addSql('DROP TABLE parfum');
        $this->addSql('DROP TABLE parfum_note_tete');
        $this->addSql('DROP TABLE parfum_note_coeur');
        $this->addSql('DROP TABLE parfum_note_fond');
    }
}
