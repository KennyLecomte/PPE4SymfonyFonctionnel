<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // tobat_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'tobat_homepage');
            }

            return array (  '_controller' => 'TobatBundle\\Controller\\DefaultController::indexAction',  '_route' => 'tobat_homepage',);
        }

        // tobat_test
        if ('/test' === $pathinfo) {
            return array (  '_controller' => 'TobatBundle\\Controller\\DefaultController::testAction',  '_route' => 'tobat_test',);
        }

        if (0 === strpos($pathinfo, '/get')) {
            // tobat_getBudgetsJSON
            if ('/getBudgetsJSON' === $pathinfo) {
                return array (  '_controller' => 'TobatBundle\\Controller\\DefaultController::getBudgetsJSONAction',  '_route' => 'tobat_getBudgetsJSON',);
            }

            // tobat_getBateauxJSON
            if ('/getBateauxJSON' === $pathinfo) {
                return array (  '_controller' => 'TobatBundle\\Controller\\DefaultController::getBateauxJSONAction',  '_route' => 'tobat_getBateauxJSON',);
            }

            // tobat_getCategoriesSocialesJSON
            if ('/getCategoriesSocialesJSON' === $pathinfo) {
                return array (  '_controller' => 'TobatBundle\\Controller\\DefaultController::getCategoriesSocialesJSONAction',  '_route' => 'tobat_getCategoriesSocialesJSON',);
            }

        }

        // tobat_nbVisiteursCritere
        if ('/nbVisiteursCritere' === $pathinfo) {
            return array (  '_controller' => 'TobatBundle\\Controller\\DefaultController::nbVisiteursCritereAction',  '_route' => 'tobat_nbVisiteursCritere',);
        }

        // tobat_nbEnquete
        if ('/nbEnquete' === $pathinfo) {
            return array (  '_controller' => 'TobatBundle\\Controller\\DefaultController::getNbEnqueteAction',  '_route' => 'tobat_nbEnquete',);
        }

        if (0 === strpos($pathinfo, '/classement')) {
            // tobat_classementBateaux
            if ('/classementBateaux' === $pathinfo) {
                return array (  '_controller' => 'TobatBundle\\Controller\\DefaultController::getClassementBateauxAction',  '_route' => 'tobat_classementBateaux',);
            }

            // tobat_classement
            if ('/classement' === $pathinfo) {
                return array (  '_controller' => 'TobatBundle\\Controller\\DefaultController::classementAction',  '_route' => 'tobat_classement',);
            }

        }

        // tobat_enquete
        if ('/enquete' === $pathinfo) {
            return array (  '_controller' => 'TobatBundle\\Controller\\DefaultController::enqueteAction',  '_route' => 'tobat_enquete',);
        }

        // tobat_deconnexion
        if ('/deconnexion' === $pathinfo) {
            return array (  '_controller' => 'TobatBundle\\Controller\\DefaultController::deconnexionAction',  '_route' => 'tobat_deconnexion',);
        }

        // tobat_repartitionVisiteur
        if ('/repartition' === $pathinfo) {
            return array (  '_controller' => 'TobatBundle\\Controller\\DefaultController::repartitionVisiteurAction',  '_route' => 'tobat_repartitionVisiteur',);
        }

        // tobat_visiteurs
        if ('/visiteurs' === $pathinfo) {
            return array (  '_controller' => 'TobatBundle\\Controller\\DefaultController::visiteursAction',  '_route' => 'tobat_visiteurs',);
        }

        // tobat_budget
        if ('/budget' === $pathinfo) {
            return array (  '_controller' => 'TobatBundle\\Controller\\DefaultController::budgetAction',  '_route' => 'tobat_budget',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
