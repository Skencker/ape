<?php

namespace App\Controller\Admin;

use App\Entity\Actualites;
use App\Entity\Classes;
use App\Entity\ConseilsEcole;
use App\Entity\ImagesDiapo;
use App\Entity\Organigramme;
use App\Entity\Documents;
use App\Entity\FonctionsParents;
use App\Entity\Parentsdelegues;
use App\Entity\TrombiEcoleAlae;
use App\Entity\Users;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator ;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

use Twig\Extra\Intl\IntlExtension;



class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/superadmin", name="super_admin")
     * @IsGranted("ROLE_SUPERADMIN")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(ImagesDiapoCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Ape -Super-Admin-');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Utilisateur - Admin -', 'fas fa-user', Users::class);
        yield MenuItem::linkToUrl('Site', 'far fa-window-maximize', '/');
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Image diapo', 'fas fa-image', ImagesDiapo::class);
        yield MenuItem::linkToCrud('Organigramme', 'fas fa-sitemap', Organigramme::class);
        yield MenuItem::linkToCrud('Actualites', 'fas fa-newspaper', Actualites::class);
        yield MenuItem::linkToCrud('Ecole-alae', 'fas fa-school', Actualites::class);
        yield MenuItem::linkToCrud('Documents', 'fas fa-file-alt', Documents::class);
        yield MenuItem::linkToCrud('Classes', 'fas fa-chalkboard-teacher', Classes::class);
        yield MenuItem::linkToCrud('Fonctions Parents Délégués', 'fas fa-users-cog', FonctionsParents::class);
        yield MenuItem::linkToCrud('Parents Délégués', 'fas fa-user-plus', ParentsDelegues::class);
        yield MenuItem::linkToCrud('Conseils Ecole', 'fas fa-file-alt', ConseilsEcole::class);
        yield MenuItem::linkToCrud('Trombinoscope Ecole/Alae', 'fas fa-file-alt', TrombiEcoleAlae::class);
        yield MenuItem::linkToLogout('Deconnexion', 'fas fa-sign-out-alt', 'app_logout');
    }
}
