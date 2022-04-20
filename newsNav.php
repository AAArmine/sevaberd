<ul class="nav nav-pills center-pills" id="myTab">
    <?php
    if ($lang_menu == "am") {
    ?>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsAll.php")) {
                                    echo "active";
                                } ?>" href="newsAll.php">
                Բոլորը
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsArmenia.php")) {
                                    echo "active";
                                } ?>" href="newsArmenia.php">
                Հայաստան
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsKotayk.php")) {
                                    echo "active";
                                } ?>" href="newsKotayk.php">
                Կոտայքի մարզ
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsSevaberd.php")) {
                                    echo "active";
                                } ?>" href="newsSevaberd.php">
                Սևաբերդ
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsCultural.php")) {
                                    echo "active";
                                } ?>" href="newsCultural.php">
                Պատմամշակութային վայրեր
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsEntertainment.php")) {
                                    echo "active";
                                } ?>" href="newsEntertainment.php">
                Ժամանցի վայրեր
            </a>
        </li>
    <?php
    }

    if ($lang_menu == "en") {
    ?>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsAll.php")) {
                                    echo "active";
                                } ?>" href="newsAll.php">
                All
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsArmenia.php")) {
                                    echo "active";
                                } ?>" href="newsArmenia.php">
                Armenia
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsKotayk.php")) {
                                    echo "active";
                                } ?>" href="newsKotayk.php">
                Kotayk Region
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsSevaberd.php")) {
                                    echo "active";
                                } ?>" href="newsSevaberd.php">
                Sevaberd
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsCultural.php")) {
                                    echo "active";
                                } ?>" href="newsCultural.php">
                Historical and cultural places
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsEntertainment.php")) {
                                    echo "active";
                                } ?>" href="newsEntertainment.php">
                Entertainment
            </a>
        </li>
    <?php
    }
    if ($lang_menu == "ru") {
    ?>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsAll.php")) {
                                    echo "active";
                                } ?>" href="newsAll.php">

                Все
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsArmenia.php")) {
                                    echo "active";
                                } ?>" href="newsArmenia.php">
                Армения
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsKotayk.php")) {
                                    echo "active";
                                } ?>" href="newsKotayk.php">
                Котайкская область
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsSevaberd.php")) {
                                    echo "active";
                                } ?>" href="newsSevaberd.php">
                Севаберд
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsCultural.php")) {
                                    echo "active";
                                } ?>" href="newsCultural.php">
                Исторические и культурные объекты
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "newsEntertainment.php")) {
                                    echo "active";
                                } ?>" href="newsEntertainment.php">
                Развлекательные заведения
            </a>
        </li>
    <?php
    }
    ?>
</ul>