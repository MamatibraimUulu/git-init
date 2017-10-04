<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomepageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $postRepository = $em->getRepository(Post::class);
        $posts = $postRepository->findAll();
        dump($posts);
        // replace this example code with whatever you need
        return $this->render('Homepage/index.html.twig', [
            'posts' => $posts
        ]);
    }
}
