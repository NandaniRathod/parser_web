<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\Resume;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Cropper;

use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class ResumeEditLayout extends Table
{
    /**
     * @var
     */
    public $resume;

    /**
     * Query data.
     *
     * @param Resume $resume
     *
     * @return array
     */
    public function query(Resume $resume): array
    {
        // $contact->load('attachment');
        
        return [
            'resume' => $resume
        ];
    }

    /**
     * The name is displayed on the user's screen and in the headers
     */
    public function name(): ?string
    {
        return $this->resume->exists ? 'View resume' : 'Creating a new resume';
    }

    /**
     * The description is displayed on the user's screen under the heading
     */
    public function description(): ?string
    {
        return "start Entering resume";
    }
    // public function permission(): ?iterable
    // {
    //     return [
    //         'platform.contact.edit',
            
    //     ];
    // }
    /**
     * Button commands.
     *
     * @return Link[]
     */
    public function commandBar(): array
    {
        return [
            Button::make('Update resume')
                ->icon('check')
                ->method('createOrUpdate')
                ->canSee(!$this->resume->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->resume->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->resume->exists),
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('resume.name')
                    ->title('Last Name')
                    ->type('text')
                    ->required()
                    ->placeholder('Enter First Name '),

                    // Input::make('resume.demo')
                    // ->title('Last Name')
                    // ->required()
                    // ->placeholder('Enter Last Name'),


                    Input::make('resume.phone')
                    ->title('Phone')
                    ->type('number')
                    ->required()
                    ->placeholder('Enter Phone Number '),

                    Input::make('resume.email')
                    ->title('Email')
                    ->type('email')
                    ->required()
                    ->placeholder('Enter Email '),

                  
            
                    TextArea::make('resume.message')
                    ->title('Message')
                    ->required()
                    ->rows(3)
                    ->maxlength(200)
                    ->placeholder('Brief description for Enquiry'),
              
    
              
    
            ])
        ];
    }

    /**
     * @param Resume    $resume
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Resume $resume, Request $request)
    {
        $resume->fill($request->get('resume'))->save();

        

        Alert::info('You have successfully Updated a resume.');

        return redirect()->route('platform.resume.list');
    }

    /**
     * @param Post $resume
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Resume $resume)
    {
        $resume->delete();

        Alert::info('You have successfully deleted the resume.');

        return redirect()->route('platform.resume.list');
    }
}
