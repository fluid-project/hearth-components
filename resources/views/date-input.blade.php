<fieldset id="{{ $name }}" x-bind:class="error ? 'date field--error' : 'date'" x-data="dateInput()" x-init="dateToComponents('{{ $value ?? '' }}', 'true')">
    <legend>
        {{ $label ?? __('hearth-components::forms.label_date') }}
    </legend>

    @if($hint)
    <x-hearth-hint :for="$name">{{ $hint }}</x-heart-hint>
    @endif

    <div class="field field--year">
        <x-hearth-label :for="$name . '_year'" :value="__('hearth-components::forms.label_year')" />
        <x-hearth-input :name="$name . '_year'" pattern="[0-9]*" inputmode="numeric" :required="$required" :disabled="$disabled" :aria-describedby="$describedBy()" :aria-invalid="$invalid ? 'true' : 'false'" x-bind:aria-invalid="error.toString()" x-bind:aria-describedby="error ? '{{ $hinted ? $name . '-hint ' . $name . '-error' : $name . '-error' }}' : '{{ $hinted ? $name . '-hint' : '' }}'" x-model="year" x-on:blur="componentsToDate()" />
    </div>

    <div class="field field--month">
        <x-hearth-label :for="$name . '_month'" :value="__('hearth-components::forms.label_month')" />
        <x-hearth-select :name="$name . '_month'" :required="$required" :disabled="$disabled" :aria-describedby="$describedBy()" :aria-invalid="$invalid ? 'true' : 'false'" x-bind:aria-invalid="error.toString()" x-bind:aria-describedby="error ? '{{ $hinted ? $name . '-hint ' . $name . '-error' : $name . '-error' }}' : '{{ $hinted ? $name . '-hint' : '' }}'" :options="$months" x-model="month" x-on:change="componentsToDate()" />
    </div>

    <div class="field field--day">
        <x-hearth-label :for="$name . '_day'" :value="__('hearth-components::forms.label_day')" />
        <x-hearth-input :name="$name . '_day'" pattern="[0-9]*" inputmode="numeric" :required="$required" :disabled="$disabled" :aria-describedby="$describedBy()" :aria-invalid="$invalid ? 'true' : 'false'" x-bind:aria-invalid="error.toString()" x-bind:aria-describedby="error ? '{{ $hinted ? $name . '-hint ' . $name . '-error' : $name . '-error' }}' : '{{ $hinted ? $name . '-hint' : '' }}'" x-model="day" x-on:blur="componentsToDate()" />
    </div>

    <input type="hidden" name="{{ $name }}" x-model="date" />

    <div x-show="error">
        <x-hearth-error :for="$name">{{ __('hearth-components::validation.date', ['attribute' => strtolower($label)]) }}</x-hearth-error>
    </div>
</fieldset>
