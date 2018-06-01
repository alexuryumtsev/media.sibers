<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/albums')) {
            // homepage
            if ('/albums' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::homepageAction',  '_route' => 'homepage',);
            }

            // CopPictures
            if (0 === strpos($pathinfo, '/albums/pictures') && preg_match('#^/albums/pictures/(?P<aid>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'CopPictures')), array (  '_controller' => 'AppBundle\\Controller\\GalleryController::picturesAction',));
            }

        }

        // CopAlbums
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_CopAlbums;
            } else {
                return $this->redirect($rawPathinfo.'/', 'CopAlbums');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\GalleryController::albumsAction',  '_route' => 'CopAlbums',);
        }
        not_CopAlbums:

        if (0 === strpos($pathinfo, '/user')) {
            // CopUsers
            if ('/users' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\GalleryController::usersAction',  '_route' => 'CopUsers',);
            }

            // CopUsersAlbums
            if ('/user-albums' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_CopUsersAlbums;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'CopUsersAlbums');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\GalleryController::usersAlbumsAction',  '_route' => 'CopUsersAlbums',);
            }
            not_CopUsersAlbums:

        }

        // CopPicturesUsers
        if (0 === strpos($pathinfo, '/albums/pictures-users') && preg_match('#^/albums/pictures\\-users/(?P<aid>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'CopPicturesUsers')), array (  '_controller' => 'AppBundle\\Controller\\GalleryController::picturesUsersAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
