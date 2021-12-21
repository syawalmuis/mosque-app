{{-- <ul>
    @foreach ($sumbangan as $s)
    <?php
        $d = explode(' ', $s->created_at)
    ?>
    <li>{{ $s->created_at }}</li>
    <li>{{ $d[0] }}</li>
    <input class="form-control" type="date" value="{{ date('Y-m-d') }}">
    <hr>
    <br>
    @endforeach
</ul> --}}


<x-app></x-app>