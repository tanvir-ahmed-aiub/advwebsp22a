<table>
    @foreach($students as $s)
    <tr>
        <td><a href="{{route('student.details',['id'=>encrypt($s->id)])}}">{{$s->name}}</a></td>
        <td>{{$s->user_id}}</td>
        <td>{{$s->username}}</td>
       
    </tr>
    @endforeach
</table>