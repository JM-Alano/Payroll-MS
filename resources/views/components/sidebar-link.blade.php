@props(['href'])

@php
    $active = request()->is(ltrim($href, '/') . '*');
@endphp

<a  href="{{ $href }}"
   {{ $attributes->merge([
       'class' => ($active
           ? 'bg-white/10 text-white fill-white'
           : 'text-zinc-400 hover:text-white hover:bg-white/5 fill-zinc-400 hover:fill-white') .
           ' group flex items-center gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold ajax-link'
   ]) }}>
   {{ $slot }}
</a>
