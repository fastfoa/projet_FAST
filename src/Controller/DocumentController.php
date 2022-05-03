<?php

namespace App\Controller;

use App\Entity\Document;
use App\Entity\RecipientDocument;
use App\Form\DocumentType;
use App\Form\DocumentExtType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\HeaderUtils;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use PDO;
use App\Entity\Session;

class DocumentController extends AbstractController
{
    /**
     * @Route("/document", name="document")
     */
    public function index(): Response
    {
        return $this->render('document/index.html.twig', [
            'controller_name' => 'DocumentController',
        ]);
    }

    function checkRGPD()
    {
        $user = $this->getUser();
        if ($user == null)
            return $this->redirectToRoute("login");
        if (!$user->getRGPDOK())
            return $this->redirectToRoute("rgpdForm");
        return null;
    }

   

    public function downloadlist(): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $doctrine = $this->getDoctrine();
        //$patro = $doctrine->getRepository(Patronyme::class)->find($id);

        $uploads = $doctrine->getRepository(Document::class)->findAll();

        return $this->render(
            'document/downloadlist.html.twig',
            [
                'listUp' => $uploads,
                'menu' => getMenuFromRole($this->getUser()->getRoleString()),

            ]
        );
    }

    public function download(Document $id): Response
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $file = $this->getParameter('path_upload') . "/" . $id->getFileName();
// dd($file);
        $r = new BinaryFileResponse($file);

        $str =  $id->getFileNameOriginal();

        $d = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,$str
        );
// dd($d);
        $r->headers->set('Content-Disposition', $d);
        return $r;
    }

    public function deletedocument( Document $id, User $user)
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;
//   dd($id);
            $login = $this->getParameter('loginDB');
            $pw = $this->getParameter('PasswordDB');
      $idd = $user->getid();
        // 
       $idapp = getSQLArrayAssoc($login , $pw,
        "SELECT id_owner FROM document where id = $idd "); 
        $idapp = $idapp[0]['id_owner'];

        $doctrine = $this->getDoctrine();
        $om = $doctrine->getManager();
        $om->remove($id);
        $om->flush();

        // // $this->addFlash('message', "Document supprimé");
        return $this->redirectToRoute('profilOF_APP',  ['user' => $idapp]) ;
    }

    public function getInfoDoc(User $user)
    {
        $ret = $this->checkRGPD();
        if ($ret)
            return $ret;

        $a = getSQLArrayAssoc(
            $this->getParameter('loginDB'),
            $this->getParameter('PasswordDB'),
            "SELECT u.nom, u.prenom, u.raison_social, u.role_string, d.titre, r.id_document, r.date_read FROM document AS d, recipient_document AS r, user AS u
        WHERE r.id_document=d.id AND u.id=r.id_recipient AND d.id_owner=" . $user->getId()
        );

        return new JsonResponse(["a" => $a]);
    }
}
