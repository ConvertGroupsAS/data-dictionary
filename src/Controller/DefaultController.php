<?php

namespace DataDictionaryBundle\Controller;

use Pimcore\Controller\FrontendController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use DataDictionaryBundle\Graph\Presenters\GraphViz;
use DataDictionaryBundle\Graph\Graph;

class DefaultController extends FrontendController
{
    /**
     * @Route("/data-dictionary")
     * @return Response
     * @throws \Exception
     */
    public function indexAction()
    {
        $graph = new Graph();
        $graphViz = new GraphViz($graph);

        return $this->render(
            "DataDictionaryBundle:default:index.html.php",
            ['image' => $graphViz->createImageHtml()]
        );
    }
}
