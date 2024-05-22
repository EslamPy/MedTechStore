<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $client = new Client();
        $page = $request->query('page', 1); // Get the current page or default to 1

        $response = $client->get('https://newsapi.org/v2/top-headlines', [
            'query' => [
                'category' => 'technology',
                'apiKey' => '61d174638bd0415bbba1141690105296', // Hardcoded for testing
                'country' => 'us',
                'page' => $page,
                'pageSize' => 10 // Number of articles per page
            ]
        ]);

        $newsData = json_decode($response->getBody()->getContents(), true);
        $totalResults = $newsData['totalResults'];
        $totalPages = ceil($totalResults / 10); // Assuming 10 articles per page

        return view('news', [
            'articles' => $newsData['articles'],
            'currentPage' => $page,
            'totalPages' => $totalPages
        ]);
    }
}
