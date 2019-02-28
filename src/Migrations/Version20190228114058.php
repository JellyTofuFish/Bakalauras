<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190228114058 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE answer_option (id INT AUTO_INCREMENT NOT NULL, fk_question_id INT NOT NULL, answer VARCHAR(255) NOT NULL, is_correct TINYINT(1) NOT NULL, INDEX IDX_A87F3A1777D15A8B (fk_question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE answer_option_participant_answer (answer_option_id INT NOT NULL, participant_answer_id INT NOT NULL, INDEX IDX_6A9CD6EC9A3BC2B9 (answer_option_id), INDEX IDX_6A9CD6EC69318723 (participant_answer_id), PRIMARY KEY(answer_option_id, participant_answer_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE attribute (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE file (id INT AUTO_INCREMENT NOT NULL, fk_question_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_8C9F361077D15A8B (fk_question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `group` (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participant_answer (id INT AUTO_INCREMENT NOT NULL, fk_question_id INT DEFAULT NULL, fk_test_participation_id INT DEFAULT NULL, answer VARCHAR(255) DEFAULT NULL, INDEX IDX_68A1F4A477D15A8B (fk_question_id), INDEX IDX_68A1F4A428A4071D (fk_test_participation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participant_answer_attribute (id INT AUTO_INCREMENT NOT NULL, fk_question_attribute_id INT DEFAULT NULL, fk_participant_answer_id INT NOT NULL, fk_test_attribute_id INT DEFAULT NULL, value INT DEFAULT NULL, INDEX IDX_2F1934B61AE92F9 (fk_question_attribute_id), INDEX IDX_2F1934B2D93C062 (fk_participant_answer_id), INDEX IDX_2F1934B54574032 (fk_test_attribute_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, fk_group_id INT DEFAULT NULL, fk_test_id INT DEFAULT NULL, question VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_B6F7494ECC7C9A99 (fk_group_id), INDEX IDX_B6F7494EEE723975 (fk_test_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question_attribute (id INT AUTO_INCREMENT NOT NULL, fk_attribute_id INT NOT NULL, fk_question_id INT NOT NULL, value VARCHAR(255) DEFAULT NULL, INDEX IDX_F3AFAB60973B2CE3 (fk_attribute_id), INDEX IDX_F3AFAB6077D15A8B (fk_question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, code VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, last_activated_at DATETIME DEFAULT NULL, test_start DATETIME DEFAULT NULL, test_end DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test_attribute (id INT AUTO_INCREMENT NOT NULL, fk_attribute_id INT NOT NULL, fk_test_id INT NOT NULL, value VARCHAR(255) DEFAULT NULL, INDEX IDX_78E77831973B2CE3 (fk_attribute_id), INDEX IDX_78E77831EE723975 (fk_test_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test_participation (id INT AUTO_INCREMENT NOT NULL, fk_test_id INT NOT NULL, private_code VARCHAR(255) DEFAULT NULL, is_test_over TINYINT(1) DEFAULT NULL, test_started_at DATETIME DEFAULT NULL, test_ended_at DATETIME DEFAULT NULL, INDEX IDX_8DA05403EE723975 (fk_test_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE answer_option ADD CONSTRAINT FK_A87F3A1777D15A8B FOREIGN KEY (fk_question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE answer_option_participant_answer ADD CONSTRAINT FK_6A9CD6EC9A3BC2B9 FOREIGN KEY (answer_option_id) REFERENCES answer_option (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE answer_option_participant_answer ADD CONSTRAINT FK_6A9CD6EC69318723 FOREIGN KEY (participant_answer_id) REFERENCES participant_answer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE file ADD CONSTRAINT FK_8C9F361077D15A8B FOREIGN KEY (fk_question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE participant_answer ADD CONSTRAINT FK_68A1F4A477D15A8B FOREIGN KEY (fk_question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE participant_answer ADD CONSTRAINT FK_68A1F4A428A4071D FOREIGN KEY (fk_test_participation_id) REFERENCES test_participation (id)');
        $this->addSql('ALTER TABLE participant_answer_attribute ADD CONSTRAINT FK_2F1934B61AE92F9 FOREIGN KEY (fk_question_attribute_id) REFERENCES question_attribute (id)');
        $this->addSql('ALTER TABLE participant_answer_attribute ADD CONSTRAINT FK_2F1934B2D93C062 FOREIGN KEY (fk_participant_answer_id) REFERENCES participant_answer (id)');
        $this->addSql('ALTER TABLE participant_answer_attribute ADD CONSTRAINT FK_2F1934B54574032 FOREIGN KEY (fk_test_attribute_id) REFERENCES test_attribute (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494ECC7C9A99 FOREIGN KEY (fk_group_id) REFERENCES `group` (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EEE723975 FOREIGN KEY (fk_test_id) REFERENCES test (id)');
        $this->addSql('ALTER TABLE question_attribute ADD CONSTRAINT FK_F3AFAB60973B2CE3 FOREIGN KEY (fk_attribute_id) REFERENCES attribute (id)');
        $this->addSql('ALTER TABLE question_attribute ADD CONSTRAINT FK_F3AFAB6077D15A8B FOREIGN KEY (fk_question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE test_attribute ADD CONSTRAINT FK_78E77831973B2CE3 FOREIGN KEY (fk_attribute_id) REFERENCES attribute (id)');
        $this->addSql('ALTER TABLE test_attribute ADD CONSTRAINT FK_78E77831EE723975 FOREIGN KEY (fk_test_id) REFERENCES test (id)');
        $this->addSql('ALTER TABLE test_participation ADD CONSTRAINT FK_8DA05403EE723975 FOREIGN KEY (fk_test_id) REFERENCES test (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE answer_option_participant_answer DROP FOREIGN KEY FK_6A9CD6EC9A3BC2B9');
        $this->addSql('ALTER TABLE question_attribute DROP FOREIGN KEY FK_F3AFAB60973B2CE3');
        $this->addSql('ALTER TABLE test_attribute DROP FOREIGN KEY FK_78E77831973B2CE3');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494ECC7C9A99');
        $this->addSql('ALTER TABLE answer_option_participant_answer DROP FOREIGN KEY FK_6A9CD6EC69318723');
        $this->addSql('ALTER TABLE participant_answer_attribute DROP FOREIGN KEY FK_2F1934B2D93C062');
        $this->addSql('ALTER TABLE answer_option DROP FOREIGN KEY FK_A87F3A1777D15A8B');
        $this->addSql('ALTER TABLE file DROP FOREIGN KEY FK_8C9F361077D15A8B');
        $this->addSql('ALTER TABLE participant_answer DROP FOREIGN KEY FK_68A1F4A477D15A8B');
        $this->addSql('ALTER TABLE question_attribute DROP FOREIGN KEY FK_F3AFAB6077D15A8B');
        $this->addSql('ALTER TABLE participant_answer_attribute DROP FOREIGN KEY FK_2F1934B61AE92F9');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EEE723975');
        $this->addSql('ALTER TABLE test_attribute DROP FOREIGN KEY FK_78E77831EE723975');
        $this->addSql('ALTER TABLE test_participation DROP FOREIGN KEY FK_8DA05403EE723975');
        $this->addSql('ALTER TABLE participant_answer_attribute DROP FOREIGN KEY FK_2F1934B54574032');
        $this->addSql('ALTER TABLE participant_answer DROP FOREIGN KEY FK_68A1F4A428A4071D');
        $this->addSql('DROP TABLE answer_option');
        $this->addSql('DROP TABLE answer_option_participant_answer');
        $this->addSql('DROP TABLE attribute');
        $this->addSql('DROP TABLE file');
        $this->addSql('DROP TABLE `group`');
        $this->addSql('DROP TABLE participant_answer');
        $this->addSql('DROP TABLE participant_answer_attribute');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE question_attribute');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE test_attribute');
        $this->addSql('DROP TABLE test_participation');
    }
}
