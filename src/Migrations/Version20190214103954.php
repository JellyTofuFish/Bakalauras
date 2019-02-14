<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190214103954 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE answer (id INT AUTO_INCREMENT NOT NULL, is_correct TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE answer_multi_select (id INT AUTO_INCREMENT NOT NULL, answer_id INT NOT NULL, question_id INT DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL, text VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_66663550AA334807 (answer_id), INDEX IDX_666635501E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE answer_single_select (id INT AUTO_INCREMENT NOT NULL, answer_id INT NOT NULL, question_id INT DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL, text VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_CF7F891FAA334807 (answer_id), INDEX IDX_CF7F891F1E27F6BF (question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, complexity_id INT NOT NULL, test_id INT DEFAULT NULL, question VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL, INDEX IDX_B6F7494EDAC7F446 (complexity_id), INDEX IDX_B6F7494E1E5D0459 (test_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question_complexity (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, state_id INT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_D87F7E0C5D83CC1 (state_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test_state (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE answer_multi_select ADD CONSTRAINT FK_66663550AA334807 FOREIGN KEY (answer_id) REFERENCES answer (id)');
        $this->addSql('ALTER TABLE answer_multi_select ADD CONSTRAINT FK_666635501E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE answer_single_select ADD CONSTRAINT FK_CF7F891FAA334807 FOREIGN KEY (answer_id) REFERENCES answer (id)');
        $this->addSql('ALTER TABLE answer_single_select ADD CONSTRAINT FK_CF7F891F1E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EDAC7F446 FOREIGN KEY (complexity_id) REFERENCES question_complexity (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E1E5D0459 FOREIGN KEY (test_id) REFERENCES test (id)');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0C5D83CC1 FOREIGN KEY (state_id) REFERENCES test_state (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE answer_multi_select DROP FOREIGN KEY FK_66663550AA334807');
        $this->addSql('ALTER TABLE answer_single_select DROP FOREIGN KEY FK_CF7F891FAA334807');
        $this->addSql('ALTER TABLE answer_multi_select DROP FOREIGN KEY FK_666635501E27F6BF');
        $this->addSql('ALTER TABLE answer_single_select DROP FOREIGN KEY FK_CF7F891F1E27F6BF');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EDAC7F446');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E1E5D0459');
        $this->addSql('ALTER TABLE test DROP FOREIGN KEY FK_D87F7E0C5D83CC1');
        $this->addSql('DROP TABLE answer');
        $this->addSql('DROP TABLE answer_multi_select');
        $this->addSql('DROP TABLE answer_single_select');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE question_complexity');
        $this->addSql('DROP TABLE test');
        $this->addSql('DROP TABLE test_state');
    }
}
