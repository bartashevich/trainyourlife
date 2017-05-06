<?php
include "header.php";
?>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
        <a class="icon icon-left-nav pull-left" href="/index.php?p=food-list" data-transition="slide-out"></a>
        <h1 class="title">Egg Whites</h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content" style="padding: 10px">
        <div align="center">
            <img style="max-width: 100%; padding-top: 10px" src="https://i.ytimg.com/vi/qlfE0hfsbH0/maxresdefault.jpg">
        </div>

        <div class="description">
            <hr>
            <h5 align="center">Nutrition Facts (/100g):</h5>
            <table style="width: 100%">
                <tr align="center">
                    <th><p>Protein:</p></th>
                    <th><p>Carbs:</p></th>
                    <th><p>Fat:</p></th>
                    <th><p>Calories:</p></th>
                </tr>
                <tr align="center">
                    <td><p>2.4g</p></td>
                    <td><p>12g</p></td>
                    <td><p>1.4g</p></td>
                    <td><p>68</p></td>
                </tr>
            </table>
            <hr>
            <h5 align="center">Composition:</h5>
            <p>Egg white makes up around two-thirds of a chicken egg by weight.
                Water constitutes about 90% of this, with protein, trace minerals, fatty material,
                vitamins, and glucose contributing the remainder. A raw U.S.
                large egg contains around 33 grams of egg white with 3.6 grams of protein,
                0.24 grams of carbohydrate and 55 milligrams of sodium. It contains no cholesterol
                and the energy content is about 17 Calories. Egg white is an alkaline solution
                and contains around 148 proteins. The table below lists the major proteins in
                egg whites by percentage and their natural functions.</p>
        </div>
    </div>


<?php
include "footer.php";
?>