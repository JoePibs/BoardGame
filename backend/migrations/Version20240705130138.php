<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240705130138 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE renting_games (id INT AUTO_INCREMENT NOT NULL, game_id INT NOT NULL, owner_id INT NOT NULL, renting_day_price DOUBLE PRECISION NOT NULL, renting_week_price DOUBLE PRECISION DEFAULT NULL, buy_price DOUBLE PRECISION DEFAULT NULL, caution_price DOUBLE PRECISION NOT NULL, is_rented TINYINT(1) NOT NULL, INDEX IDX_27449D9AE48FD905 (game_id), INDEX IDX_27449D9A7E3C61F9 (owner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE renting_games ADD CONSTRAINT FK_27449D9AE48FD905 FOREIGN KEY (game_id) REFERENCES games (id)');
        $this->addSql('ALTER TABLE renting_games ADD CONSTRAINT FK_27449D9A7E3C61F9 FOREIGN KEY (owner_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE renting_games DROP FOREIGN KEY FK_27449D9AE48FD905');
        $this->addSql('ALTER TABLE renting_games DROP FOREIGN KEY FK_27449D9A7E3C61F9');
        $this->addSql('DROP TABLE renting_games');
    }
}
