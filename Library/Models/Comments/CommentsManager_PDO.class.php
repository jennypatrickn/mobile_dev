<?php

namespace Library\Models\Comments;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Library\Entities\Comment;

/**
 * Description of NewsManager_PDO
 *
 * @author N Jenny Patrick
 */
class CommentsManager_PDO extends CommentsManager {

    protected function add(Comment $comment) {
        $q = $this->dao->prepare('INSERT INTO comments SET news = :news,
auteur = :auteur, contenu = :contenu, date = NOW()');
        $q->bindValue(':news', $comment->news(), \PDO::PARAM_INT);
        $q->bindValue(':auteur', $comment->auteur());
        $q->bindValue(':contenu', $comment->contenu());
        $q->execute();
        $comment->setId($this->dao->lastInsertId());
    }

    /**
     * Méthode permettant d'enregistrer un commentaire.
     * @param $comment Le commentaire à enregistrer
     * @return void
     */
    public function save(Comment $comment) {
        if ($comment->isValid()) {
            $comment->isNew() ? $this->add($comment) : $this->modify($comment);
        } else {
            throw new \RuntimeException('Le commentaire doit être validé
pour être enregistré');
        }
    }

    public function getListOf($news) {
        if (!ctype_digit($news)) {
            throw new \InvalidArgumentException('L\'identifiant de la news
passé doit être un nombre entier valide');
        }
        $q = $this->dao->prepare('SELECT id, news, auteur, contenu, date
FROM comments WHERE news = :news');
        $q->bindValue(':news', $news, \PDO::PARAM_INT);
        $q->execute();
        $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Library\Entities\Comment');
        $comments = $q->fetchAll();
        foreach ($comments as $comment) {
            $comment->setDate(new \DateTime($comment->date()));
        }
        return $comments;
    }

    protected function modify(Comment $comment) {
        $q = $this->dao->prepare('UPDATE comments SET auteur = :auteur,
contenu = :contenu WHERE id = :id');
        $q->bindValue(':auteur', $comment->auteur());
        $q->bindValue(':contenu', $comment->contenu());
        $q->bindValue(':id', $comment->id(), \PDO::PARAM_INT);
        $q->execute();
    }

    public function get($id) {
        $q = $this->dao->prepare('SELECT id, news, auteur, contenu FROM
comments WHERE id = :id');
        $q->bindValue(':id', (int) $id, \PDO::PARAM_INT);
        $q->execute();
        $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Library\Entities\Comment');
        return $q->fetch();
    }

    public function count() {
        return $this->dao->query('SELECT COUNT(*) FROM comments')->fetchColumn();
    }

    public function delete($id) {
        $this->dao->exec('DELETE FROM comments WHERE id = ' . (int) $id);
    }

}
