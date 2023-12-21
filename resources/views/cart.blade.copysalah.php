@foreach ($data as $data)
@if($data->ayam)
{{ $data->ayam->kode_ayam }}
{{ $data->ayam->berat }}
{{ $data->ayam->kategori_id }}
{{ $data->ayam->deskripsi }}

@endif
@endforeach


<br> <br><br>


@foreach($user as $data)
@if($data->users)
{{ $data->users->name }}
@endif
@endforeach