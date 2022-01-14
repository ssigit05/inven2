@props(['name'=>'', 'label'=>'','value'=>''])
<?php 
$invalid = $errors->has($name) ? ' is-invalid':'';
?>
<div class="form-group">
    <label for="<?= $name ?>"> <?= $label ?></label>
    <textarea name="<?= $name ?>"id="<?= $name ?>"{{ $attributes->merge(['class' => 'form-control'.$invalid])}}>{{ old($name, $value)}}</textarea>
@error($name)
    <div class="invalid-feedback">
        {{$message}}
    </div>
   
@enderror
</div>
