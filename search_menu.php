<div class="has-search">
    <span class="fa fa-search form-control-feedback"></span>
    <input id='search_inquiry' type="text" class="form-control form-control2" placeholder=" <?php
                                                                                            if ($lang_menu == "am") {
                                                                                                echo "Որոնել";
                                                                                            }
                                                                                            if ($lang_menu == "en") {
                                                                                                echo "Search";
                                                                                            }
                                                                                            if ($lang_menu == "ru") {
                                                                                                echo "Поиск";
                                                                                            }
                                                                                            ?>">
</div>
<div class="search_result">

</div>
<input type="hidden" id='search_lang' value="<?php echo $lang_menu; ?>">
<script>
    $('.has-search').keyup(function() {
        var searchIquiry = $('#search_inquiry').val();
        var lang = $('#search_lang').val();
        if (searchIquiry.length > 2) {
            $.ajax({
                type: 'post',
                url: '../search_menu_process.php',
                data: {
                    searchIquiry: searchIquiry,
                    lang: lang
                },
                success: function(result) {

                    console.log(result);
                    $('.search_result').css('display', 'block').html(result);


                }
            });
        }
    });
</script>