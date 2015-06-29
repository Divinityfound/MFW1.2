<li class="dropdown-submenu">
	<a tabindex="0" data-toggle="dropdown">PDFs</a>
	<ul class="dropdown-menu">
		<li>
			<a tabindex="0" href="/admin/super/pdfs/create">Create PDF</a>
		</li>
		<li>
			<a tabindex="0" href="/admin/super/pdfs/">View PDFs</a>
		</li>
		<li></li>
		<li class="divider"></li>
		@foreach ($menu['pdfs'] as $item)
		<li>
			<a tabindex="0" href="/admin/super/pdfs/{{ $item->id }}">
				<?php
				echo ucwords(preg_replace('/(?<!\ )[A-Z]/', ' $0', str_replace('_', ' ',$item->name)));
				?></a>
			</li>
		@endforeach
	</ul>
</li>