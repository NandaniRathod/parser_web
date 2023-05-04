<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\Resume;
use Illuminate\Http\Request;
// use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
// use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Sight;
use Orchid\Support\Facades\Alert;
class ResumeListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'resume';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        
        return [
            TD::make('name', 'First Name')
                ->render(function (Resume $resume) {
                    return Link::make($resume->name);
                    // ->route('platform.contact.edit', $contact->id);
                }),
                

            //  TD::make('demo', 'Last Name'),
            TD::make('email', 'Email'),
            TD::make('phone', 'Phone'),
            TD::make('skills', 'skills'),
            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),

            TD::make(__('Actions'))
            ->align(TD::ALIGN_CENTER)
            ->width('100px')
            ->render(function (Resume $resume) {
                return DropDown::make()
                    ->icon('options-vertical')
                    ->list([

                        Link::make(__('View'))
                            // ->route('platform.contact.edit', $contact->id)
                            ->icon('eye'),

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Once the Resumes is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $resume->id,
                            ]),
                    ]);
            }),
        ];
    }
}
