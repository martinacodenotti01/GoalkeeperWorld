@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://imagizer.imageshack.com/img923/6102/vgeMik.png" alt="Goalkeeper World logo" class="logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
