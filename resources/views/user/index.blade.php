<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    Listado de Usuarios

	<table>
		<thead>
			<th>Id</th>
			<th>Email</th>
			<th>Nombre</th>
		</thead>
		@foreach($users as $user)
		<tr>
			<td>
				{{$user->id;}} 
			</td>
			<td>
				{{$user->email;}} 
			</td>
			<td>
				{{$user->name;}} 
			</td>
		</tr>
	   	@endforeach;
	</table>
	<br>
    {{$users->links()}}
</div>
