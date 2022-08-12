<?php

namespace App\Observers;

use App\Models\News;

class NewsObserver
{
    /**
     * Handle the News "created" event.
     *
     * @param News $news
     * @return void
     */
    public function creating(News $news)
    {
        $news->created_by = auth()->id();

    }

    /**
     * Handle the News "updated" event.
     *
     * @param News $news
     * @return void
     */
    public function updating(News $news)
    {

        $news->updated_by = auth()->id();
    }

    /**
     * Handle the News "deleted" event.
     *
     * @param News $news
     * @return void
     */
    public function deleting(News $news)
    {

        $news->deleted_by = auth()->id();
    }

    /**
     * Handle the News "restored" event.
     *
     * @param News $news
     * @return void
     */
    public function restored(News $news)
    {
        //
    }

    /**
     * Handle the News "force deleted" event.
     *
     * @param News $news
     * @return void
     */
    public function forceDeleted(News $news)
    {
        //
    }
}
