<div class="text-end">
    
    <!-- @can('edit_'.$module_name) -->
    <x-buttons.edit route='{!!route("backend.$module_name.edit", $data->id)!!}' title="{{__('Edit')}} {{ ucwords(Str::singular($module_name)) }}" small="true" />
    <!-- @endcan -->
    <x-buttons.show route='{!!route("backend.$module_name.show", $data->id)!!}' title="{{__('Show')}} {{ ucwords(Str::singular($module_name)) }}" small="true" />
</div>
