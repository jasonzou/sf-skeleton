<?php declare(strict_types=1);

namespace Atom3\Controller;

use Atom3\Version;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Tightenco\Collect\Support\Collection;

class BaseController extends AbstractController
{
    /** @var Config */
    protected $config;

    /** @var TemplateChooser */
    protected $templateChooser;

    /** @var CsrfTokenManagerInterface */
    protected $csrfTokenManager;
/*
    public function __construct(Config $config, CsrfTokenManagerInterface $csrfTokenManager)
    {
        $this->config = $config;
        $this->csrfTokenManager = $csrfTokenManager;
    }
 */
    /**
     * Renders a view.
     *
     * @final
     *
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    /*
    protected function renderTemplate($template, array $parameters = [], ?Response $response = null): Response
    {
        $twig = $this->container->get('twig');

        // Set config and version.
        $parameters['config'] = $this->config;
        $parameters['version'] = Version::VERSION;
        $parameters['user'] = $this->getUser();

        // Resolve string|array of templates into the first one that is found.
        if ($template instanceof Collection) {
            $template = $twig->resolveTemplate($template->toArray());
        }

        $content = $twig->render($template, $parameters);

        if ($response === null) {
            $response = new Response();
        }

        $response->setContent($content);

        return $response;
    }
     */
    /**
     * Shortcut for {@see \Atom3\Config::get}.
     *
     * @param string $path
     *
     * @return string|int|array|null
     */
    /*
    protected function getOption($path, $default = null)
    {
        return $this->config->get($path, $default);
    }
     */
}
