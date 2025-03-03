<?php

namespace HearthComponents\Components;

use HearthComponents\Traits\AriaDescribable;
use HearthComponents\Traits\HandlesValidation;
use Illuminate\View\Component;
use Illuminate\View\View;

class RadioButtons extends Component
{
    use AriaDescribable;
    use HandlesValidation;

    /**
     * The name of the radio buttons as used in form submission.
     *
     * @var string
     */
    public $name;

    /**
     * The error bag associated with the form input.
     *
     * @var null|string
     */
    public $bag;

    /**
     * The radio button options.
     *
     * @var array[]
     */
    public $options;

    /**
     * The checked option.
     *
     * @var null|string|int
     */
    public $checked;

    /**
     * Whether the form input has validation errors.
     *
     * @var bool
     */
    public $invalid;

    /**
     * Whether the radio buttons have a hint associated with them, or the id of the hint.
     *
     * @var bool|string
     */
    public $hinted;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $options, $checked = null, $bag = 'default', $hinted = false)
    {
        $this->name = $name;
        $this->options = $options;
        $this->checked = $checked;
        $this->bag = $bag;
        $this->hinted = $hinted;
        $this->invalid = $this->hasErrors($this->name, $this->bag);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('hearth-components::radio-buttons');
    }
}
