<?php

namespace App\Controller;

use App\Entity\SensorDetail;
use App\Form\SensorDetailType;
use App\Repository\SensorDetailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SensorDetailController extends AbstractController
{
    /**
     * @Route("/admin/sensors", name="sensor_detail_index", methods={"GET"})
     */
    public function index(SensorDetailRepository $sensorDetailRepository): Response
    {
        return $this->render('sensor_detail/index.html.twig', [
            'sensor_details' => $sensorDetailRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/sensor/new", name="sensor_detail_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $sensorDetail = new SensorDetail();
        $form = $this->createForm(SensorDetailType::class, $sensorDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($sensorDetail);
            $entityManager->flush();

            return $this->redirectToRoute('sensor_detail_index');
        }

        return $this->render('sensor_detail/new.html.twig', [
            'sensor_detail' => $sensorDetail,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/sensor/{id}", name="sensor_detail_show", methods={"GET"})
     */
    public function show(SensorDetail $sensorDetail): Response
    {
        return $this->render('sensor_detail/show.html.twig', [
            'sensor_detail' => $sensorDetail,
        ]);
    }

    /**
     * @Route("/admin/sensor/{id}/edit", name="sensor_detail_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SensorDetail $sensorDetail): Response
    {
        $form = $this->createForm(SensorDetailType::class, $sensorDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sensor_detail_index');
        }

        return $this->render('sensor_detail/edit.html.twig', [
            'sensor_detail' => $sensorDetail,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/sensor/{id}", name="sensor_detail_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SensorDetail $sensorDetail): Response
    {
        if ($this->isCsrfTokenValid('delete'.$sensorDetail->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($sensorDetail);
            $entityManager->flush();
        }

        return $this->redirectToRoute('sensor_detail_index');
    }
}
