@if (count($errors)>0)
@foreach ($errors->all() as $item)
<div class="alert alert-danger" role="alert">
    <strong>{{$item}}</strong>
</div>
@endforeach

@endif
@if (session('success'))
<div class="alert alert-success" role="alert">
    <strong>{{session('success')}}</strong>
</div>
@endif
@if (session('error'))
<div class="alert alert-error" role="alert">
    <strong>{{session('error')}}</strong>
</div>
@endif