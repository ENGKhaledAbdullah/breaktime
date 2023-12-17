<?php
require_once('../database.php');

echo $title = $_POST[ 'title' ]??'';

if(isset($_POST['submit']))
{
    $insertSql = "INSERT INTO posts (title,subTitle,content,author ) VALUES ('".$title."','".$subTitle."','".$content."','Khaled')";
    $conn->query($insertSql);
}

?>

<?php require('../../partial/header.php');?>

    <section class="u-align-right u-clearfix u-section-2" id="carousel_0f8b">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div
                class="u-absolute-hcenter-xs u-expanded-height u-opacity u-opacity-60 u-palette-3-base u-shape u-shape-rectangle u-shape-1">
            </div>
            <h1 class="u-custom-font u-font-playfair-display u-text u-text-1">BreakTime</h1>
            <p class="u-text u-text-2">Start your day with an easy pancake or omelet breakfast. Or plan a showstopping
                brunch with quiches, waffles, casseroles, and more!</p>
            <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-1"
                            src="">
                            <div class="u-container-layout u-halign-left u-container-layout-1" style="flex-direction:row;">
                                <a href=""
                                    class="u-link u-no-underline u-text-black u-text-hover-palette-2-base u-link-1">
                                    recipes</a>
                                <a href=""
                                    class="u-link u-no-underline u-text-black u-text-hover-palette-2-base u-link-1">
                                    providers</a>
                            </div>
                        </div>
                        <div class="u-container-style u-image u-layout-cell u-size-20 u-image-1" src="">
                            <div class="u-container-layout u-container-layout-2"></div>
                        </div>
                        <div class="u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-3" src="">
                            <div class="u-container-layout u-valign-bottom u-container-layout-3">
                                <img class="u-expand-resize u-expanded-width u-image u-image-2" src="../../asset/images/2.jpg">
                            </div>
                        </div>
                        <form method = 'post' class="m-5">
                            <div class = 'mb-3'>
                                <label for = 'exampleInputEmail1' class = 'form-label'>title Post</label>
                                <input name = 'title' type = 'text' class = 'form-control'>
                            </div>
                            <div class = 'mb-3'>
                                <label for = 'exampleInputEmail1' class = 'form-label'>subTitle Post</label>
                                <input name = 'subTitle' type = 'text' class = 'form-control'>
                            </div>
                            <div class = 'form-floating'>
                                <textarea name = 'content' class = 'form-control' placeholder = 'Leave a comment here' id = 'floatingTextarea2' style = 'height: 100px'></textarea>
                                <label for = 'floatingTextarea2'>Contents</label>
                            </div>
                            <button type = 'submit' class = 'btn btn-primary mt-3' name="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php require('../../partial/footer.php');?>