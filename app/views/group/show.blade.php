
<div class="page-header">
	<div class="btn-group pull-right">
		<button class="btn dropdown-toggle" data-toggle="dropdown">
			<span class="icon-pencil"></span>
		</button>
		<ul class="dropdown-menu">
			<li><a href="{{ URL::action('GroupController@edit', [$group->id, $group->hash]) }}">Change group contact</a></li>
		</ul>
	</div>

	<h1>{{{ $group->name }}} <small>{{{ $group->section_name }}}</small></h1>
</div>

{{ $attendee_list }}

<p class="text-right">
	Press <i class="icon icon-plus"></i> plus to save each attendee.  Then you'll see a <i class="icon icon-cog"></i> cog next to each saved attendee.
</p>

<p class="clearfix">
	<a href="{{ URL::action('HomeController@showWelcome') }}" class="btn btn-success pull-right">Finished</a>
</p>