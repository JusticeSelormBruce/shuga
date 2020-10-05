<div class=" table-sm table-responsive">
            <table class="table table-striped table-dark table-hover">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Volumn</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($details as $data)
                        <tr>
                            <td>{{ $data->s_date }}</td>
                            <td>{{ $data->s_time }}</td>
                            <td>{{ $data->volumn }}</td>
                            <td> @include('data.edit')<span class="mx-2">@include('data.delete')</span></td>
                        </tr>
                    @endforeach
                    {{$details->links()}}
                </tbody>
            </table>
</div> 