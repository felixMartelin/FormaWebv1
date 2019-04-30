<table class="table table-bordered table-striped">
    <thread>
        <th> ID </th>
        <th> Description </th>
        <th> intitulé </th>
    </thread>
    @foreach($lesConferences as $Conference)
        <tr>
            <td> {{ $Conference->idConf }}</td>
            <td> {{ $Conference->descriptionConf }}</td>
            <td> {{ $Conference->intituleConf}}</td>
        </tr>
    @endforeach
</table>