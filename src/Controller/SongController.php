<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\TrackRepository;
use App\Formatter\SearchResponseFormatter;

/**
 * Class SongController
 * @package App\Controller
 */
class SongController extends AbstractController
{
    /**
     * [Route('/song', name: 'song_list')]
     */
    public function list(TrackRepository $trackRepository): JsonResponse
    {
        $data = $trackRepository->getAllTracksWithArtists();
        $formattedResponse = SearchResponseFormatter::formatResponseData($data);

        return $this->json($formattedResponse);
    }
}