<?php
/*
**************************************************
No More Using this controller (so ignore it)
**************************************************
*/
namespace App\Controller;

use App\Entity\SensorAlerts;
use App\Form\SensorAlertsType;
use App\Repository\SensorAlertsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/*
**************************************************
No More Using this controller (so ignore it)
**************************************************
*/

/**
 * @Route("/sensor/alerts")
 */
class SensorAlertsController extends AbstractController
{
    /**
     * @Route("/", name="sensor_alerts_index", methods={"GET"})
     */
    public function index(SensorAlertsRepository $sensorAlertsRepository): Response
    {
        return $this->render('sensor_alerts/index.html.twig', [
            'sensor_alerts' => $sensorAlertsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="sensor_alerts_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $sensorAlert = new SensorAlerts();
        $form = $this->createForm(SensorAlertsType::class, $sensorAlert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($sensorAlert);
            $entityManager->flush();

            return $this->redirectToRoute('sensor_alerts_index');
        }

        return $this->render('sensor_alerts/new.html.twig', [
            'sensor_alert' => $sensorAlert,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sensor_alerts_show", methods={"GET"})
     */
    public function show(SensorAlerts $sensorAlert): Response
    {
        return $this->render('sensor_alerts/show.html.twig', [
            'sensor_alert' => $sensorAlert,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="sensor_alerts_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SensorAlerts $sensorAlert): Response
    {
        $form = $this->createForm(SensorAlertsType::class, $sensorAlert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sensor_alerts_index');
        }

        return $this->render('sensor_alerts/edit.html.twig', [
            'sensor_alert' => $sensorAlert,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="sensor_alerts_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SensorAlerts $sensorAlert): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sensorAlert->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($sensorAlert);
            $entityManager->flush();
        }

        return $this->redirectToRoute('sensor_alerts_index');
    }
}
