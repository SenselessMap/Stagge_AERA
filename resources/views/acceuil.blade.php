<?php
    //Va dynamiquement chercher les fichier dans le dossier
	$dossierImage = public_path('assets/image/autre/caroussel/*');
	$imageCaroussels = glob($dossierImage);
	$count = count($imageCaroussels);
	shuffle($imageCaroussels);
?>

<div class="col centered">
    <div class="row centered bienvnue">
        <div class="CarousselAcceuil">
            @foreach(array_merge($imageCaroussels, $imageCaroussels) as $image)
                <img src="{{ asset('assets/image/autre/caroussel/' . basename($image)) }}" 
                    class="imageCarousselAcceuil" 
                    style="--img-count: {{ $count }};">
            @endforeach
        </div>
        <div class="welcome col centered">
            <h1>Create your own dream</h1>
            <h2>Create professional high quality sportwear designs today!</h2>

            <button>Start now!</button>
        </div>
    </div>
</div>