<?php
namespace Cms\DashBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cms\DashBundle\DependencyInjection\CmsDashExtension;

class ElementsController extends Controller
{
	public function sidebarAction()
	{

		/*$menus = array(
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
			);*/
		$extension = new CmsDashExtension;
		var_dump($extension->load(array('menus')));exit;
		return $this->render('CmsDashBundle:Elements:sidebar.html.twig', compact('menus'));
	}
}