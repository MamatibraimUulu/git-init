<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/blog")
 */
class BlogController extends Controller
{
    /**
     * @Route("/{id}", name="blog.index")
     */
    public function getBlogAction(Post $post,Request $request)
    {
        return $this->render(':Blog:index.html.twig', [
            'post' => $post
        ]);
    }
}
