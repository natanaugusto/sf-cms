<?php
namespace Cms\DashBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ElementsController extends Controller
{
	public function sidebarAction()
	{
		$menus = array(
			array(
				'title' => 'Dashboard',
				'link' => 'board',
				'icon' => 'dashboard',
				'dropdown' => null,
				),
			array(
				'title' => 'Pages',
				'link' => '#',
				'icon' => 'list',
				'dropdown' => array(
					array(
						'title' => 'List',
						'link' => 'pages/list',
						),
					array(
						'title' => 'New',
						'link' => 'pages/new',
						),
					),
				)
			);
		return $this->render('CmsDashBundle:Elements:sidebar.html.twig', compact('menus'));
	}
}