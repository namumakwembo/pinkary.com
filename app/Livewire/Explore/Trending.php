<?php

declare(strict_types=1);

namespace App\Livewire\Explore;

use App\Services\QuestionFeedStrategies\TrendingFeedStrategy;
use App\Services\QuestionFeedStrategyContext;
use Illuminate\View\View;
use Livewire\Component;

final class Trending extends Component
{
    /**
     * Renders the component.
     */
    public function render(): View
    {
        $questionFeed = new QuestionFeedStrategyContext(new TrendingFeedStrategy());

        return view('livewire.explore.trending', [
            'trendingQuestions' => $questionFeed->getBuilder()->get(),
        ]);
    }
}