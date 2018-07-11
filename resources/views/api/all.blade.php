<table cellspacing="0" >
<tr>
    <td style="border:1px solid black">School</td>
    <td style="border:1px solid black">Nomination</td>
</tr>
@foreach($data as $result)
<tr>
    <td style="border:1px solid black">
        {{$result->school_name}}
    </td>
    <td style="border:1px solid black; text-align: center">
        {{$result->vote_count}}
    </td>
</tr>
@endforeach
</table>