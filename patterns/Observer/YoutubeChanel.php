<?php

namespace DesignPatterns\Observer;

class YoutubeChanel extends AbstractEvent
{
    private int $videCount = 0;

    /**
     * This is a completely a demo method so that in real solution after
     * uploading the video, the video count of chanel should be increased 
     * and that can be a good place to raise an event for subscribers to find out
     * the new video has been uploaded in the chanel.
     */
    function uploadVideo()
    {
        /** uploading staff here. */

        /** Increase the number of videos in the chanel */
        $this->videCount++;
        /** Raise the event */
        $this->notifySubscribers();
    }
}
