<?php
/**
 * Created by PhpStorm.
 * User: rk521
 * Date: 4/10/17
 * Time: 05:27 PM
 */

namespace App\traits;


use App\Video;
use Illuminate\Support\Facades\Storage;

trait VideoTrait {
    public function returnVideo(Video $video)
    {
        $url = $video->ruta;
        $video->url = url(Storage::url($url));

        $url_thumbnail = $video->thumbnail;
        if ($url_thumbnail != null) {
            $video->url_thumbnail = url(Storage::url($url_thumbnail));
        } else {
            $video->url_thumbnail = "";
        }

        return $video;
    }

    public function returnFullVideo(Video $video)
    {
        $url = $video->ruta;
        $video->url = url(Storage::url($url));

        $url_thumbnail = $video->thumbnail;
        if ($url_thumbnail != null) {
            $video->url_thumbnail = url(Storage::url($url_thumbnail));
        } else {
            $video->url_thumbnail = "";
        }

        $users = [];
        $usersBlacklist = [];

        foreach ($video->videosCercanos as $videoCercano) {
            $videoCercano = $this->returnVideo($videoCercano);
            if (!in_array($videoCercano->usuario->id, $usersBlacklist)) {
                if (count($users) < 3) {
                    array_push($usersBlacklist, $videoCercano->usuario->id);
                    array_push($users, $videoCercano->usuario);
                }
            }
        }

        $video->users = $users;
        return $video;
    }
}