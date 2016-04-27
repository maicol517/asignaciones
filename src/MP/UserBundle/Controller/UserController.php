<?php

namespace MP\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
      //  return $this->render('MPUserBundle:Default:index.html.twig', array('name' => $name)); /
    
    //return new Response('Welcome to user');
      
      $em = $this->getDoctrine()->getManager(); 
      
      $users = $em->getRepository('MPUserBundle:User')->findAll();
   
     /*     $res = 'Lista de Usuarios: <br/>'; 
   
   foreach ($users as $user) {
       
       
       $res .='Usuarios: '.$user->getUsername().' - Email: '.$user->getEmail().'<br/>';
   }
   
   return new Response($res);
   */
   
   return $this->render('MPUserBundle:User:index.html.twig', array('users' => $users ));
   
   }
   
       public function viewAction($id)
    {
      
    $repository = $this->getDoctrine()->getRepository('MPUserBundle:User');
    
    $user = $repository->find ($id);
    
    //$user = $repository->findOneByUsername($nombre);
      
    //return new Response('Usuarios; '. $user->getUsername().' con email '.$user->getEmail());
   
   
   return $this->render('MPUserBundle:User:view.html.twig', array('users' => $users ));
   
   }
    

}

