@extends ('layout/app')

@section ('style')
	<link rel="stylesheet" href="{{ URL::asset('style/style.css') }}">
@endsection

@section ('script')
	<script src="{{ URL::asset('scripts/script.js') }}" charset="utf-8"></script>
@endsection

@section ('content')

<div class="app-wrapper">   
<h1>Select a Breed</h1>
<select id="breed-selector">
        <option value="airedale">Airedale</option>
        <option value="labrador">Labrador</option>
        <option value="borzoi">Borzoi</option>
        <option value="briard">Briard</option>
        <option value="doberman">Doberman</option>
        <option value="beagle">Beagle</option>
        <option value="tervuren">Tervuren</option>
        <option value="terrier">Terrier</option>
        <option value="kombai">Kombai</option>
        <option value="rottweiler">Rottweiler</option>
        <option value="hound">Hound</option>
        <option value="leonberg">Leonberg</option>
        <option value="mastiff">Mastiff</option>
        <option value="pembroke">Pembroke</option>
        <option value="pitbull">Pitbull</option>
        <option value="pomeranian">Pomeranian</option>
        <option value="redbone">Redbone</option>
        <option value="segugio">Segugio</option>
        <option value="poodle">Poodle</option>
        <option value="wolfhound">Wolfhound</option>



    </select>
    <button class="generate-dog">Generate Dog</button>
    <div id="image-container"></div>
</div>
@endsection