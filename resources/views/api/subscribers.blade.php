<table cellspacing="0" >
<tr>
    <td style="border:1px solid black">Email</td>
</tr>
<?php $c = 1 ?>
@foreach($subscribers as $subscriber)
<tr>
    <td style="border:1px solid black">
        {{$subscriber->email}}
    </td>
</tr>
<?php $c++;?>
@endforeach
</table>