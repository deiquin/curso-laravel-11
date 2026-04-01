@props(['type'])

@php
	switch($type){
		case 'info':
		$class='bg-blue-900 px-8 py-5 text-white hover:bg-blue-200';
		break;

		case 'warning':
		$class='bg-yellow-900 px-8 py-5 text-white hover:bg-yellow-200';
		break;

		case 'danger':
		$class='bg-red-900 px-8 py-5 text-white hover:bg-red-200';
		break;



	}
@endphp

<div class='border  px-4 py-3 rounded relative <?php echo $class; ?>' role="alert">
    <strong class="font-bold">{{$title ?? 'apura oe'}}</strong>
    <span class="block sm:inline">{{$slot}}</span>
</div>