
<div>
<h4>Actualizacion De Datos</h4>
    <br>
</div>
<?php // {{ $Modo == 'crear' ? 'Agregar graduado':'Modificar graduado' }} realizando if para ver que es lo que se quiere ?>


@foreach($columns as $column) <?php #Imprimendo los campos  {{ $loop->iteration }}?>



<div class="form-group">

    <label for="{{$column->name}}" class="control-label">{{$column->title}}</label>
    <input type="text" class="form-control {{ $errors->has('$column->name')?'is-invalid': '' }}" name="{{$column->name}}" id="{{$column->name}}" <?php #is-invalid es para que se marque rojo ?>
    value="{{ isset($column->name) ? '' : old('$column->name') }}"><?php #realizando if isset si esta lleno imprima $empleado->nombre  : si no  escriba '' ?>



    {!! $errors->first('$column->name','<div class="invalid-feedback">:message</div>') !!}<?php #Es un metodo de impresion que con los !! protegen de un ataque XSS, lo protegen para no enviar info, le quita algunos caracteres ?>
    <?php #Buscas el primer mensaje de error (array), en la posicion Nombre.e imprimes el msj ?>


</div>
@endforeach



