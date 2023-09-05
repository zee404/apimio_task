@component('mail::message')
# SKU already Exists

Hello 

The SKU "{{ $sku }}" you attempted to add already exists in our records.

@component('mail::button', ['url' => ''])
view Product
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
