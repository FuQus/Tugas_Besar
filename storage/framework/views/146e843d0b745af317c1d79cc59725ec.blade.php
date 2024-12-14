<?php extract((new \Illuminate\Support\Collection($attributes->getAttributes()))->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['color','disabled','form','href','icon','iconSize','keyBindings','labelSrOnly','tag','target','tooltip','type','wire:click','wire:target','xOn:click','class','xCloak','xShow','badge','badgeColor','label','size','badgeColor'])
<x-filament::icon-button :color="$color" :disabled="$disabled" :form="$form" :href="$href" :icon="$icon" :icon-size="$iconSize" :key-bindings="$keyBindings" :label-sr-only="$labelSrOnly" :tag="$tag" :target="$target" :tooltip="$tooltip" :type="$type" :wire:click="$wireClick" :wire:target="$wireTarget" :x-on:click="$xOnClick" :class="$class" :x-cloak="$xCloak" :x-show="$xShow" :badge="$badge" :badgeColor="$badgeColor" :label="$label" :size="$size" :badge-color="$badgeColor" >

{{ $slot ?? "" }}
</x-filament::icon-button>