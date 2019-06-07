<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190605220621 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE files (id INT AUTO_INCREMENT NOT NULL, fk_question_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_635405977D15A8B (fk_question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test_question (id INT AUTO_INCREMENT NOT NULL, fk_test_id INT DEFAULT NULL, fk_question_id INT DEFAULT NULL, serial_number INT DEFAULT NULL, INDEX IDX_23944218EE723975 (fk_test_id), INDEX IDX_2394421877D15A8B (fk_question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) DEFAULT NULL, name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, phone VARCHAR(255) DEFAULT NULL, activation VARCHAR(255) NOT NULL, reset VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE files ADD CONSTRAINT FK_635405977D15A8B FOREIGN KEY (fk_question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE test_question ADD CONSTRAINT FK_23944218EE723975 FOREIGN KEY (fk_test_id) REFERENCES test (id)');
        $this->addSql('ALTER TABLE test_question ADD CONSTRAINT FK_2394421877D15A8B FOREIGN KEY (fk_question_id) REFERENCES question (id)');
        $this->addSql('DROP TABLE file');
        $this->addSql('ALTER TABLE answer_option DROP is_correct, CHANGE fk_question_id fk_question_id INT DEFAULT NULL, CHANGE answer answer VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE participant_answer CHANGE answer answer LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE participant_answer_attribute CHANGE value value LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EEE723975');
        $this->addSql('DROP INDEX IDX_B6F7494EEE723975 ON question');
        $this->addSql('ALTER TABLE question ADD question_name VARCHAR(255) DEFAULT NULL, ADD question_wording LONGTEXT DEFAULT NULL, ADD required TINYINT(1) NOT NULL, DROP question, CHANGE fk_test_id fk_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494ECC7C9A99 FOREIGN KEY (fk_group_id) REFERENCES group_list (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E5741EEB9 FOREIGN KEY (fk_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B6F7494E5741EEB9 ON question (fk_user_id)');
        $this->addSql('ALTER TABLE question_attribute CHANGE fk_attribute_id fk_attribute_id INT DEFAULT NULL, CHANGE fk_question_id fk_question_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE test ADD fk_user_id INT DEFAULT NULL, ADD prev_button TINYINT(1) DEFAULT NULL, ADD is_active TINYINT(1) NOT NULL, DROP last_activated_at');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0C5741EEB9 FOREIGN KEY (fk_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D87F7E0C5741EEB9 ON test (fk_user_id)');
        $this->addSql('ALTER TABLE test_attribute CHANGE fk_test_id fk_test_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE test_participation CHANGE fk_test_id fk_test_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E5741EEB9');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY FK_D87F7E0C5741EEB9');
        $this->addSql('CREATE TABLE file (id INT AUTO_INCREMENT NOT NULL, fk_question_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, type VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_8C9F361077D15A8B (fk_question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE file ADD CONSTRAINT FK_8C9F361077D15A8B FOREIGN KEY (fk_question_id) REFERENCES question (id)');
        $this->addSql('DROP TABLE files');
        $this->addSql('DROP TABLE test_question');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE answer_option ADD is_correct TINYINT(1) NOT NULL, CHANGE fk_question_id fk_question_id INT NOT NULL, CHANGE answer answer VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE participant_answer CHANGE answer answer VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE participant_answer_attribute CHANGE value value INT DEFAULT NULL');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494ECC7C9A99');
        $this->addSql('DROP INDEX IDX_B6F7494E5741EEB9 ON question');
        $this->addSql('ALTER TABLE question ADD question VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP question_name, DROP question_wording, DROP required, CHANGE fk_user_id fk_test_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EEE723975 FOREIGN KEY (fk_test_id) REFERENCES test (id)');
        $this->addSql('CREATE INDEX IDX_B6F7494EEE723975 ON question (fk_test_id)');
        $this->addSql('ALTER TABLE question_attribute CHANGE fk_attribute_id fk_attribute_id INT NOT NULL, CHANGE fk_question_id fk_question_id INT NOT NULL');
        $this->addSql('DROP INDEX IDX_D87F7E0C5741EEB9 ON test');
        $this->addSql('ALTER TABLE test ADD last_activated_at DATETIME DEFAULT NULL, DROP fk_user_id, DROP prev_button, DROP is_active');
        $this->addSql('ALTER TABLE test_attribute CHANGE fk_test_id fk_test_id INT NOT NULL');
        $this->addSql('ALTER TABLE test_participation CHANGE fk_test_id fk_test_id INT NOT NULL');
    }
}
