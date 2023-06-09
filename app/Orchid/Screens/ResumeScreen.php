<?php

namespace App\Orchid\Screens;
use App\Orchid\Layouts\ResumeListLayout;
use Orchid\Screen\Screen;
use App\Models\Resume;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;
class ResumeScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'resume' => Resume::paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'All Resumes';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            ResumeListLayout::class
         ];
    }
}
