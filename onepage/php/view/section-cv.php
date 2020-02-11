
        <section id="S1"><h2>Expérience</h2></section>
        </br>
        <section>
            <ul>
                <li>Septembre 2019 – Mars 2019 </br>
                    Employé Polyvalent en espace vert </br>
                    Salarié </br>
                    EVOLIO Groupe La Varappe </br>
                    </br>
                </li>
                <li>Septembre 2018 – Septembre 2018 </br>
                    Electronicien de contrôle et de maintenance </br>
                    Stagiaire </br>
                    FlyDrone Concept  </br>
                    </br>
                </li>
                <li>Novembre 2017 – Décembre 2017 </br>
                    Electronicien de contrôle et de maintenance </br>
                    Stagiaire </br>
                    THALES </br>
                </li>
            </ul>
        </section>
        </br>
        <section id="S2"><h2>Formations</h2></section>
        </br>
        <section>
            <ul>
                <li>2018 </br>
                    Marseille CRP La Rouguière </br>
                    Formation de niveau IV (BAC) Non obtenu </br>
                    </br>
                </li>
                <li>Marseille AFPA La Treille </br>
                    Titre Pro. Carreleur </br>
                    </br>
                </li>
                <li>Marseille Lycée Camille Julian </br>
                    Cap Serveur </br>
                    </br>          
                </li>
            </ul>
            </br>
        </section>


<div class="container">
<?php
    $tableau=glob("assets/img/Logo*.png");
    foreach($tableau as $i => $image)

{
    echo
    <<<CODEHTML
        <img src="$image" alt="$image">
        CODEHTML;

}
?>
</div>