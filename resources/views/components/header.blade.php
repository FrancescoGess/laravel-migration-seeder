@foreach($treniInPartenza as $treno)
    <div>
        <p>Azienda: {{ $treno->azienda }}</p>
        <p>Stazione di Partenza: {{ $treno->stazione_partenza }}</p>
        <p>Stazione di Arrivo: {{ $treno->stazione_arrivo }}</p>
        <p>Orario di Partenza: {{ $treno->orario_partenza }}</p>
        <p>Orario di Arrivo: {{ $treno->orario_arrivo }}</p>
        <p>Codice Treno: {{ $treno->codice_treno }}</p>
        <p>Numero Carrozze: {{ $treno->numero_carrozze }}</p>
        <p>In Orario: {{ $treno->in_orario ? 'Sì' : 'No' }}</p>
        <p>Cancellato: {{ $treno->cancellato ? 'Sì' : 'No' }}</p>
    </div>
@endforeach
