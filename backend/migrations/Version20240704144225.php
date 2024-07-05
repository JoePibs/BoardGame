<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240704144225 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE games (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) 
        NOT NULL, link_philibert VARCHAR(255) DEFAULT NULL, 
        image VARCHAR(255) DEFAULT NULL, sku VARCHAR(255) DEFAULT NULL,
        title_long_description LONGTEXT DEFAULT NULL, long_description LONGTEXT DEFAULT NULL,
        short_description VARCHAR(1500) DEFAULT NULL, note DOUBLE PRECISION DEFAULT NULL, 
        price DOUBLE PRECISION DEFAULT NULL, lang VARCHAR(255) NOT NULL, 
        min_age INT DEFAULT NULL, min_duration INT DEFAULT NULL, max_duration INT DEFAULT NULL, min_players INT DEFAULT NULL, max_players INT DEFAULT NULL,
         lang_notice VARCHAR(255) DEFAULT NULL, universe VARCHAR(255) DEFAULT NULL, extension VARCHAR(255) DEFAULT NULL, 
         editor VARCHAR(255) DEFAULT NULL, creators VARCHAR(1000) DEFAULT NULL, illustrators VARCHAR(1000) DEFAULT NULL, 
         video_embed VARCHAR(1000) DEFAULT NULL, video_link VARCHAR(255) DEFAULT NULL, eng_link VARCHAR(255) DEFAULT NULL, 
         eng_name VARCHAR(255) DEFAULT NULL, eng_long_text LONGTEXT DEFAULT NULL, eng_short_description LONGTEXT DEFAULT NULL, themes VARCHAR(500) DEFAULT NULL, mechanics VARCHAR(500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE games');
    }
}
