<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190320233008 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE test_question (id INT AUTO_INCREMENT NOT NULL, fk_test_id INT DEFAULT NULL, fk_question_id INT DEFAULT NULL, serial_number INT DEFAULT NULL, INDEX IDX_23944218EE723975 (fk_test_id), INDEX IDX_2394421877D15A8B (fk_question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE test_question ADD CONSTRAINT FK_23944218EE723975 FOREIGN KEY (fk_test_id) REFERENCES test (id)');
        $this->addSql('ALTER TABLE test_question ADD CONSTRAINT FK_2394421877D15A8B FOREIGN KEY (fk_question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EEE723975');
        $this->addSql('DROP INDEX IDX_B6F7494EEE723975 ON question');
        $this->addSql('ALTER TABLE question DROP fk_test_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE test_question');
        $this->addSql('ALTER TABLE question ADD fk_test_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EEE723975 FOREIGN KEY (fk_test_id) REFERENCES test (id)');
        $this->addSql('CREATE INDEX IDX_B6F7494EEE723975 ON question (fk_test_id)');
    }
}