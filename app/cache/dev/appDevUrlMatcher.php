<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        if (0 === strpos($pathinfo, '/admin/recrutement_test_admin_bundle/pref')) {
            // RecrutementTest_AdminBundle_Pref_list
            if (rtrim($pathinfo, '/') === '/admin/recrutement_test_admin_bundle/pref') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'RecrutementTest_AdminBundle_Pref_list');
                }

                return array (  '_controller' => 'RecrutementTest\\AdminBundle\\Controller\\Pref\\ListController::indexAction',  '_route' => 'RecrutementTest_AdminBundle_Pref_list',);
            }

            // RecrutementTest_AdminBundle_Pref_excel
            if ($pathinfo === '/admin/recrutement_test_admin_bundle/pref/excel') {
                return array (  '_controller' => 'RecrutementTest\\AdminBundle\\Controller\\Pref\\ExcelController::excelAction',  '_route' => 'RecrutementTest_AdminBundle_Pref_excel',);
            }

            // RecrutementTest_AdminBundle_Pref_edit
            if (preg_match('#^/admin/recrutement_test_admin_bundle/pref/(?P<pk>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecrutementTest_AdminBundle_Pref_edit')), array (  '_controller' => 'RecrutementTest\\AdminBundle\\Controller\\Pref\\EditController::indexAction',));
            }

            // RecrutementTest_AdminBundle_Pref_update
            if (preg_match('#^/admin/recrutement_test_admin_bundle/pref/(?P<pk>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_RecrutementTest_AdminBundle_Pref_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecrutementTest_AdminBundle_Pref_update')), array (  '_controller' => 'RecrutementTest\\AdminBundle\\Controller\\Pref\\EditController::updateAction',));
            }
            not_RecrutementTest_AdminBundle_Pref_update:

            // RecrutementTest_AdminBundle_Pref_show
            if (preg_match('#^/admin/recrutement_test_admin_bundle/pref/(?P<pk>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecrutementTest_AdminBundle_Pref_show')), array (  '_controller' => 'RecrutementTest\\AdminBundle\\Controller\\Pref\\ShowController::indexAction',));
            }

            // RecrutementTest_AdminBundle_Pref_object
            if (preg_match('#^/admin/recrutement_test_admin_bundle/pref/(?P<pk>[^/]++)/(?P<action>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecrutementTest_AdminBundle_Pref_object')), array (  '_controller' => 'RecrutementTest\\AdminBundle\\Controller\\Pref\\ActionsController::objectAction',));
            }

            // RecrutementTest_AdminBundle_Pref_batch
            if ($pathinfo === '/admin/recrutement_test_admin_bundle/pref/batch') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_RecrutementTest_AdminBundle_Pref_batch;
                }

                return array (  '_controller' => 'RecrutementTest\\AdminBundle\\Controller\\Pref\\ActionsController::batchAction',  '_route' => 'RecrutementTest_AdminBundle_Pref_batch',);
            }
            not_RecrutementTest_AdminBundle_Pref_batch:

            // RecrutementTest_AdminBundle_Pref_new
            if ($pathinfo === '/admin/recrutement_test_admin_bundle/pref/new') {
                return array (  '_controller' => 'RecrutementTest\\AdminBundle\\Controller\\Pref\\NewController::indexAction',  '_route' => 'RecrutementTest_AdminBundle_Pref_new',);
            }

            // RecrutementTest_AdminBundle_Pref_create
            if ($pathinfo === '/admin/recrutement_test_admin_bundle/pref/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_RecrutementTest_AdminBundle_Pref_create;
                }

                return array (  '_controller' => 'RecrutementTest\\AdminBundle\\Controller\\Pref\\NewController::createAction',  '_route' => 'RecrutementTest_AdminBundle_Pref_create',);
            }
            not_RecrutementTest_AdminBundle_Pref_create:

            // RecrutementTest_AdminBundle_Pref_filters
            if ($pathinfo === '/admin/recrutement_test_admin_bundle/pref/filter') {
                return array (  '_controller' => 'RecrutementTest\\AdminBundle\\Controller\\Pref\\ListController::filtersAction',  '_route' => 'RecrutementTest_AdminBundle_Pref_filters',);
            }

            // RecrutementTest_AdminBundle_Pref_scopes
            if (0 === strpos($pathinfo, '/admin/recrutement_test_admin_bundle/pref/scope') && preg_match('#^/admin/recrutement_test_admin_bundle/pref/scope/(?P<group>[^/]++)/(?P<scope>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RecrutementTest_AdminBundle_Pref_scopes')), array (  '_controller' => 'RecrutementTest\\AdminBundle\\Controller\\Pref\\ListController::scopesAction',));
            }

        }

        // recrutement_my_dashboard_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'recrutement_my_dashboard_homepage')), array (  '_controller' => 'Recrutement\\MyDashboardBundle\\Controller\\DefaultController::indexAction',));
        }

        // my_dashboard_welcome
        if ($pathinfo === '/plop') {
            return array (  '_controller' => 'Recrutement\\MyDashboardBundle\\Controller\\DashboardController::welcomeAction',  '_route' => 'my_dashboard_welcome',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // drop_reponse_in_question
            if (0 === strpos($pathinfo, '/admin/drop/reponse') && preg_match('#^/admin/drop/reponse(?:/(?P<iIdReponse>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'drop_reponse_in_question')), array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\ReponseController::dropReponseInQuestionAction',  'iIdReponse' => NULL,));
            }

            if (0 === strpos($pathinfo, '/admin/manage')) {
                if (0 === strpos($pathinfo, '/admin/manage/reponse/popin')) {
                    // manage_reponse_popin_ajax
                    if ($pathinfo === '/admin/manage/reponse/popin') {
                        return array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\ReponseController::manageReponseAjaxAction',  'iId' => NULL,  '_route' => 'manage_reponse_popin_ajax',);
                    }

                    // load_reponse_popin_ajax
                    if ($pathinfo === '/admin/manage/reponse/popin') {
                        return array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\ReponseController::loadReponsePopinAjaxAction',  '_route' => 'load_reponse_popin_ajax',);
                    }

                }

                // manage_questions_form
                if (0 === strpos($pathinfo, '/admin/manage/form/question') && preg_match('#^/admin/manage/form/question(?:/(?P<iId>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'manage_questions_form')), array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\QuestionController::displayQuestionFormAction',  'iId' => NULL,));
                }

                if (0 === strpos($pathinfo, '/admin/manage/question')) {
                    // drop_question
                    if (0 === strpos($pathinfo, '/admin/manage/question/suppression') && preg_match('#^/admin/manage/question/suppression(?:/(?P<iIdQuestion>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'drop_question')), array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\QuestionController::dropQuestionAction',  'iIdQuestion' => NULL,));
                    }

                    // manage_question
                    if (preg_match('#^/admin/manage/question(?:/(?P<iIdQuestion>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'manage_question')), array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\QuestionController::manageQuestionAction',  'iIdQuestion' => NULL,));
                    }

                }

                // manage_reponse
                if ($pathinfo === '/admin/manage/reponse') {
                    return array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\QuestionController::manageReponseAction',  '_route' => 'manage_reponse',);
                }

            }

        }

        // recrutement_test_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'recrutement_test_homepage')), array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // list_test
            if ($pathinfo === '/admin/list/tests') {
                return array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\TestController::listTestsAction',  '_route' => 'list_test',);
            }

            // manage_admin_test
            if (0 === strpos($pathinfo, '/admin/manage/test') && preg_match('#^/admin/manage/test(?:/(?P<sAction>[^/]++)(?:/(?P<iId>[^/]++)(?:/(?P<iNbQuestion>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'manage_admin_test')), array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\TestController::manageTestAction',  'iId' => NULL,  'iNbQuestion' => NULL,  'sAction' => 'creer',));
            }

            // drop_admin_test
            if (0 === strpos($pathinfo, '/admin/drop/test') && preg_match('#^/admin/drop/test(?:/(?P<iId>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'drop_admin_test')), array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\TestController::dropTestAction',  'iId' => NULL,));
            }

            // list_admin
            if ($pathinfo === '/admin/list/admin') {
                return array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\AdminController::listAdminAction',  '_route' => 'list_admin',);
            }

            if (0 === strpos($pathinfo, '/admin/manage')) {
                // change_visibility_admin
                if (0 === strpos($pathinfo, '/admin/manage/visibility') && preg_match('#^/admin/manage/visibility/(?P<iId>[^/]++)/(?P<sAction>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'change_visibility_admin')), array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\AdminController::changeAdminVisiblityAction',));
                }

                // drop_admin
                if (0 === strpos($pathinfo, '/admin/manage/drop') && preg_match('#^/admin/manage/drop(?:/(?P<iId>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'drop_admin')), array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\AdminController::dropAdminAction',  'iId' => NULL,));
                }

                // manage_admin
                if (preg_match('#^/admin/manage(?:/(?P<iId>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'manage_admin')), array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\AdminController::manageAdminAction',  'iId' => NULL,));
                }

            }

            // list_candidat
            if ($pathinfo === '/admin/list/candidats') {
                return array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\AdminController::listCandidatsAction',  '_route' => 'list_candidat',);
            }

            // manage_candidat
            if ($pathinfo === '/admin/manage/candidat') {
                return array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\CandidatController::manageCandidatAction',  '_route' => 'manage_candidat',);
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            // candidat_accueil
            if (0 === strpos($pathinfo, '/candidat/accueil') && preg_match('#^/candidat/accueil/(?P<iIdCandidat>[^/]++)/(?P<iIdTest>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidat_accueil')), array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\CandidatController::AccueilAction',));
            }

            // connexion_form
            if ($pathinfo === '/connexion') {
                return array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\CandidatController::ConnexionAction',  '_route' => 'connexion_form',);
            }

        }

        // connexion_admin
        if ($pathinfo === '/admin/connexion') {
            return array (  '_controller' => 'RecrutementTest\\RecrutementTestBundle\\Controller\\AdminController::ConnexionAction',  '_route' => 'connexion_admin',);
        }

        if (0 === strpos($pathinfo, '/css/bb5a6d2')) {
            // _assetic_bb5a6d2
            if ($pathinfo === '/css/bb5a6d2.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bb5a6d2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bb5a6d2',);
            }

            if (0 === strpos($pathinfo, '/css/bb5a6d2_part_1_')) {
                // _assetic_bb5a6d2_0
                if ($pathinfo === '/css/bb5a6d2_part_1_design_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bb5a6d2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bb5a6d2_0',);
                }

                if (0 === strpos($pathinfo, '/css/bb5a6d2_part_1_fancybox_')) {
                    // _assetic_bb5a6d2_1
                    if ($pathinfo === '/css/bb5a6d2_part_1_fancybox_loading_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bb5a6d2',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bb5a6d2_1',);
                    }

                    // _assetic_bb5a6d2_2
                    if ($pathinfo === '/css/bb5a6d2_part_1_fancybox_overlay_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bb5a6d2',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_bb5a6d2_2',);
                    }

                    // _assetic_bb5a6d2_3
                    if ($pathinfo === '/css/bb5a6d2_part_1_fancybox_sprite_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bb5a6d2',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_bb5a6d2_3',);
                    }

                }

                // _assetic_bb5a6d2_4
                if ($pathinfo === '/css/bb5a6d2_part_1_jquery.fancybox_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bb5a6d2',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_bb5a6d2_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/f8a6efd')) {
            // _assetic_f8a6efd
            if ($pathinfo === '/js/f8a6efd.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f8a6efd',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f8a6efd',);
            }

            if (0 === strpos($pathinfo, '/js/f8a6efd_part_1_')) {
                // _assetic_f8a6efd_0
                if ($pathinfo === '/js/f8a6efd_part_1_1jquery20_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f8a6efd',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f8a6efd_0',);
                }

                // _assetic_f8a6efd_1
                if ($pathinfo === '/js/f8a6efd_part_1_functions_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f8a6efd',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_f8a6efd_1',);
                }

                // _assetic_f8a6efd_2
                if ($pathinfo === '/js/f8a6efd_part_1_jquery.fancybox.pack_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f8a6efd',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_f8a6efd_2',);
                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
