<?php
include "header.php";
include "low_navbar.php";
?>

    <header class="bar bar-nav">
        <a class="icon icon-gear pull-right"></a>
        <h1 class="title">List all food</h1>
    </header>
    <div class="content">
        <ul class="table-view">
            <li class="table-view-cell media">
                <a class="navigate-right" href="/index.php?p=product" data-transition="slide-in" style="padding-right: 15px;">
                    <img class="media-object pull-left" src="https://i.ytimg.com/vi/qlfE0hfsbH0/maxresdefault.jpg" height="42px" width="42px">
                    <div class="media-body">
                        Egg Whites
                        <table style="width: 100%">
                            <tr align="center">
                                <th><p>Protein:</p></th>
                                <th><p>Carbs:</p></th>
                                <th><p>Fat:</p></th>
                                <th><p>Calories:</p></th>
                            </tr>
                            <tr align="center">
                                <td><p>13g</p></td>
                                <td><p>1.1g</p></td>
                                <td><p>11g</p></td>
                                <td><p>155</p></td>
                            </tr>
                        </table>
                    </div>
                </a>
            </li>
            <li class="table-view-cell media">
                <a class="navigate-right" href="/index.php?p=product" data-transition="slide-in" style="padding-right: 15px;">
                    <img class="media-object pull-left" src="http://cdn.chobani.com/prod/chobani.com/img/display/plain/blended-non-fat-plain-53oz.png" height="42px" width="42px">
                    <div class="media-body">
                        Greek Yogurt
                        <table style="width: 100%">
                            <tr align="center">
                                <th><p>Protein:</p></th>
                                <th><p>Carbs:</p></th>
                                <th><p>Fat:</p></th>
                                <th><p>Calories:</p></th>
                            </tr>
                            <tr align="center">
                                <td><p>10g</p></td>
                                <td><p>3.6g</p></td>
                                <td><p>0.4g</p></td>
                                <td><p>59</p></td>
                            </tr>
                        </table>
                    </div>
                </a>
            </li>
            <li class="table-view-cell media">
                <a class="navigate-right" href="/index.php?p=product" data-transition="slide-in" style="padding-right: 15px;">
                    <img class="media-object pull-left" src="http://www.quakeroats.com/images/default-source/products/organic-regular-detail-sflbabfd54418cb46e438643ff2300547e50" height="42px" width="42px">
                    <div class="media-body">
                        Oatmeal
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
                    </div>
                </a>
            </li>
        </ul>
    </div>

<?php
print_low_navbar('food');

include "footer.php";
?>