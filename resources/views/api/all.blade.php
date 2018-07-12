<table cellspacing="0" >
<tr>
    <td style="border:1px solid black">School</td>
    <td style="border:1px solid black">Nomination</td>
</tr>
<?php $c = 1 ?>
@foreach($data as $result)
<tr>
    <td style="border:1px solid black">
        {{$c.'. '.$result->school_name}}
    </td>
    <td style="border:1px solid black; text-align: center">
        {{$result->vote_count}}
    </td>
</tr>
<?php $c++;?>
@endforeach
</table>