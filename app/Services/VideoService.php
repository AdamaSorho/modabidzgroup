<?php

namespace App\Services;

use App\Models\Video;

class VideoService
{
    public function getVideosWithPaginator($number = 20)
    {
        return Video::latest()->paginate($number);
    }

    public function getVideo($id)
    {
        return Video::find($id);
    }

    public function storeVideo($data): void
    {
        if ($data["id"])
            $video = $this->getVideo($data["id"]);
        else
            $video = new Video();
        $video
            ->setTranslation("title", "fr", $data["title_fr"])
            ->setTranslation("title", "en", $data["title_en"]);
        $video->frame = $data["frame"];
        $video->video_category_id = $data["video_category_id"];

        $video->save();
    }
}
