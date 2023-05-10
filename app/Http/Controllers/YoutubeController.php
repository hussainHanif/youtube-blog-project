<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class YoutubeController extends Controller
{
    public function appendYoutubeOptions(Request $request)
    {
        // $request->validate([
        //     'url' => 'required',
        // ]);
        $validator = Validator::make($request->all(), [
            'url' => [
                'required',
                'url',
                function ($attribute, $value, $fail) {
                    $url_parts = parse_url($value);
                    parse_str($url_parts['query'] ?? '', $query);
                    if (
                        strpos($url_parts['host'], 'youtube.com') === false
                        && strpos($url_parts['host'], 'youtu.be') === false
                    ) {
                        $fail($attribute . ' must be a valid YouTube URL.');
                    }
                    if (!isset($query['v']) || empty($query['v'])) {
                        $fail($attribute . ' must contain a valid YouTube video ID.');
                    }
                },
            ],
        ]);

        if ($validator->fails()) {
            return ['data' => ['message' => 'Invalid Youtube URL'], 'success' => false];
        }
        try {
            $data = [
                'thumbnail' => 'https://i.ytimg.com/vi/dQw4w9WgXcQ/maxresdefault.jpg',
                'title' => 'This is tittle of the video',
                'duration' => '4:37',
                'data' => [
                    [
                        'download_link' => 'https://example.com/video.mp4',
                        'quality' => '1080p',
                        'size' => '10 MB',
                        'audio' => true,
                        'type' => 'mp4',
                    ],
                    [
                        'download_link' => 'https://example.com/video.mp4',
                        'quality' => '720p',
                        'size' => '8 MB',
                        'audio' => true,
                        'type' => 'mp4',
                    ],
                    [
                        'download_link' => 'https://example.com/video.mp4',
                        'quality' => '360p',
                        'size' => '6 MB',
                        'audio' => false,
                        'type' => 'mp4',
                    ],
                    [
                        'download_link' => 'https://example.com/video.mp4',
                        'quality' => '144p',
                        'size' => '4 MB',
                        'audio' => false,
                        'type' => 'mp3',
                    ]
                ], 'success' => true,
            ];

            return response()->json($data);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
