<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250228130558 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE favori ADD user_id INT DEFAULT NULL, ADD film_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE favori ADD CONSTRAINT FK_EF85A2CCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE favori ADD CONSTRAINT FK_EF85A2CC567F5183 FOREIGN KEY (film_id) REFERENCES film (id)');
        $this->addSql('CREATE INDEX IDX_EF85A2CCA76ED395 ON favori (user_id)');
        $this->addSql('CREATE INDEX IDX_EF85A2CC567F5183 ON favori (film_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE favori DROP FOREIGN KEY FK_EF85A2CCA76ED395');
        $this->addSql('ALTER TABLE favori DROP FOREIGN KEY FK_EF85A2CC567F5183');
        $this->addSql('DROP INDEX IDX_EF85A2CCA76ED395 ON favori');
        $this->addSql('DROP INDEX IDX_EF85A2CC567F5183 ON favori');
        $this->addSql('ALTER TABLE favori DROP user_id, DROP film_id');
    }
}
