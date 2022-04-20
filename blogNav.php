<ul class="nav nav-pills center-pills" id="myTab">
    <?php
    if ($lang_menu == "am") {
    ?>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogAll.php")) {
                                    echo "active";
                                } ?>" href="blogAll.php">
                Բոլորը
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogArmenia.php")) {
                                    echo "active";
                                } ?>" href="blogArmenia.php">
                Հայաստան
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogKotayk.php")) {
                                    echo "active";
                                } ?>" href="blogKotayk.php">
                Կոտայքի մարզ
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogSevaberd.php")) {
                                    echo "active";
                                } ?>" href="blogSevaberd.php">
                Սևաբերդ
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogCultural.php")) {
                                    echo "active";
                                } ?>" href="blogCultural.php">
                Պատմամշակութային վայրեր
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogEntertainment.php")) {
                                    echo "active";
                                } ?>" href="blogEntertainment.php">
                Ժամանցի վայրեր
            </a>
        </li>
    <?php
    }

    if ($lang_menu == "en") {
    ?>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogAll.php")) {
                                    echo "active";
                                } ?>" href="blogAll.php">
                All
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogArmenia.php")) {
                                    echo "active";
                                } ?>" href="blogArmenia.php">
                Armenia
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogKotayk.php")) {
                                    echo "active";
                                } ?>" href="blogKotayk.php">
                Kotayk Region
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogSevaberd.php")) {
                                    echo "active";
                                } ?>" href="blogSevaberd.php">
                Sevaberd
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogCultural.php")) {
                                    echo "active";
                                } ?>" href="blogCultural.php">
                Historical and cultural places
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogEntertainment.php")) {
                                    echo "active";
                                } ?>" href="blogEntertainment.php">
                Entertainment
            </a>
        </li>
    <?php
    }
    if ($lang_menu == "ru") {
    ?>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogAll.php")) {
                                    echo "active";
                                } ?>" href="blogAll.php">

                Все
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogArmenia.php")) {
                                    echo "active";
                                } ?>" href="blogArmenia.php">
                Армения
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogKotayk.php")) {
                                    echo "active";
                                } ?>" href="blogKotayk.php">
                Котайкская область
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogSevaberd.php")) {
                                    echo "active";
                                } ?>" href="blogSevaberd.php">
                Севаберд
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogCultural.php")) {
                                    echo "active";
                                } ?>" href="blogCultural.php">
                Исторические и культурные объекты
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php
                                if (str_starts_with($file_name, "blogEntertainment.php")) {
                                    echo "active";
                                } ?>" href="blogEntertainment.php">
                Развлекательные заведения
            </a>
        </li>
    <?php
    }
    ?>
</ul>