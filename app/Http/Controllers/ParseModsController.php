<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;


class ParseModsController extends Controller
{
    public function index()
    {

        $client = new Client();
        $url = 'https://www.nexusmods.com/skyrimspecialedition/';
        $crawler = $client->request('GET', $url);

        $data = [];

        $crawler->filter('#mod-list .mod-tile')->slice(0, 12)->each(function ($node) use (&$data) {
            $title = $node->filter('.tile-name')->text();
            $image = $node->filter('.fore')->attr('src');
            $category = $node->filter('.category')->text();
            $date = $node->filter('.date')->text();
            $author = $node->filter('.realauthor')->text();
            $desc = $node->filter('.desc')->text();
            $size = $node->filter('li.sizecount .flex-label')->text();
            $likes = $node->filter('li.endorsecount .flex-label')->text();
            $link = $node->filter('.tile-name a')->attr('href');

            $data[] = [
                'title' => $title,
                'image' => $image,
                'category' => $category,
                'date' => $date,
                'author' => $author,
                'desc' => $desc,
                'link' => $link,
                'size' => $size,
                'likes' => $likes,
            ];
        });
        return view('layouts.parse', ['data' => $data]);

    }

}
