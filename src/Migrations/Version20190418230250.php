<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190418230250 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user_test');
        $this->addSql('ALTER TABLE test ADD fk_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0C5741EEB9 FOREIGN KEY (fk_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D87F7E0C5741EEB9 ON test (fk_user_id)');
        $this->addSql('ALTER TABLE question_attribute CHANGE fk_attribute_id fk_attribute_id INT DEFAULT NULL, CHANGE fk_question_id fk_question_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_test (user_id INT NOT NULL, test_id INT NOT NULL, INDEX IDX_A2FE32C51E5D0459 (test_id), INDEX IDX_A2FE32C5A76ED395 (user_id), PRIMARY KEY(user_id, test_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE user_test ADD CONSTRAINT FK_A2FE32C51E5D0459 FOREIGN KEY (test_id) REFERENCES test (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_test ADD CONSTRAINT FK_A2FE32C5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE question_attribute CHANGE fk_attribute_id fk_attribute_id INT NOT NULL, CHANGE fk_question_id fk_question_id INT NOT NULL');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY FK_D87F7E0C5741EEB9');
        $this->addSql('DROP INDEX IDX_D87F7E0C5741EEB9 ON test');
        $this->addSql('ALTER TABLE test DROP fk_user_id');
    }
}
