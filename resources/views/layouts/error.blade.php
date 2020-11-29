@if( $errors->has($input) )
<span class="text text-danger">{{ $errors->first($input) }}</span>
@endif