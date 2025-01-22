<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250122154052 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sections ADD image_1 VARCHAR(255) NOT NULL, ADD image_2 VARCHAR(255) NOT NULL, ADD image_3 VARCHAR(255) NOT NULL, ADD description LONGTEXT NOT NULL, ADD banniere VARCHAR(255) NOT NULL, DROP is_visible');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sections ADD is_visible TINYINT(1) NOT NULL, DROP image_1, DROP image_2, DROP image_3, DROP description, DROP banniere');
    }
}
