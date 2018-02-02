<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('calm');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = ['comment 1', 'comment 2', 'comment 3'];

        return $this->render('article/show.html.twig', [
            'title' => $slug,
            'comments' => $comments,
        ]);

    }

}