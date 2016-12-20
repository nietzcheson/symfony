<?php

namespace AppBundle\Controller;

use AppBundle\Form\ArticleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }

    /**
     * @Route("/article", name="article")
     */
    public function articleAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $article = new Article();

        $articleForm = $this->createForm(new ArticleType(), $article)->handleRequest($request);

        if($articleForm->isValid()){

            $article->setState('new');

            //$factory = $this->get('sm.factory');

            //$articleSM = $factory->get($article, 'app_article');

            //$articleSM->apply('create');

            $em->persist($article);
            $em->flush();

        }

        $articles = $em->getRepository('AppBundle:Article')->findAll();

        return $this->render('default/article.html.twig', array(
            'form' => $articleForm->createView(),
            'articles' => $articles
        ));

    }

    /**
     * @Route("/send-mail", name="send_mail")
     */
    public function sendMailAction(Request $request)
    {

        $name = 'Cristian Angulo Nova';

        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('no-reply@xoppal.com')
            ->setTo('cristianangulonova@gmail.com')
            ->setBody('Send from Xoppal')
            /*->setBody(
                $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    'Email/send-mail.html.twig',
                    array('name' => $name)
                ),
                'text/html'
            )*/
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'Emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;
        $this->get('mailer')->send($message);

        return new Response('Send mail');
    }
}
