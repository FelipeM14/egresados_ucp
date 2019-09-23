@component('mail::message')
# Completar registro


## Bienvenido(a)
### Señor(a): {{ $name.' '.$last_name }}

Por favor siga el <a href="{{ config('app.url').'/complete/'.$code }}">enlace</a> para completar el registro.

@component('mail::button', ['url' => config('app.url').'/complete/'.$code])
Completar registro
@endcomponent

Cordialmente,<br>
Oficina de graduados
Universidad Católica de Pereira<br>
Teléfono: PBX 3124000 ext. 1006<br>
Celular: 312 778 7141


@endcomponent
