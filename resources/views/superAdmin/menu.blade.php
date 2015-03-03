<ul class="nav nav-pills">
	<li class="active"><a href='#' title="Filler for now...">MFW 1.2</a></li>
	<li class="dropdown">
		<a tabindex="0" data-toggle="dropdown"><i class="glyphicon glyphicon-cog"></i><span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
			<li class="dropdown-submenu">
				<a tabindex="0" data-toggle="dropdown">Objects</a>
				<ul class="dropdown-menu">
					<li>
						<a tabindex="0" href="/admin/super/createObject">Create Object</a>
					</li>
					<li>
						<a tabindex="0" href="/admin/super/viewObjects">View Objects</a>
					</li>
					<li></li>
					<li class="divider"></li>
					@foreach ($menu['objects'] as $item)
					<li>
						<a tabindex="0" href="/admin/super/viewObject/{{ $item->name }}">
						<?php
							echo ucwords(str_replace('_', ' ',$item->name));
						?></a>
					</li>
					@endforeach
				</ul>
			</li>
			<li class="dropdown-submenu">
				<a tabindex="0" data-toggle="dropdown">Relationships</a>
				<ul class="dropdown-menu">
					<li>
						<a tabindex="0">Create Relationship</a>
					</li>
					<li>
						<a tabindex="0" href="/admin/super/viewRelationships">View Relationships</a>
					</li>
					<li></li>
					<li class="divider"></li>
					@foreach ($menu['relationships'] as $item)
					<li>
						<a tabindex="0" href="/admin/super/viewRelationship/{{ $item->name }}">
						<?php
							echo ucwords(str_replace('_', ' ',$item->name));
						?></a>
					</li>
					@endforeach
				</ul>
			</li>
			<li></li>
			<li class="divider"></li>
			<li class="dropdown-submenu">
				<a tabindex="0" data-toggle="dropdown">APIs</a>
				<ul class="dropdown-menu">
					<li>
						<a tabindex="0">Create API</a>
					</li>
					<li>
						<a tabindex="0">View API</a>
					</li>
					<li></li>
					<li class="divider"></li>
				</ul>
			</li>
			<li class="dropdown-submenu">
				<a tabindex="0" data-toggle="dropdown">Middleware</a>
				<ul class="dropdown-menu">
					<li>
						<a tabindex="0">Create Middleware Map</a>
					</li>
					<li>
						<a tabindex="0">View Middleware Maps</a>
					</li>
					<li></li>
					<li class="divider"></li>
				</ul>
			</li>
			<li></li>
			<li class="divider"></li>
			<li class="dropdown-submenu">
<<<<<<< HEAD
				<a tabindex="0" data-toggle="dropdown">Templates</a>
				<ul class="dropdown-menu">
					<li>
						<a tabindex="0"><a href='#'>Create Template</a>
					</li>
					<li>
						<a tabindex="0"><a href='#'>View Templates</a>
					</li>
					<li>
						<a tabindex="0"><a href='#'>Select Template</a>
=======
				<a tabindex="0" data-toggle="dropdown">Forms</a>
				<ul class="dropdown-menu">
					<li>
						<a tabindex="0"><a href='/admin/super/createForms'>Create Form</a>
					</li>
					<li>
						<a tabindex="0"><a href='/admin/super/viewForms'>View Forms</a>
>>>>>>> origin/master
					</li>

					<li></li>
					<li class="divider"></li>
<<<<<<< HEAD
				</ul>
			</li>
			<li></li>
			<li class="divider"></li>
			<li class="dropdown-submenu">
				<a tabindex="0" data-toggle="dropdown">Forms</a>
				<ul class="dropdown-menu">
					<li>
						<a tabindex="0"><a href='/admin/super/createForms'>Create Form</a>
					</li>
					<li>
						<a tabindex="0"><a href='/admin/super/viewForms'>View Forms</a>
					</li>
					<li></li>
					<li class="divider"></li>
=======
>>>>>>> origin/master
				</ul>
			</li>
			<li class="dropdown-submenu">
				<a tabindex="0" data-toggle="dropdown">Form Processing</a>
				<ul class="dropdown-menu">
					<li>
						<a tabindex="0"><a href='/admin/super/createFormProcess'>Create Form</a>
					</li>
					<li>
						<a tabindex="0"><a href='/admin/super/viewFormsProcesses'>View Forms</a>
					</li>
					<li></li>
					<li class="divider"></li>
				</ul>
			</li>
			<li class="dropdown-submenu">
				<a tabindex="0" data-toggle="dropdown">Custom Reports</a>
				<ul class="dropdown-menu">
					<li>
						<a tabindex="0">Create Custom Report</a>
					</li>
					<li>
						<a tabindex="0">View Custom Reports</a>
					</li>
					<li></li>
					<li class="divider"></li>
				</ul>
			</li>

			<li></li>
			<li class="divider"></li>
			<li class="dropdown-submenu">
				<a tabindex="0" data-toggle="dropdown">Workflow</a>
				<ul class="dropdown-menu">
					<li>
						<a tabindex="0" href="/admin/super/createWorkflow">Create Workflow Chain</a>
					</li>
					<li>
						<a tabindex="0" href="/admin/super/viewWorkflows">View Workflow Chains</a>
					</li>
					<li></li>
					<li class="divider"></li>
					@foreach ($menu['workflows'] as $item)
					<li>
						<a tabindex="0" href="/admin/super/viewWorkflow/{{ $item->workflowitem }}">
						<?php
							echo ucwords(preg_replace('/(?<!\ )[A-Z]/', ' $0', str_replace('_', ' ',$item->workflowitem)));
						?></a>
					</li>
					@endforeach
				</ul>
			</li>
			<li class="dropdown-submenu">
				<a tabindex="0" data-toggle="dropdown">Required Files</a>
				<ul class="dropdown-menu">
					<li>
						<a tabindex="0">(Re)install</a>
					</li>
					<li>
						<a tabindex="0">View</a>
					</li>
				</ul>
			</li>
			<li class="dropdown-submenu">
				<a tabindex="0" data-toggle="dropdown">Unit Tests</a>
				<ul class="dropdown-menu">
					<li>
						<a tabindex="0">Create Unit Test</a>
					</li>
					<li>
						<a tabindex="0">View Unit Tests</a>
					</li>
					<li></li>
					<li class="divider"></li>
				</ul>
			</li>
			<li></li>
			<li class="divider"></li>
			<li class="dropdown-submenu">
				<a tabindex="0" data-toggle="dropdown">Other</a>
				<ul class="dropdown-menu">
					<li>
						<a tabindex="0">Clone</a>
					</li>
					<li>
						<a tabindex="0">Change Database</a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
</ul>