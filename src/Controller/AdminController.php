<?php

namespace App\Controller;
use App\Entity\Nez;
use App\Entity\User;
use App\Form\NezType;
use App\Entity\Marque;
use App\Entity\Parfum;
use App\Form\UserType;
use App\Entity\NoteFond;
use App\Entity\NoteTete;
use App\Form\MarqueType;
use App\Form\ParfumType;
use App\Entity\NoteCoeur;
use App\Form\FamilleType;
use App\Form\NoteFondType;
use App\Form\NoteTeteType;
use App\Form\NoteCoeurType;
use App\Entity\FamilleOlfactive;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class AdminController extends AbstractController
{



    /**
     * @Route("/admin", name="admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig');
	}
	
    /**
	*@Route("admin/addParfum", name="admin/addParfum")
	*/

	public function addParfum(request $request)
	{
		$parfum = new Parfum();
		$form = $this->createForm(ParfumType::class,$parfum);
		if($request->isMethod('POST')){
			$form->handleRequest($request);
			$em = $this->getDoctrine()->getManager();
			$em->persist($parfum);
			$em->flush();
			return $this->render('admin/addParfum.html.twig', array('form'=> $form->createView()));
		}
	     return $this->render('admin/addParfum.html.twig', array('form'=> $form->createView()));
    }


    
    /**
	*@Route("admin/addUser", name="admin/addUser")
	*/

	public function addUser(request $request, UserPasswordEncoderInterface $passwordEncoder)
	{
		$user = new User();
		$form = $this->createForm(UserType::class,$user);
		if($request->isMethod('POST')){
			$form->handleRequest($request);
			$password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
			return $this->render('admin/addUser.html.twig', array('form'=> $form->createView()));
		}
	     return $this->render('admin/addUser.html.twig', array('form'=> $form->createView()));
    }

    /**
	*@Route("admin/login", name="account_login")
	*/

    
    
	/**
	*@Route("admin/showAllParfum", name="admin/showAllParfum")
	*/

	public function showAllParfum(request $request)
	{
		$repository = $this->getDoctrine()->getManager()->getRepository(Parfum::class);
		$rows = $repository->findAll();
		return $this->render('admin/showAllParfum.html.twig', array('rows'=>$rows));
	}

	/**
	*@Route("admin/showParfum", name="admin/showParfum")
	*  @return Response
	*/

	public function showParfum(request $request)
	{	
		$id = $request -> query->get('id');
		$repository = $this->getDoctrine()->getManager()->getRepository(Parfum::class);
		$rows = $repository->find($id);
		dump($rows->getTetefk());
		return $this->render('admin/showParfum.html.twig', array('rows'=>$rows));
	}


}
