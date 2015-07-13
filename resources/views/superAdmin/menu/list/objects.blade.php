<li class="dropdown-submenu">
	<a tabindex="0" data-toggle="dropdown">Objects</a>
	<ul class="dropdown-menu">
		<li>
			<a tabindex="0" href="/admin/super/objects/create">Create Object</a>
		</li>
		<li>
			<a tabindex="0" href="/admin/super/objects">View Objects</a>
		</li>
		<li></li>
		<li class="divider"></li>
		@foreach ($menu['objects'] as $item)
			<li>
				<a tabindex="0" href="/admin/super/objects/{{ $item->name }}">
				<?php
					echo ucwords(str_replace('_', ' ',$item->name));
				?></a>
			</li>
		@endforeach
	</ul>
</li>