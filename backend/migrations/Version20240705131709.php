<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240705131709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rents (id INT AUTO_INCREMENT NOT NULL, owner_id INT DEFAULT NULL, renting_game_id INT DEFAULT NULL, renter_id INT DEFAULT NULL, begin_date DATE DEFAULT NULL, previsionnal_return_date DATE DEFAULT NULL, real_return_date DATE DEFAULT NULL, price DOUBLE PRECISION NOT NULL, penalties_late_amount DOUBLE PRECISION DEFAULT NULL, status VARCHAR(255) NOT NULL, INDEX IDX_89DE39DD7E3C61F9 (owner_id), INDEX IDX_89DE39DD8B7E72F9 (renting_game_id), INDEX IDX_89DE39DDE289A545 (renter_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rents ADD CONSTRAINT FK_89DE39DD7E3C61F9 FOREIGN KEY (owner_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE rents ADD CONSTRAINT FK_89DE39DD8B7E72F9 FOREIGN KEY (renting_game_id) REFERENCES renting_games (id)');
        $this->addSql('ALTER TABLE rents ADD CONSTRAINT FK_89DE39DDE289A545 FOREIGN KEY (renter_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rents DROP FOREIGN KEY FK_89DE39DD7E3C61F9');
        $this->addSql('ALTER TABLE rents DROP FOREIGN KEY FK_89DE39DD8B7E72F9');
        $this->addSql('ALTER TABLE rents DROP FOREIGN KEY FK_89DE39DDE289A545');
        $this->addSql('DROP TABLE rents');
    }
}
