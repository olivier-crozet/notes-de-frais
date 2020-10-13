<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EmsController extends AbstractController
{
    /**
     * @Route("/", name="ems")
     * 
     */
    public function index()
    {
        return $this->render('ems/index.html.twig', [
            'controller_name' => 'EmsController',
        ]);
    }
    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        return $this->render('ems/home.html.twig', [
            'controller_name' => 'EmsController',
            'nomVariable'=>"contenu de la variable"
            ]);
        }

        /**
     * @Route("/ems", name="connexion")
     */
    public function connexion()
    {
        return $this->render('ems/connexion.html.twig', [
            'controller_name' => 'EmsController',           
            ]);
        }

    /**
     * @Route("/derniereNote", name="derniereNote")
     */
    public function derniereNote()
    {
        return $this->render('ems/derniereNote.html.twig', [
            'controller_name' => 'EmsController',           
            ]);
        }

         /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription()
    {
        return $this->render('ems/inscription.html.twig', [
            'controller_name' => 'EmsController',           
            ]);
        }


    /**
     * @Route("/supression", name="supression")
     */
    public function supression()
    {
        return $this->render('ems/supression.html.twig', [
            'controller_name' => 'EmsController',           
            ]);
        }


          /**
     * @Route("/lesNotes/accepter", name="accepter")
     */
    public function accepter()
    {
        return $this->render('ems/lesNotes/accepter.html.twig', [
            'controller_name' => 'EmsController',           
            ]);
        }

};

