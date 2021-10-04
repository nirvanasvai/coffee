@if ($item->status==1)
    badge badge-success
@elseif ($item->status ==2)
    badge badge-warning
@else
    badge badge-danger
@endif
