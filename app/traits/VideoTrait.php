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

        return $video;
    }

    public function returnFullVideo(Video $video)
    {
        $url = $video->ruta;
        $video->url = url(Storage::url($url));
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