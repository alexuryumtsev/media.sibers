<?php
/**
 * Created by PhpStorm.
 * User: stazher
 * Date: 16.05.18
 * Time: 15:14
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GalleryController extends Controller
{
    /**
     * @Route("albums/pictures/{aid}", name="CopPictures")
     */

    public function picturesAction($aid)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Cpg148Pictures')->findBy(array('aid' => $aid));
        $albums = $em->getRepository('AppBundle:Cpg148Albums')->findBy(array('aid' => $aid));
        return $this->render('gallery/pictures.html.twig', array(
            'posts' => $posts,
            'albums' => $albums,
        ));
    }

    /**
     * 
     * @Route("/", name="CopAlbums")
     *
     */

    public function albumsAction()
    {
	
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT u FROM AppBundle:Cpg148Pictures u JOIN AppBundle:Cpg148Albums p WHERE u.pid = p.thumb and p.category = 0 ORDER BY p.pos ASC');
        
        $posts = $query->getResult();
        $query = $em->createQuery('SELECT u.aid, u.title, u.category, u.albHits FROM AppBundle:Cpg148Albums u');
        $albums = $query->getResult();
//     var_dump($albums);die;
        return $this->render('gallery/albums.html.twig', array(
            'posts' => $posts,
            'albums'=>$albums,
        ));
    }

/**
     * 
     * @Route("/users", name="CopUsers")
     *
     */

    public function usersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:Cpg148Users')->findBy(array('userActive' => 'YES'));
//      var_dump($users);die;
        return $this->render('gallery/users.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * 
     * @Route("/user-albums/", name="CopUsersAlbums")
     *
     */

    public function usersAlbumsAction()
    {
        $em = $this->getDoctrine()->getManager();
	$query = $em->createQuery('SELECT p FROM AppBundle:Cpg148Pictures p JOIN AppBundle:Cpg148Albums a WHERE p.pid = a.thumb and a.category > 0 and p.ownerId = 1');
	$posts = $query->getResult();
	
        $query = $em->createQuery('SELECT u.aid, u.title, u.category, u.albHits FROM AppBundle:Cpg148Albums u');
        $albums = $query->getResult();

//        var_dump($posts);die;
     
        return $this->render('gallery/albums_users.html.twig', array(
            'posts'=>$posts,
            'albums'=>$albums,
            
        ));
    }


    /**
     * @Route("albums/pictures-users/{aid}", name="CopPicturesUsers")
     */

    public function picturesUsersAction($aid)
    {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('AppBundle:Cpg148Pictures')->findBy(array('aid' => $aid));
        $albums = $em->getRepository('AppBundle:Cpg148Albums')->findBy(array('aid' => $aid));
        return $this->render('gallery/pictures_users.html.twig', array(
            'posts' => $posts,
            'albums' => $albums,
        ));
    }

}