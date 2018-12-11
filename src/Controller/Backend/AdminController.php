<?php declare(strict_types=1);

namespace Atom3\Controller\Backend;

use Atom3\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

class AdminController extends BaseController
{
/*    public function __construct(Config $config, CsrfTokenManagerInterface $csrfTokenManager, TemplateChooser $templateChooser)
    {
        parent::__construct($config, $csrfTokenManager);

        $this->templateChooser = $templateChooser;
    }
 */
    /**
     * @Route("/", methods={"GET"}, name="admin")
     *
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function admin(): Response
    {   
	    /*
        $homepage = $this->getOption('theme/homepage') ?: $this->getOption('general/homepage');
        $params = explode('/', $homepage);

        // @todo Get $homepage content, using "setcontent"
        $record = $contentRepository->findOneBy([
            'contentType' => $params[0],
            'id' => $params[1],
        ]);
        if (! $record) {
            $record = $contentRepository->findOneBy(['contentType' => $params[0]]);
	}*/

	    $templates = 'admin.html.twig';
	    $record ="Hello, Atom3-core admin";
	    //$this->templateChooser->homepage();

        return $this->render($templates, ['record' => $record]);
    }
}
