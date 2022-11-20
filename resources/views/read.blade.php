

<table border=1>
    <tr><th>10</th></tr> <th>title</th><th>description</th>
    @foreach ($data as $dt)
    <tr>
        <td>{{$dt->id}}</td> <td>{{ $dt->title }}</td><td>{{ $dt->description }}</td>
    </tr>
    @foreach
</table>