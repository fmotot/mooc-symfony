<?php
// src/Controller/AdvertController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * @Route("/advert")
 */
class AdvertController extends AbstractController
{
	/**
	 * @Route("/{page}", name="oc_advert_index", requirements={"page" = "\d+"}, defaults={"page" = 1})
	 */
	public function index()
	{
		return $this->render("Advert/index.html.twig", [
			'name' => "Winzou"
		]);
	}

	/**
	 * @Route("/view/{id}", name="oc_advert_view", requirements={"id" = "\d+"})
	 */
	public function view($id, Request $request)
	{
		$tag = $request->query->get('tag');

		return $this->render("Advert/view.html.twig", [
			'id'	=> $id,
			'tag'	=> $tag
		]);
	}

	/**
	 * @Route("/add", name="oc_advert_add")
	 */
	public function add()
	{

	}

	/**
	 * @Route("/edit/{id}", name="oc_advert_edit", requirements={"id" = "\d+"})
	 */
	public function edit($id)
	{

	}

	/**
	 * @Route("/delete/{id}", name="oc_advert_delete", requirements={"id" = "\d+"})
	 */
	public function delete($id)
	{

	}
	/**
	 * @Route("/view/{year}/{slug}.{_format}", name="oc_advert_view_slug", requirements={
		"year"	= "\d{4}",
		"_format"= "html|xml"
	 }, defaults={"format" = "html"})
	 */
	public function viewSlug($slug, $year, $_format)
	{
		return new Response("On pourrait afficher l'annonce correspondant au slug '" . $slug . "', créée en " . $year . " et au format " . $format . ".");
	}




	public function byeAction()
	{
		return $this->render("Advert/bye.html.twig", [
			'name' => "Tous"
		]);
	}
}