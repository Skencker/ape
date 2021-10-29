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
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator ;

use Twig\Extra\Intl\IntlExtension;



class AdminDashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(ImagesDiapoCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Ape -Admin-');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToUrl('Site', 'far fa-window-maximize', '/');
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Image diapo', 'fas fa-image', ImagesDiapo::class);
        yield MenuItem::linkToCrud('Organigramme', 'fas fa-sitemap', Organigramme::class);
        yield MenuItem::linkToCrud('Actualites', 'fas fa-newspaper', Actualites::class);
        yield MenuItem::linkToCrud('Documents', 'fas fa-file-alt', Documents::class);
        yield MenuItem::linkToCrud('Parents Délégués', 'fas fa-user-plus', ParentsDelegues::class);
        yield MenuItem::linkToCrud('Conseils Ecole', 'fas fa-file-alt', ConseilsEcole::class);
        yield MenuItem::linkToLogout('Deconnexion', 'fas fa-sign-out-alt', 'app_logout');
        yield MenuItem::linkToUrl('Super Admin', 'far fa-window-maximize', '/superadmin');
    }
}
