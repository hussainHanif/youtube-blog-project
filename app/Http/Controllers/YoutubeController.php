<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function appendYoutubeOptions(Request $request)
    {
        $request->validate([
            'url' => 'required',
        ]);
        try {
            $data = [
                'thumbnail' => 'https://i.ytimg.com/vi/dQw4w9WgXcQ/maxresdefault.jpg',
                'title' => 'Example Video Title',
                'data' => [
                    [
                        'download_link' => 'https://example.com/video.mp4',
                        'quality' => '1080p',
                        'size' => '10 MB',
                        'audio' => true,
                        'type' => 'mp4'
                    ],
                    [
                        'download_link' => 'https://example.com/video.mp4',
                        'quality' => '720p',
                        'size' => '8 MB',
                        'audio' => true,
                        'type' => 'mp4'
                    ],
                    [
                        'download_link' => 'https://example.com/video.mp4',
                        'quality' => '360p',
                        'size' => '6 MB',
                        'audio' => false,
                        'type' => 'mp4'
                    ],
                    [
                        'download_link' => 'https://example.com/video.mp4',
                        'quality' => '144p',
                        'size' => '4 MB',
                        'audio' => false,
                        'type' => 'mp3'
                    ],
                ],
            ];

            return response()->json($data);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
