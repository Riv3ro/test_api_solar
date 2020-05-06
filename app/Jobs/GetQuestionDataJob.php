<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Services\ParserService;

class GetQuestionDataJob implements ShouldQueue
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
    private $link;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($link)
    {
        $this->link = $link;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(ParserService $parserService)
    {
        // log link
        // info($this->link);

        // prepare question data
        $data = $parserService->getContent($this->link);
        $category = $parserService->getCategoryFromPage($data);
        $question = $parserService->getQuestionFromPage($data);
        $answers = $parserService->getAnswerFromPage($data);

        // save question data
        if($question){
            $category = $parserService->saveCategory($category);
            $question = $parserService->saveQuestion($question, $category->id);
            $answers = $parserService->saveAnswer($answers, $question->id);

        }


    }
}
