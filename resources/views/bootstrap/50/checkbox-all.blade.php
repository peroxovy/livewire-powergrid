@if($checkbox)
    <th class="checkbox-column">
        <div class="form-check">
            <label>
                <input wire:click="selectCheckboxAll()" wire:model="checkboxAll" class="form-check-input" type="checkbox">
            </label>
        </div>
    </th>
@endif
