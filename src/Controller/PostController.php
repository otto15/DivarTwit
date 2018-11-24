<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/", name="post")
     */
    public function indexAction()
    {
        return $this->render('post/index.html.twig', [
        ]);
    }


    /**
     * @Route("/post_making", name="make_post")
     */
    public function post_makingAction()
    {
        return $this->render('post/post_making.html.twig', [
        ]);
    }


    /**
     * @Route("/posts", name="post_list")
     */
    public function postsAction()
    {
        return $this->render('post/post_list.html.twig', [
        ]);
    }


    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('post/about.html.twig', [
        ]);
    }
}