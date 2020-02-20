<?php

namespace App\Controller;
use App\Entity\Marque;
use App\Entity\Nez;
use App\Form\MarqueType;
use App\Form\NoteTeteType;
use App\Form\NoteCoeurType;
use App\Form\NoteFondType;
use App\Entity\NoteTete;
use App\Entity\NoteCoeur;
use App\Entity\NoteFond;
use App\Entity\FamilleOlfactive;
use App\Form\FamilleType;
use App\Entity\Parfum;
use App\Form\ParfumType;
use App\Form\NezType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ParfumController extends AbstractController
{
    /**
     * @Route("", name="parfum")
     */
  
	public function showAllParfum(request $request)
	{
		$repository = $this->getDoctrine()->getManager()->getRepository(Parfum::class);
		$rows = $repository->findAll();
		return $this->render('parfum/showAllParfum.html.twig', array('rows'=>$rows));
	}

   	/**
	*@Route("showParfum", name="parfum/showParfum")
	*  @return Response
	*/

	public function showParfum(request $request)
	{	
		$id = $request -> query->get('id');
		$repository = $this->getDoctrine()->getManager()->getRepository(Parfum::class);
		$rows = $repository->find($id);
		dump($rows->getTetefk());
		return $this->render('parfum/showParfum.html.twig', array('rows'=>$rows));
	}
}
