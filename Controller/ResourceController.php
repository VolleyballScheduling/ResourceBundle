<?php
namespace Volleyball\Bundle\ResourceBundle\Controller;

use \Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use \Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use \Symfony\Component\HttpFoundation\Request;

use \Pagerfanta\Pagerfanta;
use \Pagerfanta\Adapter\DoctrineORMAdapter;
use \Pagerfanta\Exception\NotValidCurrentPageException;
use \Pagerfanta\View\TwitterBootstrapView;

class ResourceController extends \Volleyball\Bundle\UtilityBundle\Controller\UtilityController
{
    /**
     * Docs action
     * @Route("/docs", name="volleyball_docs")
     * @param Request $request
     */
    public function docsAction(Request $request) {
        
    }
}
