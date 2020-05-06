<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Services\ParserService;
use App\Jobs\GetQuestionDataJob;

class GetQuestionURLJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Количество раз, которое можно попробовать выполнить задачу.
     *
     * @var int
     */
    public $tries = 5;

    /**
     * Количество секунд, во время которых может выполняться задача до таймаута.
     *
     * @var int
     */
    public $timeout = 120;

    /**
     * @var array
     */
    private $page;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($page)
    {
        $this->page = $page;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(ParserService $parserService)
    {

        // get question block from page (question and link)
        $content = $parserService->getContent($this->page);
        $content = $content->find('div.short > a.short-desc');

        // get question links from page
        $links = $parserService->getQuestionLinksFromPage($content);

        // get job for links
        foreach($links as $link){

            // log
            // info($link);

            // creeate link job
            $linkJob = GetQuestionDataJob::dispatch($link)->onQueue('GetQuestionData');

        }
    }
}
