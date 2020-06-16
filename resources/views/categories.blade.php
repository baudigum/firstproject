<table>
 <tr>
  <th width="10%">id</th>
  <th width="35%">First Name</th>
  <th width="35%">Last Name</th>
  <th width="30%">city</th>
  <th width="30%">country</th>
  <th width="30%">age</th>
 </tr>
 @foreach($data as $user)
  <tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->first_name }}</td>
   <td>{{ $user->last_name }}</td>
   <td>{{ $user->city }}</td>
   <td>{{ $user->country }}</td>
   <td>{{ $user->age }}</td>
   <td>

 @endforeach
</table>
