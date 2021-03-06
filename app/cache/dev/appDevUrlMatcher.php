<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/GSBR')) {
            // crgsbr_homepage
            if (rtrim($pathinfo, '/') === '/GSBR') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'crgsbr_homepage');
                }

                return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'crgsbr_homepage',);
            }

            // crgsbr_profil
            if ($pathinfo === '/GSBR/profil') {
                return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\DefaultController::profilAction',  '_route' => 'crgsbr_profil',);
            }

            // crgsbr_listeMedicament
            if ($pathinfo === '/GSBR/listeMedicament') {
                return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\MedicamentController::listeAction',  '_route' => 'crgsbr_listeMedicament',);
            }

            // crgsbr_rechercheMedicament
            if ($pathinfo === '/GSBR/rechercheMedicament') {
                return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\MedicamentController::rechercheAction',  '_route' => 'crgsbr_rechercheMedicament',);
            }

            // crgsbr_listePraticien
            if ($pathinfo === '/GSBR/listePraticien') {
                return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\PraticienController::listeAction',  '_route' => 'crgsbr_listePraticien',);
            }

            // crgsbr_recherchePraticien
            if ($pathinfo === '/GSBR/recherchePraticien') {
                return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\PraticienController::rechercheAction',  '_route' => 'crgsbr_recherchePraticien',);
            }

            // crgsbr_consulterRapportsVisite
            if ($pathinfo === '/GSBR/consulterRapportsVisite') {
                return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\RapportVisiteController::consulterAction',  '_route' => 'crgsbr_consulterRapportsVisite',);
            }

            // crgsbr_ajouterRapportsVisite
            if ($pathinfo === '/GSBR/ajouterRapportsVisite') {
                return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\RapportVisiteController::ajouterAction',  '_route' => 'crgsbr_ajouterRapportsVisite',);
            }

            if (0 === strpos($pathinfo, '/GSBR/connexion')) {
                // crgsbr_connexion
                if ($pathinfo === '/GSBR/connexion') {
                    return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\DefaultController::loginAction',  '_route' => 'crgsbr_connexion',);
                }

                // crgsbr_connexion_check
                if ($pathinfo === '/GSBR/connexion_check') {
                    return array('_route' => 'crgsbr_connexion_check');
                }

            }

            // crgsbr_deconnexion
            if ($pathinfo === '/GSBR/deconnexion') {
                return array('_route' => 'crgsbr_deconnexion');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
