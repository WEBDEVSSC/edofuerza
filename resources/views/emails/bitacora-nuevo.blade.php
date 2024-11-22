<x-mail::message>

<h1>Nuevo registro</h1>

<x-mail::panel>

<p><strong>Unidad</strong> : {{ $bitacora->unidad }}</p>
<p><strong>Responsable</strong> : {{ $bitacora->responsable }}</p>
<p><strong>Turno</strong> : {{ $bitacora->turno }}</p>

</x-mail::panel>

</x-mail::message>