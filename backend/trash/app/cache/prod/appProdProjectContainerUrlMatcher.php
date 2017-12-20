<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
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

        // command_default_index
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'command_default_index');
            }

            return array (  '_controller' => 'CommandBundle\\Controller\\DefaultController::indexAction',  '_route' => 'command_default_index',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/notes')) {
                // api_get_note
                if (preg_match('#^/api/notes/(?P<fincaId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_note;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_note')), array (  '_controller' => 'ApiBundle\\Controller\\NoteController::getAction',  '_format' => 'json',));
                }
                not_api_get_note:

                // api_post_note
                if ('/api/notes' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_post_note;
                    }

                    return array (  '_controller' => 'ApiBundle\\Controller\\NoteController::postAction',  '_format' => 'json',  '_route' => 'api_post_note',);
                }
                not_api_post_note:

                // api_delete_note
                if (preg_match('#^/api/notes/(?P<note>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_api_delete_note;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_delete_note')), array (  '_controller' => 'ApiBundle\\Controller\\NoteController::deleteAction',  '_format' => 'json',));
                }
                not_api_delete_note:

                // api_patch_note
                if (preg_match('#^/api/notes/(?P<note>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_note;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_note')), array (  '_controller' => 'ApiBundle\\Controller\\NoteController::patchAction',  '_format' => 'json',));
                }
                not_api_patch_note:

            }

            if (0 === strpos($pathinfo, '/api/fincas')) {
                // api_get_finca
                if (preg_match('#^/api/fincas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_finca;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_finca')), array (  '_controller' => 'ApiBundle\\Controller\\FincaController::getAction',  '_format' => 'json',));
                }
                not_api_get_finca:

                // api_post_finca
                if ('/api/fincas' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_post_finca;
                    }

                    return array (  '_controller' => 'ApiBundle\\Controller\\FincaController::postAction',  '_format' => 'json',  '_route' => 'api_post_finca',);
                }
                not_api_post_finca:

                // api_patch_finca_estatetype
                if (preg_match('#^/api/fincas/(?P<finca>[^/]++)/estatetypes/(?P<state>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_finca_estatetype;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_finca_estatetype')), array (  '_controller' => 'ApiBundle\\Controller\\FincaController::patchEstatetypeAction',  '_format' => 'json',));
                }
                not_api_patch_finca_estatetype:

                // api_patch_finca_irrigationtype
                if (preg_match('#^/api/fincas/(?P<finca>[^/]++)/irrigationtypes/(?P<irrigationtype>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_finca_irrigationtype;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_finca_irrigationtype')), array (  '_controller' => 'ApiBundle\\Controller\\FincaController::patchIrrigationtypeAction',  '_format' => 'json',));
                }
                not_api_patch_finca_irrigationtype:

                // api_patch_finca_plantvariety
                if (preg_match('#^/api/fincas/(?P<finca>[^/]++)/plantvarieties/(?P<plantvariety>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_finca_plantvariety;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_finca_plantvariety')), array (  '_controller' => 'ApiBundle\\Controller\\FincaController::patchPlantvarietyAction',  '_format' => 'json',));
                }
                not_api_patch_finca_plantvariety:

                // api_patch_finca_totalbananatree
                if (preg_match('#^/api/fincas/(?P<finca>[^/]++)/totalbananatrees/(?P<bananaTree>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_finca_totalbananatree;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_finca_totalbananatree')), array (  '_controller' => 'ApiBundle\\Controller\\FincaController::patchTotalbananatreeAction',  '_format' => 'json',));
                }
                not_api_patch_finca_totalbananatree:

            }

            if (0 === strpos($pathinfo, '/api/activit')) {
                // api_get_activity
                if (0 === strpos($pathinfo, '/api/activities') && preg_match('#^/api/activities/(?P<finca>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_activity;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_activity')), array (  '_controller' => 'ApiBundle\\Controller\\ActivityController::getAction',  '_format' => 'json',));
                }
                not_api_get_activity:

                // api_get_activity_finished
                if ('/api/activity/finished' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_activity_finished;
                    }

                    return array (  '_controller' => 'ApiBundle\\Controller\\ActivityController::getFinishedAction',  '_format' => 'json',  '_route' => 'api_get_activity_finished',);
                }
                not_api_get_activity_finished:

                if (0 === strpos($pathinfo, '/api/activities')) {
                    // api_post_activity
                    if ('/api/activities' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_api_post_activity;
                        }

                        return array (  '_controller' => 'ApiBundle\\Controller\\ActivityController::postAction',  '_format' => 'json',  '_route' => 'api_post_activity',);
                    }
                    not_api_post_activity:

                    // api_patch_activity_state
                    if (preg_match('#^/api/activities/(?P<activity>[^/]++)/states/(?P<state>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_api_patch_activity_state;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_activity_state')), array (  '_controller' => 'ApiBundle\\Controller\\ActivityController::patchStateAction',  '_format' => 'json',));
                    }
                    not_api_patch_activity_state:

                    // api_delete_activity
                    if (preg_match('#^/api/activities/(?P<activity>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_api_delete_activity;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_delete_activity')), array (  '_controller' => 'ApiBundle\\Controller\\ActivityController::deleteAction',  '_format' => 'json',));
                    }
                    not_api_delete_activity:

                }

            }

            if (0 === strpos($pathinfo, '/api/historic')) {
                // api_get_historic
                if ('/api/historic' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_historic;
                    }

                    return array (  '_controller' => 'ApiBundle\\Controller\\HistoricController::getAction',  '_format' => 'json',  '_route' => 'api_get_historic',);
                }
                not_api_get_historic:

                // api_post_historic
                if ('/api/historics' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_post_historic;
                    }

                    return array (  '_controller' => 'ApiBundle\\Controller\\HistoricController::postAction',  '_format' => 'json',  '_route' => 'api_post_historic',);
                }
                not_api_post_historic:

            }

            if (0 === strpos($pathinfo, '/api/orders')) {
                // api_get_orders
                if (preg_match('#^/api/orders/(?P<fincaId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_orders;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_orders')), array (  '_controller' => 'ApiBundle\\Controller\\OrdersController::getAction',  '_format' => 'json',));
                }
                not_api_get_orders:

                // api_post_orders
                if ('/api/orders' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_post_orders;
                    }

                    return array (  '_controller' => 'ApiBundle\\Controller\\OrdersController::postAction',  '_format' => 'json',  '_route' => 'api_post_orders',);
                }
                not_api_post_orders:

                // api_delete_orders
                if (preg_match('#^/api/orders/(?P<orders>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_api_delete_orders;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_delete_orders')), array (  '_controller' => 'ApiBundle\\Controller\\OrdersController::deleteAction',  '_format' => 'json',));
                }
                not_api_delete_orders:

                // api_patch_orders_state
                if (preg_match('#^/api/orders/(?P<orders>[^/]++)/state$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_orders_state;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_orders_state')), array (  '_controller' => 'ApiBundle\\Controller\\OrdersController::patchStateAction',  '_format' => 'json',));
                }
                not_api_patch_orders_state:

            }

            if (0 === strpos($pathinfo, '/api/parcels')) {
                // api_get_parcel
                if (preg_match('#^/api/parcels/(?P<fincaId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_parcel;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_parcel')), array (  '_controller' => 'ApiBundle\\Controller\\ParcelController::getAction',  '_format' => 'json',));
                }
                not_api_get_parcel:

                // api_post_parcel
                if ('/api/parcels' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_post_parcel;
                    }

                    return array (  '_controller' => 'ApiBundle\\Controller\\ParcelController::postAction',  '_format' => 'json',  '_route' => 'api_post_parcel',);
                }
                not_api_post_parcel:

                // api_delete_parcel
                if (preg_match('#^/api/parcels/(?P<parcel>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_api_delete_parcel;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_delete_parcel')), array (  '_controller' => 'ApiBundle\\Controller\\ParcelController::deleteAction',  '_format' => 'json',));
                }
                not_api_delete_parcel:

                // api_patch_parcel
                if (preg_match('#^/api/parcels/(?P<parcel>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_parcel;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_parcel')), array (  '_controller' => 'ApiBundle\\Controller\\ParcelController::patchAction',  '_format' => 'json',));
                }
                not_api_patch_parcel:

            }

            if (0 === strpos($pathinfo, '/api/users')) {
                // api_post_users_register
                if ('/api/users/registers' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_post_users_register;
                    }

                    return array (  '_controller' => 'ApiBundle\\Controller\\UsersController::postRegisterAction',  '_format' => 'json',  '_route' => 'api_post_users_register',);
                }
                not_api_post_users_register:

                // api_get_users
                if ('/api/users' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_users;
                    }

                    return array (  '_controller' => 'ApiBundle\\Controller\\UsersController::getAction',  '_format' => 'json',  '_route' => 'api_get_users',);
                }
                not_api_get_users:

                // api_patch_users
                if ('/api/users' === $pathinfo) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_users;
                    }

                    return array (  '_controller' => 'ApiBundle\\Controller\\UsersController::patchAction',  '_format' => 'json',  '_route' => 'api_patch_users',);
                }
                not_api_patch_users:

                // api_patch_users_finca
                if (preg_match('#^/api/users/(?P<finca>[^/]++)/finca$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_users_finca;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_users_finca')), array (  '_controller' => 'ApiBundle\\Controller\\UsersController::patchFincaAction',  '_format' => 'json',));
                }
                not_api_patch_users_finca:

                // api_patch_users_logout
                if ('/api/users/logout' === $pathinfo) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_users_logout;
                    }

                    return array (  '_controller' => 'ApiBundle\\Controller\\UsersController::patchLogoutAction',  '_format' => 'json',  '_route' => 'api_patch_users_logout',);
                }
                not_api_patch_users_logout:

            }

            if (0 === strpos($pathinfo, '/api/fincaregisters')) {
                // api_get_fincaregister
                if (preg_match('#^/api/fincaregisters/(?P<idFinca>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_fincaregister;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_fincaregister')), array (  '_controller' => 'ApiBundle\\Controller\\FincaRegisterController::getAction',  '_format' => 'json',));
                }
                not_api_get_fincaregister:

                // api_post_fincaregister
                if ('/api/fincaregisters' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_post_fincaregister;
                    }

                    return array (  '_controller' => 'ApiBundle\\Controller\\FincaRegisterController::postAction',  '_format' => 'json',  '_route' => 'api_post_fincaregister',);
                }
                not_api_post_fincaregister:

                // api_patch_fincaregister_benefits
                if (preg_match('#^/api/fincaregisters/(?P<fincaRegister>[^/]++)/benefits/(?P<benefits>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_fincaregister_benefits;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_fincaregister_benefits')), array (  '_controller' => 'ApiBundle\\Controller\\FincaRegisterController::patchBenefitsAction',  '_format' => 'json',));
                }
                not_api_patch_fincaregister_benefits:

                // api_patch_fincaregister_sownparcel
                if (preg_match('#^/api/fincaregisters/(?P<fincaRegister>[^/]++)/sownparcels/(?P<sownParcel>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_fincaregister_sownparcel;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_fincaregister_sownparcel')), array (  '_controller' => 'ApiBundle\\Controller\\FincaRegisterController::patchSownparcelAction',  '_format' => 'json',));
                }
                not_api_patch_fincaregister_sownparcel:

                // api_patch_fincaregister_collectparcel
                if (preg_match('#^/api/fincaregisters/(?P<fincaRegister>[^/]++)/collectparcels/(?P<collectParcel>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_fincaregister_collectparcel;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_fincaregister_collectparcel')), array (  '_controller' => 'ApiBundle\\Controller\\FincaRegisterController::patchCollectparcelAction',  '_format' => 'json',));
                }
                not_api_patch_fincaregister_collectparcel:

                // api_patch_fincaregister_collectweight
                if (preg_match('#^/api/fincaregisters/(?P<fincaRegister>[^/]++)/collectweights/(?P<weight>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_fincaregister_collectweight;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_fincaregister_collectweight')), array (  '_controller' => 'ApiBundle\\Controller\\FincaRegisterController::patchCollectweightAction',  '_format' => 'json',));
                }
                not_api_patch_fincaregister_collectweight:

                // api_patch_fincaregister_registerdate
                if (preg_match('#^/api/fincaregisters/(?P<fincaRegister>[^/]++)/registerdates/(?P<registerDate>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_fincaregister_registerdate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_fincaregister_registerdate')), array (  '_controller' => 'ApiBundle\\Controller\\FincaRegisterController::patchRegisterdateAction',  '_format' => 'json',));
                }
                not_api_patch_fincaregister_registerdate:

                // api_patch_fincaregister_handsnumber
                if (preg_match('#^/api/fincaregisters/(?P<fincaRegister>[^/]++)/handsnumbers/(?P<handsNumber>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_fincaregister_handsnumber;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_fincaregister_handsnumber')), array (  '_controller' => 'ApiBundle\\Controller\\FincaRegisterController::patchHandsnumberAction',  '_format' => 'json',));
                }
                not_api_patch_fincaregister_handsnumber:

                // api_patch_fincaregister_salablepercent
                if (preg_match('#^/api/fincaregisters/(?P<fincaRegister>[^/]++)/salablepercents/(?P<salablePercent>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_fincaregister_salablepercent;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_fincaregister_salablepercent')), array (  '_controller' => 'ApiBundle\\Controller\\FincaRegisterController::patchSalablepercentAction',  '_format' => 'json',));
                }
                not_api_patch_fincaregister_salablepercent:

                // api_delete_fincaregister
                if (preg_match('#^/api/fincaregisters/(?P<fincaRegister>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_api_delete_fincaregister;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_delete_fincaregister')), array (  '_controller' => 'ApiBundle\\Controller\\FincaRegisterController::deleteAction',  '_format' => 'json',));
                }
                not_api_delete_fincaregister:

            }

            if (0 === strpos($pathinfo, '/api/parcelregisters')) {
                // api_get_parcelregister
                if (preg_match('#^/api/parcelregisters/(?P<idParcel>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_parcelregister;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_parcelregister')), array (  '_controller' => 'ApiBundle\\Controller\\ParcelRegisterController::getAction',  '_format' => 'json',));
                }
                not_api_get_parcelregister:

                // api_post_parcelregister
                if ('/api/parcelregisters' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_post_parcelregister;
                    }

                    return array (  '_controller' => 'ApiBundle\\Controller\\ParcelRegisterController::postAction',  '_format' => 'json',  '_route' => 'api_post_parcelregister',);
                }
                not_api_post_parcelregister:

                // api_delete_parcelregister
                if (preg_match('#^/api/parcelregisters/(?P<parcelRegister>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_api_delete_parcelregister;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_delete_parcelregister')), array (  '_controller' => 'ApiBundle\\Controller\\ParcelRegisterController::deleteAction',  '_format' => 'json',));
                }
                not_api_delete_parcelregister:

                // api_patch_parcelregister_data
                if (preg_match('#^/api/parcelregisters/(?P<parcelRegister>[^/]++)/data$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_api_patch_parcelregister_data;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_patch_parcelregister_data')), array (  '_controller' => 'ApiBundle\\Controller\\ParcelRegisterController::patchDataAction',  '_format' => 'json',));
                }
                not_api_patch_parcelregister_data:

            }

        }

        // entity_default_index
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'entity_default_index');
            }

            return array (  '_controller' => 'EntityBundle\\Controller\\DefaultController::indexAction',  '_route' => 'entity_default_index',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === rtrim($pathinfo, '/')) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ('/register/check-email' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ('/register/confirmed' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/reset')) {
                // fos_user_resetting_request
                if ('/reset/request' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ('/reset/send-email' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/reset/check-email' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/reset/reset') && preg_match('#^/reset/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ('/change-password' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/oauth/v2')) {
            // fos_oauth_server_authorize
            if ('/oauth/v2/auth' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_oauth_server_authorize;
                }

                return array (  '_controller' => 'FOS\\OAuthServerBundle\\Controller\\AuthorizeController::authorizeAction',  '_route' => 'fos_oauth_server_authorize',);
            }
            not_fos_oauth_server_authorize:

            // fos_oauth_server_token
            if ('/oauth/v2/token' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_oauth_server_token;
                }

                return array (  '_controller' => 'fos_oauth_server.controller.token:tokenAction',  '_route' => 'fos_oauth_server_token',);
            }
            not_fos_oauth_server_token:

        }

        // fos_user_profile_show
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
            }

            return array('_route' => 'fos_user_profile_show');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
