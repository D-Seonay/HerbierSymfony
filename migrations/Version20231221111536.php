<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231221111536 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE lieu (id INT AUTO_INCREMENT NOT NULL, pays VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE releves ADD lieu_id INT DEFAULT NULL, ADD releve_brut VARCHAR(255) NOT NULL, ADD tableau VARCHAR(255) NOT NULL, ADD visualisation VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE releves ADD CONSTRAINT FK_6F62B66E6AB213CC FOREIGN KEY (lieu_id) REFERENCES lieu (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6F62B66E6AB213CC ON releves (lieu_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE releves DROP FOREIGN KEY FK_6F62B66E6AB213CC');
        $this->addSql('DROP TABLE lieu');
        $this->addSql('DROP INDEX UNIQ_6F62B66E6AB213CC ON releves');
        $this->addSql('ALTER TABLE releves DROP lieu_id, DROP releve_brut, DROP tableau, DROP visualisation');
    }
}
