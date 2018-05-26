	
	<div>
	  <h4>{{ $searchR->userSkill }} Needing! 
			{{ $searchR->user->firstName }} {{ $searchR->user->lastName}} on 
			{{ $searchR->created_at->toFormattedDateString() }}
		</h4>
	  <p>{{ $searchR->toDo }}.</p>
	  <a href="/searchResult/{{$searchR->bouloId}}"><small>Category of Job</small></a>
	  <hr>
	</div>