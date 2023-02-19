@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif