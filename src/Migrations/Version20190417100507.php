<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190417100507 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE modeles_reservations (modeles_id INT NOT NULL, reservations_id INT NOT NULL, INDEX IDX_F90D70B0708408C (modeles_id), INDEX IDX_F90D70B0D9A7F869 (reservations_id), PRIMARY KEY(modeles_id, reservations_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE modeles_reservations ADD CONSTRAINT FK_F90D70B0708408C FOREIGN KEY (modeles_id) REFERENCES modeles (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE modeles_reservations ADD CONSTRAINT FK_F90D70B0D9A7F869 FOREIGN KEY (reservations_id) REFERENCES reservations (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE modeles_reservations');
    }
}
