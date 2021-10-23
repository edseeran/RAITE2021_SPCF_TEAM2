@foreach($ships as $ship)
ETA: {{$ship->estemated_arr = $ship->ship_speed / $ship->distance}}
@endforeach