<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/platal')) {
            // junior_siteinterne_index
            if (rtrim($pathinfo, '/') === '/platal') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'junior_siteinterne_index');
                }

                return array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::indexAction',  '_route' => 'junior_siteinterne_index',);
            }

            if (0 === strpos($pathinfo, '/platal/mission')) {
                if (0 === strpos($pathinfo, '/platal/missions')) {
                    // junior_siteinterne_missions
                    if ($pathinfo === '/platal/missions') {
                        return array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::missionsAction',  '_route' => 'junior_siteinterne_missions',);
                    }

                    if (0 === strpos($pathinfo, '/platal/missions/c')) {
                        // junior_siteinterne_missions_categories
                        if (0 === strpos($pathinfo, '/platal/missions/categories') && preg_match('#^/platal/missions/categories(?:/(?P<suppr>[^/]++)(?:/(?P<id>\\d*))?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'junior_siteinterne_missions_categories')), array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::categoriesAction',  'suppr' => 'watch',  'id' => 0,));
                        }

                        if (0 === strpos($pathinfo, '/platal/missions/client')) {
                            // junior_siteinterne_missions_clients
                            if (0 === strpos($pathinfo, '/platal/missions/clients') && preg_match('#^/platal/missions/clients(?:/(?P<suppr>[^/]++)(?:/(?P<id>\\d*))?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'junior_siteinterne_missions_clients')), array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::clientsAction',  'suppr' => 'watch',  'id' => 0,));
                            }

                            // junior_siteinterne_missions_client
                            if (preg_match('#^/platal/missions/client(?:/(?P<id>\\d*)(?:/(?P<edit>[^/]++))?)?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'junior_siteinterne_missions_client')), array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::clientAction',  'edit' => 'null',  'id' => 0,));
                            }

                        }

                        // junior_siteinterne_missions_competences
                        if (0 === strpos($pathinfo, '/platal/missions/competences') && preg_match('#^/platal/missions/competences(?:/(?P<suppr>[^/]++)(?:/(?P<id>\\d*))?)?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'junior_siteinterne_missions_competences')), array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::competencesAction',  'suppr' => 'watch',  'id' => 0,));
                        }

                    }

                    // junior_siteinterne_missions_ajouter
                    if ($pathinfo === '/platal/missions/add') {
                        return array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::addAction',  '_route' => 'junior_siteinterne_missions_ajouter',);
                    }

                }

                // junior_siteinterne_mission
                if (preg_match('#^/platal/mission/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'junior_siteinterne_mission')), array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::missionAction',));
                }

                // junior_siteinterne_docmission
                if (preg_match('#^/platal/mission/(?P<id>\\d+)/(?P<iddoc>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'junior_siteinterne_docmission')), array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::docAction',));
                }

                // junior_siteinterne_docvierge
                if (preg_match('#^/platal/mission/(?P<id>\\d+)/(?P<iddoc>[^/\\.]++)\\.(?P<typedoc>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'junior_siteinterne_docvierge')), array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::docviergeAction',));
                }

                // junior_siteinterne_mission_modifier
                if (0 === strpos($pathinfo, '/platal/mission/edit') && preg_match('#^/platal/mission/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'junior_siteinterne_mission_modifier')), array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::editAction',));
                }

            }

            // junior_siteinterne_docs
            if ($pathinfo === '/platal/docs') {
                return array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::docsAction',  '_route' => 'junior_siteinterne_docs',);
            }

            if (0 === strpos($pathinfo, '/platal/user')) {
                // junior_siteinterne_user
                if (preg_match('#^/platal/user/(?P<id>\\d+)(?:\\.(?P<action>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'junior_siteinterne_user')), array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::userAction',  'action' => 'null',));
                }

                // junior_siteinterne_users
                if (0 === strpos($pathinfo, '/platal/users') && preg_match('#^/platal/users(?:/(?P<idmission>[^/]++)(?:/(?P<refIntCDP>[^/]++)(?:/(?P<iduser>[^/]++)(?:/(?P<add>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'junior_siteinterne_users')), array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::usersAction',  'refIntCDP' => 0,  'idmission' => 0,  'iduser' => 0,  'add' => 'null',));
                }

            }

            if (0 === strpos($pathinfo, '/platal/modif')) {
                // junior_siteinterne_modification_mission
                if (0 === strpos($pathinfo, '/platal/modifmission') && preg_match('#^/platal/modifmission(?:/(?P<idmission>[^/]++)(?:/(?P<iduser>[^/]++)(?:/(?P<supprInt>[^/]++)(?:/(?P<changerEtat>[^/]++)(?:/(?P<changerPublique>[^/]++)(?:/(?P<modifMission>[^/]++)(?:/(?P<modifDates>[^/]++)(?:/(?P<modifRaisonEchec>[^/]++)(?:/(?P<modifDocs>[^/]++)(?:/(?P<modifPhases>[^/]++)(?:/(?P<idphase>[^/]++))?)?)?)?)?)?)?)?)?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'junior_siteinterne_modification_mission')), array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::modifAction',  'supprInt' => 'null',  'idmission' => 0,  'iduser' => 0,  'idphase' => 0,  'add' => 'null',  'changerEtat' => 'null',  'changerPublique' => 'null',  'modifMission' => 'null',  'modifDates' => 'null',  'modifDocs' => 'null',  'modifRaisonEchec' => 'null',  'modifPhases' => 'null',));
                }

                // junior_siteinterne_modification_detailavancement
                if (0 === strpos($pathinfo, '/platal/modifdetailavancement') && preg_match('#^/platal/modifdetailavancement(?:/(?P<idmission>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'junior_siteinterne_modification_detailavancement')), array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::modifdetailavancementAction',  'idmission' => 0,));
                }

            }

            // junior_siteinterne_config
            if (0 === strpos($pathinfo, '/platal/config') && preg_match('#^/platal/config(?:/(?P<iduser>[^/]++)(?:/(?P<action>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'junior_siteinterne_config')), array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SiteinterneController::configAction',  'iduser' => 0,  'action' => 0,));
            }

        }

        // junior_site_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'junior_site_homepage');
            }

            return array (  '_controller' => 'Junior\\SiteBundle\\Controller\\SiteController::indexAction',  '_route' => 'junior_site_homepage',);
        }

        // junior_site_mail_contact
        if (rtrim($pathinfo, '/') === '/contact') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'junior_site_mail_contact');
            }

            return array (  '_controller' => 'Junior\\SiteBundle\\Controller\\SiteController::mailAction',  '_route' => 'junior_site_mail_contact',);
        }

        if (0 === strpos($pathinfo, '/platal/log')) {
            if (0 === strpos($pathinfo, '/platal/login')) {
                // login
                if ($pathinfo === '/platal/login') {
                    return array (  '_controller' => 'Junior\\SiteinterneBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/platal/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/platal/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
