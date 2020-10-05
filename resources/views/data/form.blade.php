<section class="m-5">

    <div class="row py-2">
        <input type="date" name="s_date" class="form-control input-group-sm" required
            value="{{ $data->s_date ?? "" ?? old('s_date') }}">
    </div>
    <div class="row py-2">
        <input type="time" name="s_time" class="form-control input-group-sm" required value="{{ $data->s_time ?? $date }}"
            readonly>
    </div>
    <div class="row py-2">
        <input type="number" name="volumn" class="form-control input-group-sm" required
            value="{{ $data->volumn ?? ('' ?? old('volumn')) }}" >
    </div>

</section>
