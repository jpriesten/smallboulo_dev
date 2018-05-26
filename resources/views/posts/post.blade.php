	
	<div>
	  <h4>{{ $post->userSkill }} Needed! {{ $post->user->lastName }} on {{ $post->user->created_at->toFormattedDateString() }}</h4>
	  <p> {{ $post->toDo }}.</p>
	  <small>Category of Job: {{ $post->userSkill }}</small>
	  <hr>
	</div>